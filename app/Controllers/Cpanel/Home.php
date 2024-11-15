<?php

namespace App\Controllers\Cpanel;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Halaman Dashboard - MyBlog'
        ];
        return view('admin/home.php', $data);
    }
}
