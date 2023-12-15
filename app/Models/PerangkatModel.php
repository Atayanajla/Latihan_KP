<?php

namespace App\Models;

use CodeIgniter\Model;

class PerangkatModel extends Model
{
    protected $table = 'perangkat';
    protected $primaryKey = 'id_per';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['nama', 'nama_perangkat', 'tipe_perangkat', 'stock', 'deskripsi', 'gambar', 'tanggal_input'];
    // protected $useTimestamps = true;
}