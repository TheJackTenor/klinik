<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableStokObat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stok_obat', function (Blueprint $table) {
            $table->bigIncrements('id', 20);
            $table->date('tgl');
            $table->integer('stok'); 
            $table->integer('stok_out'); 
            $table->bigInteger('id_obat')->unsigned();
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
        Schema::dropIfExists('stok_obat');
    }
}
