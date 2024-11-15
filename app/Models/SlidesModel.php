<?php

namespace App\Models;

use CodeIgniter\Model;

class SlidesModel extends Model
{
    protected $table            = 'slides';
    protected $allowedFields    = [
        'judul_slide',
        'gambar_slide',
        'kutipan_slide'
    ];
}
