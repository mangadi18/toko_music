<?php

namespace App\Controllers\Admin\Music;

use App\Controllers\BaseController;
use App\Libraries\Template;
use App\Models\mAks;
use CodeIgniter\HTTP\RequestInterface;
use App\Libraries\Main;

class Aks extends BaseController
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
        $mAks = new mAks();
        $aks_list = $mAks->findAll();

        $data = [
            'aks_list' => $aks_list
        ];

        return Template::tampil_admin('admin/aks/aks', $data);
        //return view('beranda');
    }

    public function aks()
    {
        Main::check_admin();
        return Template::tampil_admin('admin/aks/tambah_aks', []);
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

        $mAks = new mAks();
        $mAks->insert($data);

        return redirect('admin-aks');
    }

    public function edit($id_akss)
    {
        Main::check_admin();
        $mAks = new mAks();
        $aks_row = $mAks->where('id_akss', $id_akss)->first();

        $data = [
            'aks_row' => $aks_row

        ];
        return Template::tampil_admin('admin/aks/edit_aks', $data);
        //return view('beranda');
    }

    public function update($id_akss)
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

        $mAks = new mAks();
        $mAks->where('id_akss', $id_akss)->set($data)->update();

        return redirect('admin-aks');
    }

    public function delete($id_akss = '1')
    {
        Main::check_admin();
        $mAks = new mAks();
        $mAks->where('id_akss', $id_akss)->delete();

        return redirect('admin-aks');
    }
}
