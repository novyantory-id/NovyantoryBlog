<?php

namespace App\Controllers\Penulis;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\KategoriModel;
use App\Models\UsersModel;
use App\Models\WritterModel;
use App\Models\ArtikelUserModel;

class Artikel extends BaseController
{
    function __construct()
    {
        helper(['url', 'form']);
    }
    public function index()
    {
        $artikelModel = new ArtikelUserModel();
        $writter_id = session()->get('writter_id');
        $data = [
            'title' => 'Data Artikel Penulis',
            'artikel' => $artikelModel->getArtikel($writter_id)

        ];
        return view('penulis/artikel/artikel', $data);
    }

    public function uploadImages()
    {
        $files = $this->request->getFiles();
        $uploadedFiles = $files['images'] ?? [];
        $imageUrls = [];

        foreach ($uploadedFiles as $file) {
            if ($file->isValid() && !$file->hasMoved()) {
                $fileName = $file->getRandomName();
                $filePath = ROOTPATH . 'public/assets/images/artikel/' . $fileName;
                $file->move(ROOTPATH . 'public/assets/images/artikel', $fileName);
                $imageUrls[] = base_url('assets/images/artikel/' . $fileName);
            }
        }

        return $this->response->setJSON(['images' => $imageUrls]);
    }

    public function deleteGambar()
    {
        $imageUrl = $this->request->getPost('imageUrl');

        $imagePath = str_replace(base_url(), '', $imageUrl);
        $fullPath = ROOTPATH . 'public/' . $imagePath;
        if (file_exists($fullPath)) {
            if (unlink($fullPath)) {
                return $this->response->setJSON(['status' => 'success', 'message' => 'Image deleted successfully']);
            } else {
                return $this->response->setJSON(['status' => 'error', 'message' => 'Failed to delete image']);
            }
        } else {
            return $this->response->setJSON(['status' => 'error', 'message' => 'Image not found'], 404);
        }
    }

    public function listImages()
    {
        $files = glob(ROOTPATH . 'public/assets/images/artikel/*.{jpg,png,gif}', GLOB_BRACE);
        $imageUrls = array_map(function ($file) {
            return base_url('assets/images/artikel/' . basename($file));
        }, $files);
        return $this->response->setJSON(['images' => $imageUrls]);
    }

    public function checkslug()
    {
        if ($this->request->isAJAX()) {
            $slug_artikel = $this->request->getPost('slug_artikel');
            $artikelModel = new ArtikelUserModel();
            $slugAsli = $slug_artikel;
            $counter = 1;

            //Cek apakah slug sudah ada di database
            while ($artikelModel->where('slug_artikel', $slug_artikel)->first()) {
                $slug_artikel = $slugAsli . '-' . $counter;
                $counter++;
            }

            //kembalikan slug yang unik ke frontend
            return $this->response->setJSON(['slug_artikel' => $slug_artikel]);
        }
    }

    public function create()
    {
        $kategoriModel = new KategoriModel();
        $data = [
            'title' => 'Add New Post',
            'kategori' => $kategoriModel->findAll(),
            'validation' => \Config\Services::validation()
        ];
        return view('penulis/artikel/create', $data);
    }

