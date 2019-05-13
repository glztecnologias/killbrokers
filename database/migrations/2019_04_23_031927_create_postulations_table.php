<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostulationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postulations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('status')->nullable(); //estado de la postulacion
            $table->dateTime('date')->nullable(); // fecha de postulacion
            $table->integer('process_evaluation')->nullable(); // evaluacion del proceso
            $table->boolean('visit_state')->nullable(); //visito la propiedad
            $table->unsignedInteger('person_id');
            $table->unsignedInteger('process_id');
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
        Schema::dropIfExists('postulations');
    }
}
