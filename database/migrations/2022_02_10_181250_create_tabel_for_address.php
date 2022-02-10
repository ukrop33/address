<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabelForAddress extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabel_for_address', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('hous_fias_id');           # Фиас
            $table->integer('region_id');              # Регион
            $table->integer('np_id');                  # Тип населеного пункта
            $table->integer('city_id');                # Название н.п.
            $table->integer('area_id');                # Название района
            $table->integer('street_type_id');         # улица или шоссе
            $table->integer('street_name_id');         # Название улицы или шоссе
            $table->integer('house_id');               # № Дома
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tabel_for_address');
    }
}
