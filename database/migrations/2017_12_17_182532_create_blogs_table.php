<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo',255)->nullable();
            $table->string('slug',255)->nullable();
            $table->string('imagen',255)->nullable();
            $table->date('fecha')->nullable();
            $table->text('resumen')->nullable();
            $table->text('cuerpo')->nullable();
            $table->integer('idusuario')->unsigned();
            $table->integer('orden')->nullable();
            $table->boolean('activo')->default(true);
            $table->foreign('idusuario')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blog');
    }
}
