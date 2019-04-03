<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactanosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contactanos', function (Blueprint $table) {
            $table->increments('id');
			$table->string('Nombre')->nullable();
			$table->string('Correo')->nullable();
			$table->string('Numero')->nullable();
			$table->string('Mensaje')->nullable();
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
        Schema::dropIfExists('contactanos');
    }
}
