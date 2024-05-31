<?php

namespace App\Controllers\User\Music;

use App\Controllers\BaseController;
use App\Libraries\Template;
use App\Models\mGitar;

class Gitar extends BaseController
{
    public function index()
    {

        $mGitar = new mGitar();
        $gitar_list = $mGitar->findAll();

        $data = [
            'gitar_list' => $gitar_list 
        ];


        return Template::tampil_user('user/music/gitar', $data);
        //return view('beranda');
    }
}
