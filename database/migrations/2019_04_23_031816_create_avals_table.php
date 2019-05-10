<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAvalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('dni')->nullable(); //rut o numero passaporte
            $table->string('email')->unique();
            $table->string('nationality')->nullable(); //nacionalidad
            $table->integer('age')->nullable(); //edad
            $table->string('profession')->nullable(); //profesion
            $table->integer('salary')->nullable(); // cantidad salario mensual CLP
            $table->string('institution_work')->nullable(); //nombre empresa de trabajo
            $table->integer('years_of_work')->nullable(); // cant. años antiguedad laboral
            $table->string('dicom_report_path')->nullable();// reporte dicom
            $table->string('work_contract_path')->nullable(); // contrato de trabajo
            $table->string('year_of_work_contract_path')->nullable(); // reporte antiguedad laboral
            $table->boolean('have_checking_account')->nullable();// Tiene Cheques
            $table->string('name_bank')->nullable(); //nombre banco
            $table->string('dni_document_path')->nullable(); // fotocopia carnet/passaporte
            $table->string('address')->nullable(); //direccion
            $table->unsignedInteger('person_id');
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
        Schema::dropIfExists('avals');
    }
}
