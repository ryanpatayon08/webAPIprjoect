<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAirplaneFlightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('airplane_flights', function (Blueprint $table) {
            $table->id();
            $table->string('plane_name');
            $table->string('destination');
            $table->dateTime('date_time_of_arrival');
            $table->dateTime('date_time_of_departure');
            $table->decimal('ticket_price',10,2);
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
        Schema::dropIfExists('airplane_flights');
    }
}