    public function store()
    {
        $rules = [
            'kategori_id' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kategori Artikel harus dipilih',
                ],
            ],
            'judul_artikel' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Judul Artikel harus diisi',
                ],
            ],
            'keyword' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Keyword Artikel harus diisi',
                ],
            ],
            'slug_artikel' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Slug Artikel harus diisi',
                ],
            ],
            'gambar_artikel' => [
                'rules' => 'uploaded[gambar_artikel]',
                'errors' => [
                    'uploaded' => 'Gambar thumbnail harus diunggah',
                ],
            ],
            'isi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Isi Artikel tidak boleh kosong',
                ],
            ],
        ];

        if (!$this->validate($rules)) {
            $kategoriModel = new KategoriModel();
            $data = [
                'title' => 'Add New Post',
                'kategori' => $kategoriModel->findAll(),
                'validation' => \Config\Services::validation()
            ];

            echo view('penulis/artikel/create', $data);
        } else {
            $artikelModel = new ArtikelUserModel();
            $kategoriModel = new KategoriModel();
            $userModel = new UsersModel();
            $gambar_artikel = $this->request->getFile('gambar_artikel');

            if ($gambar_artikel->getError() == 4) {
                $nama_gambar = '';
            } else {
                $nama_gambar = $gambar_artikel->getRandomName();
                $gambar_artikel->move('assets\images\artikel', $nama_gambar);
            }
            $artikelModel->insert([
                'user_id' => $this->request->getPost('user_id'),
                'kategori_id' => $this->request->getPost('kategori_id'),
                'judul_artikel' => $this->request->getPost('judul_artikel'),
                'keyword' => $this->request->getPost('keyword'),
                'slug_artikel' => $this->request->getPost('slug_artikel'),
                'gambar_artikel' => $nama_gambar,
                'isi' => $this->request->getPost('isi'),
                'created_at' => $this->request->getPost('created_at')
            ]);


            session()->setFlashdata('berhasil', 'Artikel berhasil disimpan');

            return redirect()->to(base_url('penulis/artikel'));
        }
    }

    public function edit($id)
    {

        $artikelModel = new ArtikelUserModel();
        $kategoriModel = new KategoriModel();
        //cek jika artikel bukan milik user
        $writter_id = session()->get('writter_id');
        $artikel = $artikelModel->getArtikel($writter_id, $id);

        if (!$artikel) {
            return redirect()->to(base_url('penulis/artikel/'));
        }
        $data = [
            'title' => 'Edit Artikel Penulis',
            'validation' => \Config\Services::validation(),
            'artikel' => $artikel,
            'kategori' => $kategoriModel->findAll(),
        ];
        return view('penulis/artikel/edit', $data);
    }

    public function update($id)
    {
        $artikelModel = new ArtikelUserModel();
        $kategoriModel = new KategoriModel();
        $rules = [
            'kategori_id' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kategori Artikel harus dipilih',
                ],
            ],
            'judul_artikel' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Judul Artikel harus diisi',
                ],
            ],
            'keyword' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Keyword Artikel harus diisi',
                ],
            ],
            'slug_artikel' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Slug Artikel harus diisi',
                ],
            ],
            'isi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Isi Artikel tidak boleh kosong',
                ],
            ],
        ];

        if (!$this->validate($rules)) {

            $data = [
                'title' => 'Edit Artikel Penulis',
                'kategori' => $kategoriModel->findAll(),
                'artikel' => $artikelModel->artikelWritterEdit($id),
                'validation' => \Config\Services::validation()
            ];
            echo view('penulis/artikel/edit', $data);
        } else {
            $gambar_lama = $this->request->getPost('gambar_lama');
            $gambar_artikel = $this->request->getFile('gambar_artikel');
            if ($gambar_artikel->getError() == 4) {
                $nama_gambar = $gambar_lama;
            } else {
                $nama_gambar = $gambar_artikel->getRandomName();
                $gambar_artikel->move('assets\images\artikel', $nama_gambar);
            }

            $artikelModel->update($id, [
                'user_id' => $this->request->getPost('user_id'),
                'kategori_id' => $this->request->getPost('kategori_id'),
                'judul_artikel' => $this->request->getPost('judul_artikel'),
                'keyword' => $this->request->getPost('keyword'),
                'slug_artikel' => $this->request->getPost('slug_artikel'),
                'gambar_artikel' => $nama_gambar,
                'isi' => $this->request->getPost('isi'),
            ]);

            session()->setFlashdata('berhasil', 'Artikel berhasil diupdate');

            return redirect()->to(base_url('penulis/artikel/edit/' . $id));
        }
    }

    public function delete($id)
    {
        $artikelModel = new ArtikelUserModel();

        $writter_id = session()->get('writter_id');
        $artikel = $artikelModel->find($id);

        if ($artikel && $artikel['user_id'] == $writter_id) {
            $artikelModel->delete($id);

            session()->setFlashdata('berhasil', 'Postingan artikel berhasil dihapus');

            return redirect()->to(base_url('penulis/artikel'));
        } else {
            return redirect()->to(base_url('penulis/artikel'));
        }
    }
}
