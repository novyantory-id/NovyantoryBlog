<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\DashboardModel;
use App\Models\ArtikelUserModel;

class Home extends BaseController
{
    public function index()
    {
        $dashboardModel = new DashboardModel();
        $artikelModel = new ArtikelUserModel();
        $writter_id = session()->get('writter_id');
        $data = [
            'title' => 'Home | NovyantoryBlog',
            'totalArtikel' => $dashboardModel->countTable('artikel'),
            'totalArtikelByUser' => $artikelModel->where('user_id', $writter_id)->countAllResults(),
            'totalUser' => $dashboardModel->countTable('users'),
            'totalKategori' => $dashboardModel->countTable('kategori'),
            'totalSlide' => $dashboardModel->countTable('slides'),
            'totalTag' => $dashboardModel->countTable('tags'),
        ];
        return view('admin/home', $data);
    }
}
