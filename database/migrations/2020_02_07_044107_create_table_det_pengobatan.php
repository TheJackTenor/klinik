<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDetPengobatan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('det_pengobatan', function (Blueprint $table) {
            $table->bigInteger('id_rekammedis')->unsigned()->index();
            $table->bigInteger('id_obat')->unsigned()->index();
            $table->string('aturan', 5);
            $table->integer('jumlah');
            $table->timestamps();

            // Set PK
            $table->primary(['id_rekammedis','id_obat']);
            
            // Set FK det_pengobatan ---- rekammedis
            $table->foreign('id_rekammedis')
                ->references('id')
                ->on('rekammedis')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            
            // Set FK det_pengobatan ---- obat
            $table->foreign('id_obat')
                ->references('id')
                ->on('obat')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('det_pengobatan');
    }
}
