<?php
namespace App\Models;

use CodeIgniter\Model;

class ModelKaryawan extends Model{
    protected $table = "karyawan";
      // Nama kolom yang merupakan primary key
    protected $primaryKey = 'idKaryawan';

    // Kolom-kolom yang dapat diisi (fillable) jika menggunakan Eloquent mass assignment
    protected $fillable = ['idKaryawan', 'username', 'password'];
    protected $returnType = "object";
    protected $useTimestamps = true;
}
