<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;
    protected $table = "pegawai";
    protected $primaryKey = "id";
    protected $fillable = ['id', 'namapegawai', 'jabatan_id'. 'alamatpegawai', 'tanggallahir'];

    public function Jabatan()
    {
        return $this->belongsTo(Jabatan::class);
    }
}
