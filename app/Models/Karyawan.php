<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;
    protected $table = 'karyawan';
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'nm_karyawan', 'nik_karyawan', 'no_tlp_karyawan', 'email_karyawan', 'jabatan_karyawan', 'jabatan_id'
    ];

    public function Jabatan()
    {
        return $this->belongsTo(Jabatan::class);
    }
}
