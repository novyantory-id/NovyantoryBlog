<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class AdminFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // buat dulu di Controllers/Login.php
        //setelah dari Login.php, lanjut tulis di bawah.
        //apabila tidak ada session logged_in
        if (!session()->get('logged_in')) {
            session()->setFlashdata('pesan', 'Anda Belum Login');
            return redirect()->to(base_url('portal'));
            //setelah itu daftarkan class AdminFilter agar dapat digunakan dengan pergi ke Config/Filters.php
        }
        if (session()->get('role_id') != 'Admin') {
            session()->setFlashdata('pesan', 'Anda Belum Login');
            return redirect()->to(base_url('portal'));
            //setting role_id di file Login.php
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}
