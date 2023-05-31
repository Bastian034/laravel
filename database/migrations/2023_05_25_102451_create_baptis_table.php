<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBaptisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('baptis', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('nama_ayah');
            $table->string('nama_ibu');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->date('tanggal_baptis');
            $table->timestamps();
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
        Schema::dropIfExists('baptis');
    }
}
