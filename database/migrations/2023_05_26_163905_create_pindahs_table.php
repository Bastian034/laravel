<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePindahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pindahs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nama_jemaat');
            $table->string('tempat_lahir');
            $table->string('tanggal_lahir');
            $table->string('gender');
            $table->string('golongan_darah');
            $table->string('alamat');
            $table->string('no_hp');
            $table->string('gereja');
            $table->foreign('id')->on('users')->references('id')
                ->onDelete('CASCADE')
                ->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pindahs');
    }
}
