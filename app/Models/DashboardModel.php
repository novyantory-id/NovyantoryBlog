<?php

namespace App\Models;

use CodeIgniter\Model;

class DashboardModel extends Model
{
    protected $table;

    public function countTable($table)
    {
        return $this->db->table($table)->countAll();
    }
}
