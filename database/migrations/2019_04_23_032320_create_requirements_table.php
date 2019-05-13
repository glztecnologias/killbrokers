<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequirementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requirements', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nationality')->nullable(); 
            $table->integer('min_salary')->nullable(); 
            $table->boolean('aval')->nullable(); //necesita aval? (si/no)
            $table->boolean('dicom')->nullable(); // necesita informe dicom? (si/no)
            $table->integer('number_salary_settlements')->nullable(); // numero de liquidaciones (ultimas)
            $table->integer('number_quotations')->nullable(); // numero de cotizaciones afp (ultimas)
            $table->integer('number_warranty_pay')->nullable(); // numero de meses de garantia
            $table->integer('notary_cost')->nullable(); // costo notarial
            $table->boolean('pay_month_advance')->nullable(); // pago de mes por adelantado? (si/no)
            $table->boolean('dni_document')->nullable(); // necesita fotocopia carnet? (si/no)
            $table->integer('min_period_rent')->nullable(); // minimo de meses de contrato de renta.
            $table->text('general_description')->nullable(); // descripcion general

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
        Schema::dropIfExists('requirements');
    }
}
