<?php

namespace App\Models;

use CodeIgniter\Model;

class ArtikelUserModel extends Model
{
    protected $table            = 'artikel';
    protected $primaryKey       = 'id';
    protected $allowedFields    = [
        'user_id',
        'kategori_id',
        'judul_artikel',
        'keyword',
        'slug_artikel',
        'gambar_artikel',
        'kutipan_artikel',
        'isi',
        'created_at'
    ];

    //untuk frontend tampil semua data di home
    public function artikelFrontend($limit = 6)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('artikel');
        $builder->select('artikel.*,writter.fullname,writter.no_handphone,writter.bio,writter.avatar,users.username,users.email,users.status,users.role,kategori.nama_kategori,kategori.slug_kategori,kategori.deskripsi');
        $builder->orderBy('id', 'DESC');
        $builder->limit($limit);
        $builder->join('kategori', 'artikel.kategori_id = kategori.id');
        $builder->join('users', 'artikel.user_id = users.id');
        $builder->join('writter', 'users.writter_id = writter.id');
        return $builder->get()->getResultArray(); //untuk banyak data
        // return $builder->get()->getRowArray(); //untuk satu data
    }

    //untuk frontend tampil semua data di artikel
    public function artikelFrontendAll()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('artikel');
        $builder->select('artikel.*,writter.fullname,writter.no_handphone,writter.bio,writter.avatar,users.username,users.email,users.status,users.role,kategori.nama_kategori,kategori.slug_kategori,kategori.deskripsi');
        $builder->orderBy('id', 'DESC');
        $builder->join('kategori', 'artikel.kategori_id = kategori.id');
        $builder->join('users', 'artikel.user_id = users.id');
        $builder->join('writter', 'users.writter_id = writter.id');
        return $builder->get()->getResultArray(); //untuk banyak data
        // return $builder->get()->getRowArray(); //untuk satu data
    }

    //untuk frontend tampil detail artikel
    public function getArtikelDetailBySlug($slug_artikel)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('artikel');
        $builder->select('artikel.*,writter.fullname,writter.no_handphone,writter.bio,writter.avatar,users.username,users.email,users.status,users.role,kategori.nama_kategori,kategori.slug_kategori,kategori.deskripsi');
        $builder->join('kategori', 'artikel.kategori_id = kategori.id');
        $builder->join('users', 'artikel.user_id = users.id');
        $builder->join('writter', 'users.writter_id = writter.id');
        $builder->where('artikel.slug_artikel', $slug_artikel);
        return $builder->get()->getRowArray();
    }

    //untuk frontend tampil artikel berdasarkan kategori
    public function getArtikelDetailByKategori($slug_kategori)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('artikel');
        $builder->select('artikel.*,writter.fullname,writter.no_handphone,writter.bio,writter.avatar,users.username,users.email,users.status,users.role,kategori.nama_kategori,kategori.slug_kategori,kategori.deskripsi');
        $builder->orderBy('id', 'DESC');
        $builder->join('kategori', 'artikel.kategori_id = kategori.id');
        $builder->join('users', 'artikel.user_id = users.id');
        $builder->join('writter', 'users.writter_id = writter.id');
        $builder->where('kategori.slug_kategori', $slug_kategori);
        return $builder->get()->getResultArray();

        // $result = $builder->get()->getFirstRow('array');

        $artikel = $builder->get()->getResultArray();

        // return [
        //     'nama_kategori' => $result ? $result['nama_kategori'] : null,
        //     'artikel' => $artikel
        // ];
    }

    //sebelumnya digunakan untuk menampilkan data
    public function artikelWritter($userId)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('artikel');
        $builder->select('artikel.*,writter.fullname,writter.no_handphone,writter.bio,writter.avatar,users.username,users.email,users.status,users.role,kategori.nama_kategori,kategori.slug_kategori,kategori.deskripsi');
        $builder->join('kategori', 'artikel.kategori_id = kategori.id');
        $builder->join('users', 'artikel.user_id = users.id');
        $builder->join('writter', 'users.writter_id = writter.id');
        $builder->where('artikel.user_id', $userId);
        return $builder->get()->getResultArray(); //untuk banyak data
        // return $builder->get()->getRowArray(); //untuk satu data
    }

    //sebelumnya digunakan untuk mengedit data berdasarkan user tapi kurang efektif.
    public function artikelWritterEdit($id)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('artikel');
        $builder->select('artikel.*,writter.fullname,writter.no_handphone,writter.bio,writter.avatar,users.username,users.email,users.status,users.role,kategori.nama_kategori,kategori.slug_kategori,kategori.deskripsi');
        $builder->join('kategori', 'artikel.kategori_id = kategori.id');
        $builder->join('users', 'artikel.user_id = users.id');
        $builder->join('writter', 'users.writter_id = writter.id');
        $builder->where('artikel.id', $id);
        // return $builder->get()->getResultArray(); //untuk banyak data
        return $builder->get()->getRowArray(); //untuk satu data
    }

    //sedang dipakai karena dapat menolak mengedit data yang bukan miliknya.
    public function getArtikel($userId, $id = null)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('artikel');
        $builder->select('artikel.*,writter.fullname,writter.no_handphone,writter.bio,writter.avatar,users.username,users.email,users.status,users.role,kategori.nama_kategori,kategori.slug_kategori,kategori.deskripsi');
        $builder->orderBy('id', 'DESC');
        $builder->join('kategori', 'artikel.kategori_id = kategori.id');
        $builder->join('users', 'artikel.user_id = users.id');
        $builder->join('writter', 'users.writter_id = writter.id');
        $builder->where('artikel.user_id', $userId);

        if ($id !== null) {
            $builder->where('artikel.id', $id);
            $query = $builder->get();
            return $query->getRowArray();
        } else {
            //sudah dicoba memindahkan builder where artikel.user_id tapi dapat ditembus user lain
            $query = $builder->get();
            return $query->getResultArray();
        }
    }

    // backend tampil semua data di admin
    public function allarticlesadmin()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('artikel');
        $builder->select('artikel.*,writter.fullname,writter.no_handphone,writter.bio,writter.avatar,users.username,users.email,users.status,users.role,kategori.nama_kategori,kategori.slug_kategori,kategori.deskripsi');
        $builder->orderBy('id', 'DESC');
        $builder->join('kategori', 'artikel.kategori_id = kategori.id');
        $builder->join('users', 'artikel.user_id = users.id');
        $builder->join('writter', 'users.writter_id = writter.id');
        return $builder->get()->getResultArray(); //untuk banyak data
        // return $builder->get()->getRowArray(); //untuk satu data
    }

    //Searching Artikel Frontend
    public function search($katakunci)
    {
        return $this->table($this->table)
            ->like('judul_artikel', $katakunci)
            ->orLike('isi', $katakunci);
    }
}
