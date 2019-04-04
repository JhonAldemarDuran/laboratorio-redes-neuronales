<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Nets.
 *
 * @author  The scaffold-interface created at 2019-03-20 07:08:32am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Nets extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('nets',function (Blueprint $table){

        $table->increments('id');
        
        $table->String('name');            
        $table->float('delta')->nullable; 
        $table->float('rate_learning')->nullable();
        $table->integer('itera')->nullable();
        $table->integer('numero_capas')->nullable();
        $table->integer('numero_neu')->nullable();
        $table->float('tiempo_establecimiento')->nullable();
        $table->float('tiempo_muestreo')->nullable();
        $table->integer('instancias_adq')->nullable();
        $table->integer('instancias_c')->nullable();
        $table->integer('a11')->nullable();
        $table->integer('a12')->nullable();
        $table->integer('a21')->nullable();
        $table->integer('a22')->nullable();
        $table->integer('b11')->nullable();
        $table->integer('b21')->nullable();
        $table->integer('b22')->nullable();
        $table->integer('c11')->nullable();
        $table->integer('c12')->nullable();  
        $table->integer('d11')->nullable();
        $table->boolean('completed')->default(false);
        
        /**
         * Foreignkeys section
         */
        
        $table->integer('plant_id')->unsigned()->nullable();
        $table->foreign('plant_id')->references('id')->on('plants')->onDelete('cascade');

        $table->integer('user_id')->unsigned()->nullable();
        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        
        
        $table->timestamps();
        
        
        // type your addition here

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return  void
     */
    public function down()
    {
        Schema::drop('nets');
    }
}
