<?php

namespace App\Controllers\User\Music;

use App\Controllers\BaseController;
use App\Libraries\Template;
use App\Models\mAks;

class Aks extends BaseController
{
    public function index()
    {

        $mAks = new mAks();
        $aks_list = $mAks->findAll();

        $data = [
            'aks_list' => $aks_list 
        ];


        return Template::tampil_user('user/music/aks', $data);
        //return view('beranda');
    }
}
