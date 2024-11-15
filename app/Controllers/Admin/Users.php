<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\WritterModel;
use App\Models\UsersModel;
use PHPUnit\Runner\Baseline\Writer;

class Users extends BaseController
{
    function __construct()
    {
        helper(['url', 'form']);
    }
    public function index()
    {
        $writterModel = new WritterModel();
        $data = [
            'title' => 'Data Users Writter',
            'writter' => $writterModel->detailSemuaWritter()
        ];
        return view('admin/users/users', $data);
    }

    public function detail($id)
    {
        $writterModel = new WritterModel();
        $data = [
            'title' => 'Detail Data Users Writter',
            'writter' => $writterModel->detailWritter($id)
        ];

        return view('admin/users/detail', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah Data Users Writter',
            'validation' => \Config\Services::validation()
        ];
        return view('admin/users/create', $data);
    }

    public function store()
    {
        $rules = [
            'fullname' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama lengkap wajib diisi'
                ],
            ],
            'username' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Username wajib diisi'
                ],
            ],
            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Password wajib diisi'
                ],
            ],
            'konfirmasi_password' => [
                'rules' => 'required|matches[password]',
                'errors' => [
                    'required' => 'Konfirmasi password wajib diisi',
                    'matches' => 'Konfirmasi password tidak sama'
                ],
            ],
            'no_handphone' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nomor HP wajib diisi'
                ],
            ],
            'email' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Email wajib diisi'
                ],
            ],
            'bio' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Bio wajib diisi'
                ],
            ],
            'avatar' => [
                'rules' => 'uploaded[avatar]|max_size[avatar,10240]|mime_in[avatar,image/png,image/jpeg]',
                'errors' => [
                    'uploaded' => 'File gambar wajib diunggah',
                    'max_size' => 'Ukuran Avatar melebihi 10MB',
                    'mime_in' => 'Jenis file yang diizinkan hanya JPEG atau PNG'
                ],
            ],
            'role' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Role user wajib dipilih'
                ],
            ],
        ];

        if (!$this->validate($rules)) {
            $data = [
                'title' => 'Tambah Data Users Writter',
                'validation' => \Config\Services::validation()
            ];
            echo view('admin/users/create', $data);
        } else {
            $writterModel = new WritterModel();

            $avatar = $this->request->getFile('avatar');

            if ($avatar->getError() === 4) {
                $nama_avatar = '';
            } else {
                $nama_avatar = $avatar->getRandomName();
                $avatar->move('assets\images\profile', $nama_avatar);
            }

            $writterModel->insert([
                'fullname' => $this->request->getPost('fullname'),
                'no_handphone' => $this->request->getPost('no_handphone'),
                'bio' => $this->request->getPost('bio'),
                'avatar' => $nama_avatar,
            ]);

            $writter_id = $writterModel->insertID();
            $userModel = new UsersModel();
            $userModel->insert([
                'writter_id' => $writter_id,
                'username' => $this->request->getPost('username'),
                'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
                'email' => $this->request->getPost('email'),
                'status' => 'Aktif',
                'role' => $this->request->getPost('role'),
            ]);

            session()->setFlashdata('berhasil', 'Data user writter berhasil disimpan');

            return redirect()->to(base_url('admin/users'));
        }
    }

    public function edit($id)
    {
        $writterModel = new WritterModel();
        $data = [
            'title' => 'Edit data user writter',
            'writter' => $writterModel->detailWritter($id),
            'validation' => \Config\Services::validation()
        ];
        return view('admin/users/edit', $data);
    }

    public function update($id)
    {
        $writterModel = new WritterModel();
        $rules = [
            'fullname' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama lengkap wajib diisi'
                ],
            ],
            'username' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Username wajib diisi'
                ],
            ],
            'konfirmasi_password' => [
                'rules' => 'matches[password]',
                'errors' => [
                    'matches' => 'Konfirmasi password tidak sama'
                ],
            ],
            'no_handphone' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nomor HP wajib diisi'
                ],
            ],
            'email' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Email wajib diisi'
                ],
            ],
            'bio' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Bio wajib diisi'
                ],
            ],
            'avatar' => [
                'rules' => 'max_size[avatar,10240]|mime_in[avatar,image/png,image/jpeg]',
                'errors' => [
                    'max_size' => 'Ukuran Avatar melebihi 10MB',
                    'mime_in' => 'Jenis file yang diizinkan hanya JPEG atau PNG'
                ],
            ],
            'role' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Role user wajib dipilih'
                ],
            ],
        ];

        if (!$this->validate($rules)) {
            $data = [
                'title' => 'Edit data user writter',
                'writter' => $writterModel->detailWritter($id),
                'validation' => \Config\Services::validation(),
            ];
            echo view('admin/users/edit', $data);
        } else {
            $writterModel = new WritterModel();
            $userModel = new UsersModel();

            $avatar = $this->request->getFile('avatar');

            if ($avatar->getError() == 4) {
                $nama_avatar = $this->request->getPost('avatar_lama');
            } else {
                $nama_avatar = $avatar->getRandomName();
                $avatar->move('assets\images\profile', $nama_avatar);
            }

            $writterModel->update($id, [
                'fullname' => $this->request->getPost('fullname'),
                'no_handphone' => $this->request->getPost('no_handphone'),
                'bio' => $this->request->getPost('bio'),
                'avatar' => $nama_avatar,
            ]);

            if ($this->request->getPost('password') == '') {
                $password = $this->request->getPost('password_lama');
            } else {
                $password = password_hash($this->request->getPost('password'), PASSWORD_DEFAULT);
            }

            // dd($password);

            $userModel
                ->where('writter_id', $id)
                ->set([
                    'username' => $this->request->getPost('username'),
                    'password' => $password,
                    'email' => $this->request->getPost('email'),
                    'status' => 'Aktif',
                    'role' => $this->request->getPost('role'),
                ])
                ->update();

            session()->setFlashdata('berhasil', 'Data user writter berhasil diupdate');

            return redirect()->to(base_url('admin/users'));
        }
    }

    public function delete($id)
    {
        $writterModel = new WritterModel();
        $userModel = new UsersModel();
        $writter = $writterModel->find($id);
        if ($writter) {
            $userModel->where('writter_id', $id)->delete();
            $writterModel->delete($id);

            session()->setFlashdata('berhasil', 'Data user writter berhasil dihapus');

            return redirect()->to(base_url('admin/users'));
        }
    }
}
