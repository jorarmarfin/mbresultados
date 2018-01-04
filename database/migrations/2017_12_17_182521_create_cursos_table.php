<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curso', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo',255)->nullable();
            $table->string('slug',255)->nullable()->unique();
            $table->string('titulo_corto',255)->nullable();
            $table->string('imagen',255)->nullable();
            $table->text('cuerpo')->nullable();
            $table->integer('orden')->nullable();
            $table->string('categoria',255)->default('#');
            $table->boolean('activo')->default(true);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('curso');
    }
}
