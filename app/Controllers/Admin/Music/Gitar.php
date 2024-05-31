<?php

namespace App\Controllers\Admin\Music;

use App\Controllers\BaseController;
use App\Libraries\Template;
use App\Models\mGitar;
use App\Libraries\Main;

class Gitar extends BaseController
{

    protected $request;

    public function __construct()
    {
        $request = \Config\Services::request();
        $this->request = $request;
    }
    public function index()
    {
        Main::check_admin();
        $mGitar = new mGitar();
        $gitar_list = $mGitar->findAll();

        $data = [
            'gitar_list' => $gitar_list
        ];

        return Template::tampil_admin('admin/gitar/gitar', $data);
        //return view('beranda');
    }

    public function gitar()
    {
        Main::check_admin();
        return Template::tampil_admin('admin/gitar/tambah_gitar', []);
        //return view('beranda');
    }

    public function insert()
    {
        Main::check_admin();
        $nama = $this->request->getVar('nama');
        $harga = $this->request->getVar('harga');
        $deskripsi = $this->request->getVar('deskripsi');
        // upload file
        $gambar = $this->request->getFile('gambar');
        $gambar_nama = $gambar->getName();
        $gambar->move('gambar/', $gambar_nama);

        $data = [
            'nama' => $nama,
            'harga' => $harga,
            'deskripsi' => $deskripsi,
            'gambar' => $gambar_nama
        ];

        $mGitar = new mGitar();
        $mGitar->insert($data);

        return redirect('admin-gitar');
    }

    public function edit($id_gitarr)
    {
        Main::check_admin();
        $mGitar = new mGitar();
        $gitarr_row = $mGitar->where('id_gitarr', $id_gitarr)->first();

        $data = [
            'gitarr_row' => $gitarr_row

        ];
        return Template::tampil_admin('admin/gitar/edit_gitar', $data);
        //return view('beranda');
    }

    public function update($id_gitarr)
    {
        Main::check_admin();
        $nama = $this->request->getVar('nama');
        $harga = $this->request->getVar('harga');
        $deskripsi = $this->request->getVar('deskripsi');

        $data = [
            'nama' => $nama,
            'harga' => $harga,
            'deskripsi' => $deskripsi
        ];

        if (!empty($_FILES['gambar']['name'])) {
            $gambar = $this->request->getFile('gambar');
            $gambar_nama = $gambar->getName();
            $gambar->move('gambar/', $gambar_nama);


            $data['gambar'] = $gambar_nama;
        }

        $mGitar = new mGitar();
        $mGitar->where('id_gitarr', $id_gitarr)->set($data)->update();

        return redirect('admin-gitar');
    }

    public function delete($id_gitarr = '1')
    {
        Main::check_admin();
        $mGitar = new mGitar();
        $mGitar->where('id_gitarr', $id_gitarr)->delete();

        return redirect('admin-gitar');
    }
}
