<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDetDiagnosa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('det_diagnosa', function (Blueprint $table) {
            $table->bigInteger('id_rekammedis')->unsigned()->index();
            $table->bigInteger('id_diagnosa')->unsigned()->index();
            $table->timestamps();

            // Set PK
            $table->primary(['id_rekammedis','id_diagnosa']);

            // Set FK det_diagnosa ---- rekammedis
            $table->foreign('id_rekammedis')
                ->references('id')
                ->on('rekammedis')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            // Set FK det_diagnosa ---- diagnosa
            $table->foreign('id_diagnosa')
                ->references('id')
                ->on('diagnosa')
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
        Schema::dropIfExists('det_diagnosa');
    }
}
