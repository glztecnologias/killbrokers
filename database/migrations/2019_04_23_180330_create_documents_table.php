<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('path')->nullable(); 
            $table->integer('month')->nullable(); 
            $table->integer('year')->nullable();
            $table->string('type')->nullable(); //liquidacion / cotizacion afp
            $table->string('type_doc_date')->nullable(); //mensual, anual, trimestral
            $table->unsignedInteger('postulation_id');

            $table->unsignedInteger('documentable_id')->nullable(); //relacion polimorfica con  People /Avanl
            $table->unsignedInteger('documentable_type')->nullable();//relacion polimorfica con  People /Avanl
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
        Schema::dropIfExists('documents');
    }
}
