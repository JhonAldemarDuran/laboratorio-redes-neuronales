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
            $table->float('delta')->nullable; 
            $table->float('rate_learning')->nullable();
            $table->integer('itera')->nullable();
            $table->integer('numero_capas')->nullable();
            $table->integer('numero_neu')->nullable();
            $table->integer('tiempo_establecimiento')->nullable();
            $table->float('tiempo_muestreo')->nullable();
            $table->integer('instancias_adq')->nullable();
            $table->integer('instancias_c')->nullable();
            $table->float('a11')->nullable();
            $table->float('a12')->nullable();
            $table->float('a21')->nullable();
            $table->float('a22')->nullable();
            $table->float('b11')->nullable();
            $table->float('b21')->nullable();
            $table->float('b22')->nullable();
            $table->float('c11')->nullable();
            $table->float('c12')->nullable();  
            $table->float('d11')->nullable();
            $table->integer('planta_id')->unsigned()->nullable();
            $table->foreign('planta_id')->references('id')->on('plantas')->onDelete('cascade');
            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::table('redes',function(Blueprint $table) {           
            Schema::dropIfExists('redes');
        });
        
    }
}
