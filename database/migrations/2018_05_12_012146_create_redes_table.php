<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRedesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('redes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('tipo')->default(1); //1:supervisado;2:nosupervisado
            $table->float('rate_learning')->nullable();
            $table->integer('itera')->nullable();
            $table->integer('numero_capas')->nullable();
            $table->integer('planta_id')->unsigned()->nullable();
            $table->foreign('planta_id')->references('id')->on('plantas');
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
        Schema::table('plantas',function(Blueprint $table) {
            $table->dropForeign(['planta_id']);
        });
        Schema::dropIfExists('redes');
    }
}
