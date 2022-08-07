<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wilayah extends Model
{
    protected $table = "wilayah";
    protected $primaryKey = "id";
    protected $fillable = ['id', 'nm_tempat', 'nm_kelurahan', 'nm_kecamatan', 'wilayah'];

    public function pedagang()
    {
        return $this->hasMany(Pedagang::class);
    }
}
