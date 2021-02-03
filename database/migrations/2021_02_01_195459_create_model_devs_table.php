<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelDevsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidatos', function (Blueprint $table) {
            $table->id();
            $table->string('nome',50);
            $table->string('email',50); 
            $table->integer('idade');
            $table->string('Url_linkedin',50);
            $table->string('tecnologias');
            $table->date('dNasc');            
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
        Schema::dropIfExists('candidatos');
    }
}
