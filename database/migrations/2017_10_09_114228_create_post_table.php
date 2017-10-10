<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post', function(Blueprint $table) {
            $table->increments('id');
            $table->string('Nama');
            $table->string('Alamat');
            $table->string('JenisKelamin');
            $table->string('TempatLahir');
            $table->date('TglLahir');
            $table->string('NoKtp');
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
        Schema::drop('post');
    }
}
