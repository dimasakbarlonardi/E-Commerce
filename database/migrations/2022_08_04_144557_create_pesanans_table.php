<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesanans', function (Blueprint $table) {
            $table->increments('pesanan_id');
            $table->integer('user_id');
            $table->date('tanggal');
            $table->string('status', 26);
            $table->integer('ongkir')->nullable();
            $table->string('kurir', 10)->nullable();
            $table->string('noresi', 50)->nullable();
            $table->integer('jumlah_harga');
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
        Schema::dropIfExists('pesanans');
    }
}
