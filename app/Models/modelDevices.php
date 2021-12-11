<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelDevices extends Model
{
    protected $table = "devices";
    protected $primaryKey = "ID";
    protected $allowedFields = ['Nama', 'Brand', 'Kuantitas', 'Status'];
}
