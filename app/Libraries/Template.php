<?php namespace App\Libraries;

class Template
{
    public static function tampil_user($nama_view, $data) {
        $template = '';

        $menu = view('user/menu');
        $body = view($nama_view, $data);
        $footer = view('user/footer');

        $data  = array_merge($data, [
            'menu' => $menu,
            'body' => $body,
            'footer' => $footer,
        ]);

        return view('user/index', $data);
    }

     public static function tampil_admin($nama_view, $data) {
         $template = '';

         $menu = view('admin/menu');
         $body = view($nama_view, $data);
         $footer = view('admin/footer');

         $data  = array_merge($data, [
             'menu' => $menu,
             'body' => $body,
             'footer' => $footer,
         ]);

         return view('admin/index', $data);
     }
}