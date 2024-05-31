<?php

namespace App\Models;

use CodeIgniter\Model;

class mbas extends Model
{
    protected $table      = 'basss';
    protected $primaryKey = 'id_basss';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['gambar','nama','harga','deskripsi'];
}