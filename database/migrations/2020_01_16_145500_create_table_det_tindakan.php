<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDetTindakan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('det_tindakan', function (Blueprint $table) {
            $table->bigInteger('id_rekammedis')->unsigned()->index();
            $table->bigInteger('id_tindakan')->unsigned()->index();
            $table->timestamps();

            // Set PK
            $table->primary(['id_rekammedis','id_tindakan']);
            
            // Set FK det_tindakan ---- rekammedis
            $table->foreign('id_rekammedis')
                ->references('id')
                ->on('rekammedis')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            
            // Set FK det_tindakan ---- tindakan
            $table->foreign('id_tindakan')
                ->references('id')
                ->on('tindakan')
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
        Schema::dropIfExists('det_tindakan');
    }
}
