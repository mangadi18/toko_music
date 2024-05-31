<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;
use App\Libraries\Template;
use App\Models\mProduct;

class Kontak extends BaseController
{
    public function index()
    {

        return Template::tampil_user('user/kontak', []);
        //return view('kontak_kami');
    }
}
