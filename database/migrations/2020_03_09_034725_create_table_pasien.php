
<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePasien extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasien', function (Blueprint $table) {
            $table->bigIncrements('id', 20);
            $table->string('no_rm', 6)->unique();
            $table->string('nama_pasien',150);
            $table->string('tempat_lahir',50);
            $table->date('tanggal_lahir');
            $table->enum('jenis_kelamin',['L','P']);
            $table->string('alamat',300);
            $table->timestamps();
        });

        Schema::table('rekammedis',function(Blueprint $table){
            $table->foreign('id_pasien')
                ->references('id')
                ->on('pasien')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });

        Schema::table('riwayat',function(Blueprint $table){
            $table->foreign('id_pasien')
                ->references('id')
                ->on('pasien')
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
        // Drop FK di kolom id_pasien di tabel rekammedis
        Schema::table('rekammedis',function(Blueprint $table){
            $table->dropForeign('rekammedis_id_pasien_foreign');
        });

        // Drop FK di kolom id_pasien di tabel riwayat
        Schema::table('riwayat',function(Blueprint $table){
            $table->dropForeign('riwayat_id_pasien_foreign');
        });
        
        Schema::dropIfExists('pasien');
    }
}