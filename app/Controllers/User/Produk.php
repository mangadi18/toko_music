<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;
use App\Libraries\Template;
use App\Models\mHome;
use App\Models\mGitar;

class Produk extends BaseController
{
    public function index()
    {

        return Template::tampil_user('user/daftar_produk', []);
        //return view('beranda');
    }
}
