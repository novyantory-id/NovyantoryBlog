<?php

namespace App\Controllers;

use App\Models\SlidesModel;
use App\Models\ArtikelUserModel;
use App\Models\KategoriModel;

class Home extends BaseController
{
    public function index()
    {
        $slidesModel = new SlidesModel();
        $artikelModel = new ArtikelUserModel();
        $kategoriModel = new KategoriModel();
        $data = [
            'title' => 'Halaman Home - NovyantoryBlog',
            'artikel' => $artikelModel->artikelFrontend(),
            'kategori' => $kategoriModel->findAll(),
            'slide' => $slidesModel->findAll()
        ];
        return view('home', $data);
    }

    public function kategori($slug_kategori)
    {
        $artikelModel = new ArtikelUserModel();
        $kategoriModel = new KategoriModel();
        // $result = $artikelModel->getArtikelDetailByKategori($slug_kategori);
        $data = [
            'title' => 'Halaman Kategori - NovyantoryBlog',
            'artikelKategori' => $artikelModel->getArtikelDetailByKategori($slug_kategori),
            'slug_kategori' => $slug_kategori,
            'kategori' => $kategoriModel->findAll()
        ];
        return view('kategori', $data);
    }

    public function artikel()
    {
        $artikelModel = new ArtikelUserModel();
        $kategoriModel = new KategoriModel();

        $data = [
            'title' => 'Halaman Artikel - NovyantoryBlog',
            'artikel' => $artikelModel->artikelFrontendAll(),
            'kategori' => $kategoriModel->findAll(),
        ];
        return view('artikel', $data);
    }

    public function detail($slug_artikel)
    {
        $artikelModel = new ArtikelUserModel();
        $kategoriModel = new KategoriModel();
        $data = [
            'title' => "Halaman Artikel - NovyantoryBlog",
            'artikel_detail' => $artikelModel->getArtikelDetailBySlug($slug_artikel),
            'artikel' => $artikelModel->artikelFrontend(),
            'kategori' => $kategoriModel->findAll(),
        ];
        return view('artikel-detail', $data);
    }
}
