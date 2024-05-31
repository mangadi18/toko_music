<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Libraries\Template;
use App\Libraries\Main;
use CodeIgniter\HTTP\RequestInterface;


class Beranda extends BaseController
{
    public function index()
    {
        Main::check_admin();
        return Template::tampil_admin('admin/beranda', []);
        //return view('beranda');
    }
}
