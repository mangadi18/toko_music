<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;
use App\Libraries\Template;
use App\Models\mProduct;

class Profil extends BaseController
{
    public function index()
    {

        return Template::tampil_user('user/profil', []);
        //return view('tentang_kami');
    }
}
