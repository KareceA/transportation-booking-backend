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
        Schema::create('bus_availabilities', function (Blueprint $table) {
            $table->id();
            $table->date('datetime');
            $table->time('time');
            $table->string('from');
            $table->string('to');
            $table->string('cost');
            $table->string('status');
            // $table->foreign('bus_id')->references('id')->on('buses')->onDelete('cascade');
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
        Schema::dropIfExists('bus_availabilities');
    }
};
