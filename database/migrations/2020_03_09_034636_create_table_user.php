<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->bigIncrements('id', 20);
            $table->string('name', 100);
            $table->string('email', 50)->unique();
            // $table->timestamp('email_verified_at')->nullable();
            $table->string('password', 200);
            $table->rememberToken();
            $table->enum('level',['superadmin','admin','dokter']);
            $table->timestamps();
        });

        Schema::table('rekammedis',function(Blueprint $table){
            $table->foreign('id_dokter')
                ->references('id')
                ->on('user')
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

        Schema::table('rekammedis',function(Blueprint $table){
            $table->dropForeign('rekammedis_id_dokter_foreign');
        });

        Schema::dropIfExists('user');
    }
}
