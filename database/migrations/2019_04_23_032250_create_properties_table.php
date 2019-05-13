<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('publication_date')->nullable();// fecha de publicacion
            $table->integer('rent_price')->nullable(); //precio mensual renta
            $table->string('address')->nullable(); // direccion de la propiedad
            $table->string('new_or_used')->nullable(); // propiedad nueva o usada
            $table->string('type')->nullable(); // tipo de propiedad (casa, departamento, otro)

            $table->string('latitude')->nullable(); 
            $table->string('longitude')->nullable();
            $table->string('m2_usefull')->nullable(); // m2 usables
            $table->string('m2_built')->nullable(); // m2 construidos

            $table->integer('bathrooms')->nullable();// numero de baños
            $table->integer('badrooms')->nullable();// numero de habitaciones
            $table->string('orientation')->nullable(); // orientacion de ventanas/dpto etc.

            $table->integer('number_floor')->nullable(); // numero de piso.
            $table->string('hot_water_type')->nullable(); // tipo de agua caliente (electrica, gas, otro)
            $table->boolean('kitchen')->nullable(); // tiene cocina (si/no)
            $table->boolean('loggia')->nullable(); // tiene logia (si/no)
            $table->boolean('fridge')->nullable(); // tiene refrigerador (si/no)
            $table->boolean('washing_machine')->nullable(); // tiene lavadora (si/no)
            $table->boolean('curtains')->nullable(); // tiene cortinas (si/no)
            $table->boolean('microwave_oven')->nullable(); // tiene horno microondas (si/no)
            $table->boolean('storage')->nullable(); // tiene bodega (si/no)
            $table->boolean('microwave_oven')->nullable(); // tiene horno microondas (si/no)
            $table->boolean('parking')->nullable(); // incluye estacionamiento (si/no)

            //cosas que se incluyen/cubre en costo total de renta(si/no)
            $table->boolean('include_water')->nullable(); // tiene gimnacion (si/no)
            $table->boolean('include_hot_water')->nullable(); // tiene piscina (si/no)
            $table->boolean('include_internet')->nullable(); // tiene lavanderia (si/no)
            $table->boolean('include_tv_cable')->nullable(); // tiene gimnacion (si/no)
            $table->boolean('include_total_furnished')->nullable(); // amoblado completo(si/no)
            
            //cosas en comunidad
            $table->boolean('gym')->nullable(); // tiene gimnacion (si/no)
            $table->boolean('pool')->nullable(); // tiene piscina (si/no)
            $table->boolean('laundry')->nullable(); // tiene lavanderia (si/no)

            //costos aproximados comunes y variables
            $table->integer('common_expenses_cost')->nullable(); // costo gasto comun (aprox)
            $table->integer('electricity_cost')->nullable(); // costo electricidad (aprox)
            $table->integer('water_cost')->nullable(); // costo agua (aprox)

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
        Schema::dropIfExists('properties');
    }
}
