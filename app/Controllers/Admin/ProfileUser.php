<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UsersModel;
use App\Models\WritterModel;

class ProfileUser extends BaseController
{
    public function index()
    {
        $usersModel = new UsersModel();
        $writterModel = new WritterModel();
        $writter_id = session()->get('writter_id'); //diambil dari Login.php

        $data = [
            'title' => 'Data Profile Penulis',
            'user' => $writterModel->detailWritterSession($writter_id)

        ];

        // dd($data);
        return view('admin/profile/profile', $data);
    }
}
