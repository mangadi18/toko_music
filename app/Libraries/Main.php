<?php namespace App\Libraries;

class Main
 {  
    public static function check_login()
    {
        $session = \Config\Services::session();

        $login_status = $session->get('login_status');
        $admin_email = $session->get('admin_email');

       if($login_status == TRUE && isset($admin_email)){
            header( header: 'Location: '.site_url('beranda'));
            exit;
       }
    }

    public static function check_admin()
    {
        $session = \Config\Services::session();

        $login_status = $session->get('login_status');
        $admin_email = $session->get('admin_email');

       if($login_status != TRUE && empty($admin_email)){
            header( header: 'Location: '.site_url('login'));
            exit;
       }
    }

    
 }