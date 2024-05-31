<?php

namespace App\Controllers\User\Music;

use App\Controllers\BaseController;
use App\Libraries\Template;
use App\Models\mBas;

class Bas extends BaseController
{
    public function index()
    {

        $mBas = new mBas();
        $bas_list = $mBas->findAll();

        $data = [
            'bas_list' => $bas_list 
        ];


        return Template::tampil_user('user/music/bas', $data);
        //return view('beranda');
    }
}
