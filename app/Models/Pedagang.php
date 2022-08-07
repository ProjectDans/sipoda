<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedagang extends Model
{
    protected $table = "pedagang";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'nm_pedagang', 'gender_pedagang', 'agama_pedagang', 'no_tlp_pedagang', 'nik_pedagang', 'status_nikah_pedagang', 'alamat_pedagang', 'wilayah_id', 'nm_usaha', 'alat_usaha', 'wilayah_usaha'];

        public function wilayah()
        {
            return $this->belongsTo(Wilayah::class);
        }
}
