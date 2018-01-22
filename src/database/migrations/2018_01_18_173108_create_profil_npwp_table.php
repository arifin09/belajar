<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilNpwpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profil_npwp', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('no_npwp');
            $table->string('nama_terdaftar');
            $table->date('tgl_daftar');
            $table->text('alamat_terdaftar');
            $table->integer('status');
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
        Schema::drop('profil_npwp');
    }
}
