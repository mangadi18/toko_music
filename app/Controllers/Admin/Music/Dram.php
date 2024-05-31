<?php

namespace App\Controllers\Admin\Music;

use App\Controllers\BaseController;
use App\Libraries\Template;
use App\Models\mDram;
use CodeIgniter\HTTP\RequestInterface;
use App\Libraries\Main;

class Dram extends BaseController
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
        $mDram = new mDram();
        $dram_list = $mDram->findAll();

        $data = [
            'dram_list' => $dram_list
        ];

        return Template::tampil_admin('admin/dram/dram', $data);
        //return view('beranda');
    }

    public function dram()
    {
        Main::check_admin();
        return Template::tampil_admin('admin/dram/tambah_dram', []);
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

        $mDram = new mDram();
        $mDram->insert($data);

        return redirect('admin-dram');
    }

    public function edit($id_dramm)
    {
        Main::check_admin();
        $mDram = new mDram();
        $dramm_row = $mDram->where('id_dramm', $id_dramm)->first();

        $data = [
            'dramm_row' => $dramm_row

        ];
        return Template::tampil_admin('admin/dram/edit_dram', $data);
        //return view('beranda');
    }

    public function update($id_dramm)
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

        $mDram = new mDram();
        $mDram->where('id_dramm', $id_dramm)->set($data)->update();

        return redirect('admin-dram');
    }

    public function delete($id_dramm = '1')
    {
        Main::check_admin();
        $mDram = new mDram();
        $mDram->where('id_dramm', $id_dramm)->delete();

        return redirect('admin-dram');
    }
}
