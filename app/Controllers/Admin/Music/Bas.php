<?php

namespace App\Controllers\Admin\Music;

use App\Controllers\BaseController;
use App\Libraries\Template;
use App\Models\mBas;
use CodeIgniter\HTTP\RequestInterface;
use App\Libraries\Main;

class Bas extends BaseController
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
        $mBas = new mBas();
        $bas_list = $mBas->findAll();

        $data = [
            'bas_list' => $bas_list
        ];

        return Template::tampil_admin('admin/bas/bas', $data);
        //return view('beranda');
    }

    public function bas()
    {
        Main::check_admin();
        return Template::tampil_admin('admin/bas/tambah_bas', []);
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

        $mBas = new mBas();
        $mBas->insert($data);

        return redirect('admin-bas');
    }

    public function edit($id_basss)
    {

        Main::check_admin();
        $mBas = new mBas();
        $bass_row = $mBas->where('id_basss', $id_basss)->first();

        $data = [
            'bass_row' => $bass_row

        ];
        return Template::tampil_admin('admin/bas/edit_bas', $data);
        //return view('beranda');
    }

    public function update($id_basss)
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

        $mBas = new mBas();
        $mBas->where('id_basss', $id_basss)->set($data)->update();

        return redirect('admin-bas');
    }

    public function delete($id_basss = '1')
    {
        Main::check_admin();
        $mBas = new mBas();
        $mBas->where('id_basss', $id_basss)->delete();

        return redirect('admin-bas');
    }
}
