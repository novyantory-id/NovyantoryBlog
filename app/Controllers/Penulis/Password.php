<?php

namespace App\Controllers\Penulis;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UsersModel;

class Password extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Ubah Password Pengguna',
            'validation' => \Config\Services::validation()
        ];
        return view('penulis/password/password', $data);
    }

    public function store()
    {
        $rules = [
            'password_lama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Password lama wajib diisi',
                ],
            ],
            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Password baru wajib diisi'
                ],
            ],
            'konfirmasi_password' => [
                'rules' => 'required|matches[password]',
                'errors' => [
                    'required' => 'Konfirmasi password wajib diisi',
                    'matches' => 'Konfirmasi password tidak sama'
                ],
            ],
        ];

        if (!$this->validate($rules)) {
            $data = [
                'title' => 'Ubah Password Users',
                'validation' => \Config\Services::validation()
            ];
            echo view('penulis/password/password', $data);
        } else {
            $userModel = new UsersModel();

            $password_lama = $this->request->getPost('password_lama');
            $password = password_hash($this->request->getPost('password'), PASSWORD_DEFAULT);

            $writter_id = session()->get('writter_id');
            $users = $userModel->find($writter_id);

            //cek apakah password sama dengan yang ada di database
            if (!password_verify($password_lama, $users['password'])) {
                $data = [
                    'title' => 'Ubah Password Users',
                    'validation' => \Config\Services::validation()
                ];

                session()->setFlashdata('pesan', 'Password lama tidak cocok');

                echo view('penulis/password/password', $data);
            } else {
                $userModel->update($writter_id, [
                    'password' => $password,
                ]);

                session()->setFlashdata('berhasil', 'Password user berhasil diupdate');

                return redirect()->to(base_url('penulis/password'));
            }
        }
    }
}
