<?php

namespace App\Models;

use CodeIgniter\Model;

class mdram extends Model
{
    protected $table      = 'dramm';
    protected $primaryKey = 'id_dramm';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['gambar','nama','harga','deskripsi'];
}