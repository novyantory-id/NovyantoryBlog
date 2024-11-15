<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\KategoriModel; //dipanggil dulu

class Kategori extends BaseController
{
    public function index()
    {
        //dipanggil juga modelnya
        $kategoriModel = new KategoriModel();
        $data = [
            'title' => 'Data Kategori',
            'kategori' => $kategoriModel->findAll()
        ];
        return view('admin/kategori/kategori', $data);
    }

    public function checkslug()
    {
        if ($this->request->isAJAX()) {
            $slug_kategori = $this->request->getPost('slug_kategori');
            $kategoriModel = new KategoriModel();
            $slugAsli = $slug_kategori;
            $counter = 1;

            //Cek apakah slug sudah ada di database
            while ($kategoriModel->where('slug_kategori', $slug_kategori)->first()) {
                $slug_kategori = $slugAsli . '-' . $counter;
                $counter++;
            }

            //kembalikan slug yang unik ke frontend
            return $this->response->setJSON(['slug_kategori' => $slug_kategori]);
        }
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah Kategori',
            'validation' => \Config\Services::validation()
        ];
        return view('admin/kategori/create', $data);
    }

    public function store()
    {
        $rules = [
            'nama_kategori' => [
                'rules' => 'required',
                'errors' => [
                    'required' => "Nama kategori harus diisi"
                ],
            ],
            'slug_kategori' => [
                'rules' => 'required',
                'errors' => [
                    'required' => "Slug kategori harus diisi"
                ],
            ],
            'deskripsi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => "Deskripsi kategori harus diisi"
                ],
            ],
        ];

        if (!$this->validate($rules)) {
            $data = [
                'title' => 'Tambah Kategori',
                'validation' => \Config\Services::validation()
            ];
            echo view('admin/kategori/create', $data);
        } else {
            $kategoriModel = new KategoriModel();
            $kategoriModel->insert([
                'nama_kategori' => $this->request->getPost('nama_kategori'),
                'slug_kategori' => $this->request->getPost('slug_kategori'),
                'deskripsi' => $this->request->getPost('deskripsi')
            ]);

            session()->setFlashdata('berhasil', 'Data kategori berhasil disimpan');
            return redirect()->to(base_url('admin/kategori'));
        }
    }

    public function edit($id)
    {
        $kategoriModel = new KategoriModel();
        $data = [
            'title' => 'Edit Kategori',
            'kategori' => $kategoriModel->find($id),
            'validation' => \Config\Services::validation()
        ];
        return view('admin/kategori/edit', $data);
    }

    public function update($id)
    {
        $kategoriModel = new KategoriModel();
        $rules = [
            'nama_kategori' => [
                'rules' => 'required',
                'errors' => [
                    'required' => "Nama kategori harus diisi"
                ],
            ],
            'slug_kategori' => [
                'rules' => 'required',
                'errors' => [
                    'required' => "Slug kategori harus diisi"
                ],
            ],
            'deskripsi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => "Deskripsi kategori harus diisi"
                ],
            ],
        ];

        if (!$this->validate($rules)) {
            $data = [
                'title' => 'Edit Kategori',
                'kategori' => $kategoriModel->find($id),
                'validation' => \Config\Services::validation()
            ];
            echo view('admin/kategori/edit', $data);
        } else {
            $kategoriModel = new KategoriModel();
            $kategoriModel->update($id, [
                'nama_kategori' => $this->request->getPost('nama_kategori'),
                'slug_kategori' => $this->request->getPost('slug_kategori'),
                'deskripsi' => $this->request->getPost('deskripsi')
            ]);

            session()->setFlashdata('berhasil', 'Data kategori berhasil diupdate');
            return redirect()->to(base_url('admin/kategori'));
        }
    }

    public function delete($id)
    {
        $kategoriModel = new KategoriModel();

        $kategori = $kategoriModel->find($id);
        if ($kategori) {
            $kategoriModel->delete($id);

            session()->setFlashdata('berhasil', 'Data kategori berhasil dihapus');
            return redirect()->to(base_url('admin/kategori'));
        }
    }
}
