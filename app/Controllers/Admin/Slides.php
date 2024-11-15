<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\SlidesModel;

class Slides extends BaseController
{
    public function index()
    {
        $slideModel = new SlidesModel();
        $data = [
            'title' => 'Data Slides Menu',
            'slides' => $slideModel->findAll()
        ];
        return view('admin/slides/slides', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah Data Slides',
            'validation' => \Config\Services::validation()
        ];
        return view('admin/slides/create', $data);
    }

    public function store()
    {
        $rules = [
            'judul_slide' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Judul slide wajib diisi',
                ],
            ],
            'gambar_slide' => [
                'rules' => 'uploaded[gambar_slide]|max_size[gambar_slide,10240]|mime_in[gambar_slide,image/png,image/jpeg]',
                'errors' => [
                    'uploaded' => 'Gambar slide wajib diunggah',
                    'max_size' => 'Ukuran gambar melebihi 10MB',
                    'mime_in' => 'Jenis file yang diizinkan hanya PNG atau JPEG'
                ],
            ],
            'kutipan_slide' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kutipan slide wajib diisi',
                ],
            ],
        ];

        if (!$this->validate($rules)) {
            $data = [
                'title' => 'Tambah Data Slides',
                'validation' => \Config\Services::validation()
            ];
            echo view('admin/slides/create', $data);
        } else {

            $gambar_slide = $this->request->getFile('gambar_slide');

            if ($gambar_slide->getError() == 4) {
                $nama_gambar = '';
            } else {
                $nama_gambar = $gambar_slide->getRandomName();
                $gambar_slide->move('assets\slides', $nama_gambar);
            }

            $slideModel = new SlidesModel();
            $slideModel->insert([
                'judul_slide' => $this->request->getPost('judul_slide'),
                'gambar_slide' => $nama_gambar,
                'kutipan_slide' => $this->request->getPost('kutipan_slide'),
            ]);

            session()->setFlashdata('berhasil', 'Data slides berhasil disimpan');
            return redirect()->to(base_url('admin/slides'));
        }
    }

    public function edit($id)
    {
        $slideModel = new SlidesModel();
        $data = [
            'title' => 'Edit Data Slides',
            'slides' => $slideModel->find($id),
            'validation' => \Config\Services::validation()
        ];
        return view('admin/slides/edit', $data);
    }

    public function update($id)
    {
        $slideModel = new SlidesModel();
        $rules = [
            'judul_slide' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Judul slide wajib diisi',
                ],
            ],
            'gambar_slide' => [
                'rules' => 'max_size[gambar_slide,10240]|mime_in[gambar_slide,image/png,image/jpeg]',
                'errors' => [
                    'max_size' => 'Ukuran gambar melebihi 10MB',
                    'mime_in' => 'Jenis file yang diizinkan hanya PNG atau JPEG'
                ],
            ],
            'kutipan_slide' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kutipan slide wajib diisi',
                ],
            ],
        ];

        if (!$this->validate($rules)) {
            $data = [
                'title' => 'Edit Data Slides',
                'slides' => $slideModel->find($id),
                'validation' => \Config\Services::validation()
            ];
            echo view('admin/slides/edit', $data);
        } else {
            $gambar_slide = $this->request->getFile('gambar_slide');
            if ($gambar_slide->getError() == 4) {
                $nama_gambar = $this->request->getPost('gambar_lama');
            } else {
                $nama_gambar = $gambar_slide->getRandomName();
                $gambar_slide->move('assets\slides', $nama_gambar);
            }
            $slideModel->update($id, [
                'judul_slide' => $this->request->getPost('judul_slide'),
                'gambar_slide' => $nama_gambar,
                'kutipan_slide' => $this->request->getPost('kutipan_slide'),
            ]);

            session()->setFlashdata('berhasil', 'Data slides berhasil diupdate');
            return redirect()->to(base_url('admin/slides'));
        }
    }

    public function delete($id)
    {
        $slideModel = new SlidesModel();
        $slide = $slideModel->find($id);
        if ($slide) {
            $slideModel->delete($id);

            session()->setFlashdata('berhasil', 'Data slides berhasil dihapus');
            return redirect()->to(base_url('admin/slides'));
        }
    }
}
