<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rules', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('max_number_people')->nullable(); //numero maximo de personas que puede vivir en el inmueble. (1-n o null)
            $table->boolean('pets')->nullable();  // pueden vivir mascotas? (si/no)
            $table->boolean('parties')->nullable(); //se pueden hacer fiestas? (si/no)
            $table->text('general_description')->nullable(); // descripcion general
            $table->unsignedInteger('property_id');
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
        Schema::dropIfExists('rules');
    }
}
