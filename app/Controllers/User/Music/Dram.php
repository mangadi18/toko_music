<?php

namespace App\Controllers\User\Music;

use App\Controllers\BaseController;
use App\Libraries\Template;
use App\Models\mDram;

class Dram extends BaseController
{
    public function index()
    {

        $mDram = new mDram();
        $dram_list = $mDram->findAll();

        $data = [
            'dram_list' => $dram_list 
        ];


        return Template::tampil_user('user/music/dram', $data);
        //return view('beranda');
    }
}
