<?php

namespace App\Models;

use CodeIgniter\Model;

class mgitar extends Model
{
    protected $table      = 'gitarr';
    protected $primaryKey = 'id_gitar';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['gambar','nama','harga','deskripsi'];
}