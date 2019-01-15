<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reportes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('tipo');
            $table->integer('itera');
            $table->float('rate_learning');
            $table->integer('rede_id')->unsigned()->nullable();
            $table->foreign('rede_id')->references('id')->on('redes')->onDelete('cascade');
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
        Schema::table('reportes',function(Blueprint $table) {
            Schema::dropIfExists('reportes');
        });
        
    }
}
