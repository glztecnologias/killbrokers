<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProcessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('processes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->dateTime('start_date')->nullable(); 
            $table->dateTime('end_date')->nullable();
            $table->integer('max_number_postulation')->nullable(); 
            $table->string('type_doc_date')->nullable(); 
            $table->unsignedInteger('property_id');
            $table->unsignedInteger('owner_id');
            $table->unsignedInteger('requirement_id');

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
        Schema::dropIfExists('processes');
    }
}
