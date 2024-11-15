<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\TagsModel;

class Tags extends BaseController
{
    public function index()
    {
        $tagsModel = new TagsModel();
        $data = [
            'title' => 'Data Tags',
            'tags' => $tagsModel->findAll()
        ];
        return view('admin/tags/tags', $data);
    }

    public function checkslug()
    {
        if ($this->request->isAJAX()) {
            $slug_tag = $this->request->getPost('slug_tag');
            $tagsModel = new TagsModel();
            $slugAsli = $slug_tag;
            $counter = 1;

            //Cek apakah slug sudah ada di database
            while ($tagsModel->where('slug_tag', $slug_tag)->first()) {
                $slug_tag = $slugAsli . '-' . $counter;
                $counter++;
            }

            //kembalikan slug yang unik ke frontend
            return $this->response->setJSON(['slug_tag' => $slug_tag]);
        }
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah Tags',
            'validation' => \Config\Services::validation()
        ];
        return view('admin/tags/create', $data);
    }

    public function store()
    {
        $rules = [
            'nama_tag' => [
                'rules' => 'required',
                'errors' => [
                    'required' => "Nama tag wajib diisi"
                ],
            ],
            'slug_tag' => [
                'rules' => 'required',
                'errors' => [
                    'required' => "Slug tag wajib diisi"
                ],
            ],

        ];

        if (!$this->validate($rules)) {
            $data = [
                'title' => 'Tambah Tags',
                'validation' => \Config\Services::validation()
            ];

            echo view('admin/tags/create', $data);
        } else {
            $tagsModel = new TagsModel();
            $tagsModel->insert([
                'nama_tag' => $this->request->getPost('nama_tag'),
                'slug_tag' => $this->request->getPost('slug_tag'),
            ]);

            session()->setFlashdata('berhasil', 'Data tag berhasil disimpan');

            return redirect()->to(base_url('admin/tags'));
        }
    }

    public function edit($id)
    {
        $tagsModel = new TagsModel();
        $data = [
            'title' => 'Edit Data Tags',
            'tags' => $tagsModel->find($id),
            'validation' => \Config\Services::validation(),
        ];
        return view('admin/tags/edit', $data);
    }

    public function update($id)
    {
        $tagsModel = new TagsModel();
        $rules = [
            'nama_tag' => [
                'rules' => 'required',
                'errors' => [
                    'required' => "Nama tag wajib diisi"
                ],
            ],
            'slug_tag' => [
                'rules' => 'required',
                'errors' => [
                    'required' => "Slug tag wajib diisi"
                ],
            ],
        ];

        if (!$this->validate($rules)) {
            $data = [
                'title' => 'Edit Data Tags',
                'tags' => $tagsModel->find($id),
                'validation' => \Config\Services::validation()
            ];
            echo view('admin/tags/edit', $data);
        } else {
            $tagsModel->update($id, [
                'nama_tag' => $this->request->getPost('nama_tag'),
                'slug_tag' => $this->request->getPost('slug_tag'),
            ]);
            session()->setFlashdata('berhasil', 'Data tags berhasil diupdate');
            return redirect()->to(base_url('admin/tags'));
        }
    }

    public function delete($id)
    {
        $tagsModel = new TagsModel();

        $tags = $tagsModel->find($id);
        if ($tags) {
            $tagsModel->delete($id);
            session()->setFlashdata('berhasil', 'Data tags berhasil dihapus');

            return redirect()->to(base_url('admin/tags'));
        }
    }
}
