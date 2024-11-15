<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\LoginModel;
use CodeIgniter\HTTP\ResponseInterface;

class Login extends BaseController
{
    public function index()
    {
        $data = [
            'validation' => \Config\Services::validation()
        ];
        return view('login', $data);
    }

    public function login_action()
    {
        $rules = [
            'username' => 'required',
            'password' => 'required'
        ];

        if (!$this->validate($rules)) {
            $data['validation'] = $this->validator;
            return view('/login', $data);
        } else {
            $session = session();
            $loginModel = new LoginModel();

            $username = $this->request->getVar('username');
            $password = $this->request->getVar('password');

            $cekusername = $loginModel->where('username', $username)->first();

            if ($cekusername) {
                $password_db = $cekusername['password'];
                $cek_password = password_verify($password, $password_db);
                if ($cek_password) {
                    //lanjutan materi 5
                    $session_data = [
                        //panggil untuk header navigasi akun
                        'username' => $cekusername['username'],
                        //materi 5
                        'logged_in' => true,
                        //buat role_id
                        'role_id' => $cekusername['role'],
                        'writter_id' => $cekusername['id'],
                    ];
                    $session->set($session_data);
                    //balik ke AdminFilter.php
                    //buat role_id di atas dan selesai.

                    switch ($cekusername['role']) {
                        case "Admin":
                            return redirect()->to(base_url('admin/home'));
                        case "Penulis":
                            return redirect()->to(base_url('penulis/home'));
                        default:
                            $session->setFlashdata('pesan', 'Akun anda belum terdaftar, silahkan coba lagi');
                            return redirect()->to(base_url('/portal'));
                    }
                } else {
                    $session->setFlashdata('pesan', 'Password salah, silahkan coba lagi');
                    return redirect()->to(base_url('/portal'));
                }
            } else {
                $session->setFlashdata('pesan', 'Username salah, silahkan coba lagi');
                return redirect()->to(base_url('/portal'));
            }
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to(base_url('/portal'));
    }
}
