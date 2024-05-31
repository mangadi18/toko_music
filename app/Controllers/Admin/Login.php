<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Libraries\Main;

class Login extends BaseController
{
    protected $request;
    protected $session;

    public function __construct()
    {
        $request = \Config\Services::request();
        $session = \Config\Services::session();
        $this->request = $request;
        $this->session = $session;
        
    }
    public function index()
    {
        Main::check_login();
        return view('admin/login');
        //return view('beranda');
    }

    public function process()
    {
        $email = 'tokomusic@gmail.com';
        $password = '1234';

        if ($email == $this->request->getVar('email') && $password == $this->request->getVar('password')) {

            $this->session->set('login_status', TRUE);
            $this->session->set('admin_email', $email);

            return redirect()->to(base_url('beranda'));
        } else {
            return redirect()->to(base_url('login'));
        }
    }

}