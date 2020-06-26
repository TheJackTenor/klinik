<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableObat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('obat', function (Blueprint $table) {
            $table->bigIncrements('id', 20);
            $table->string('nama_obat', 100);
            $table->integer('stok'); 
            $table->string('satuan', 15);
            $table->timestamps();
        });

        Schema::table('stok_obat',function(Blueprint $table){
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
        Schema::table('stok_obat',function(Blueprint $table){
            $table->dropForeign('stok_obat_id_obat_foreign');
        });
        
        Schema::dropIfExists('obat');
    }
}
