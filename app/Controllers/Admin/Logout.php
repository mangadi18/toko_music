<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Libraries\Template;
use App\Libraries\Main;

class Logout extends BaseController
{
    protected $session;

    public function __construct()
    {
        $session = \Config\Services::session();
        $this->session = $session;
        
    }

    public function process()
    {

       $this->session->remove('login_status');
       $this->session->remove('admin_email');

       return redirect()->to(site_url('login'));
    }


}
