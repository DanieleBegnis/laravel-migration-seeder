<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('azienda', 120);
            $table->string('departing_station', 100);
            $table->string('arrival_station', 100);
            $table->time('departing_at', $precision = 0);
            $table->time('arriving_at', $precision = 0);
            $table->string('train_code', 100);
            $table->tinyInteger('number_of_wagons');
            $table->boolean('on_time');
            $table->boolean('cancelled');
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
        Schema::dropIfExists('trains');
    }
};
