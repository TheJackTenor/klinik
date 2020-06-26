<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDetRiwayat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('det_riwayat', function (Blueprint $table) {
            $table->bigInteger('id_rekammedis')->unsigned()->index();
            $table->bigInteger('id_riwayat')->unsigned()->index();
            $table->timestamps();

            // Set PK
            $table->primary(['id_rekammedis','id_riwayat']);
            
            // Set FK det_riwayat ---- rekammedis
            $table->foreign('id_rekammedis')
                ->references('id')
                ->on('rekammedis')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            
            // Set FK det_riwayat ---- riwayat
            $table->foreign('id_riwayat')
                ->references('id')
                ->on('riwayat')
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
        Schema::dropIfExists('det_riwayat');
    }
}
