<?php

namespace App\Models;

use CodeIgniter\Model;

class mhome extends Model
{
    protected $table      = 'home';
    protected $primaryKey = 'id_home';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['gambar','nama'];
}