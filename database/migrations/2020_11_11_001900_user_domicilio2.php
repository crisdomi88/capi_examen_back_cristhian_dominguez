<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UserDomicilio2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_domicilio2', function (Blueprint $table) {
            $table->id();
            $table->string('domicilio');
            $table->integer('numero_exterior');
            $table->string('colonia');
            $table->integer('cp');
            $table->string('ciudad');
            $table->date('fecha_nacimiento');
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
        Schema::drop('user_domicilio2');
    }
}
