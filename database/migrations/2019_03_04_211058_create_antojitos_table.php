<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAntojitosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('antojitos', function (Blueprint $table) {
            $table->increments('id');
			$table->string('Nombre')->nullable;
			$table->string('Sabor')->nullable;		
			$table->string('Descripcion')->nullable;
			$table->integer('Precio')->nullable;
			$table->string('Foto')->nullable;
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
        Schema::dropIfExists('antojitos');
    }
}
