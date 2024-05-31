<?php

namespace App\Models;

use CodeIgniter\Model;

class maks extends Model
{
    protected $table      = 'akss';
    protected $primaryKey = 'id_akss';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['gambar','nama','harga','deskripsi'];
}