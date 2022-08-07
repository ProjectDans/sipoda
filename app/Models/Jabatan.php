<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    use HasFactory;
    protected $table = "jabatan";
    protected $primaryKey = "id";
    protected $fillable = ['id', 'jabatan'];

    public function Pegawai()
    {
        return $this->hasMany(Pegawai::class);
    }

    public function Karyawan()
    {
        return $this->hasMany(Karyawan::class);
    }
}
