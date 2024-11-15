<?php

namespace App\Models;

use CodeIgniter\Model;

class WritterModel extends Model
{
    protected $table            = 'writter';
    protected $allowedFields    = [
        'fullname',
        'no_handphone',
        'bio',
        'avatar'
    ];

    public function detailSemuaWritter()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('writter');
        $builder->select('writter.*,users.username,users.email,users.status,users.role');
        $builder->join('users', 'users.writter_id = writter.id');
        return $builder->get()->getResultArray(); //untuk banyak data
        // return $builder->get()->getRowArray(); //untuk satu data
    }

    public function detailWritter($id)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('writter');
        $builder->select('writter.*,users.username, users.password,users.email,users.status,users.role');
        $builder->join('users', 'users.writter_id = writter.id');
        $builder->where('writter.id', $id);
        // return $builder->get()->getResultArray(); untuk banyak data
        return $builder->get()->getRowArray(); //untuk satu data
    }

    public function detailWritterSession($id)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('writter');
        $builder->select('writter.*,users.username, users.password,users.email,users.status,users.role');
        $builder->join('users', 'users.writter_id = writter.id');
        $builder->where('writter.id', $id);
        // return $builder->get()->getResultArray(); untuk banyak data
        return $builder->get()->getRowArray(); //untuk satu data
    }
}
