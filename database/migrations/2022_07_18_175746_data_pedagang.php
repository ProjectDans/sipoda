<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedagang', function (Blueprint $table) {
            $table->id();
            $table->string('nm_pedagang');
            $table->string('gender_pedagang');
            $table->string('agama_pedagang');
            $table->string('no_tlp_pedagang');
            $table->string('nik_pedagang');
            $table->string('status_nikah_pedagang');
            $table->string('alamat_pedagang');
            $table->string('nm_tempat_id');
            $table->string('nm_usaha');
            $table->string('alat_usaha');
            $table->string('wilayah_usaha');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
