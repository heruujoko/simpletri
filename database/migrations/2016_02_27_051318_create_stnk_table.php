<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStnkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stnk' , function(Blueprint $table){
          $table->increments('id');
          $table->string('nomor_surat');
          $table->string('nomor_polisi');
          $table->string('nama_pemilik');
          $table->text('alamat');
          $table->string('type');
          $table->string('jenis');
          $table->string('tahun_pembuatan');
          $table->string('tahun_perakitan');
          $table->string('isi_silinder');
          $table->string('no_rangka');
          $table->string('no_mesin');
          $table->string('ident')->nullable();
          $table->date('tgl_faktur');
          $table->string('bahan_bakar');
          $table->string('warna_tnkb');
          $table->string('tahun_registrasi');
          $table->string('nomor_bpkb');
          $table->date('berlaku_sampai');
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
        Schema::drop('stnk');
    }
}
