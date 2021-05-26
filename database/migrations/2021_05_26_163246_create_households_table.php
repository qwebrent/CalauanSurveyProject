<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHouseholdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('households', function (Blueprint $table) {
            $table->id();
            $table->string('yearnow');
            $table->string('owner');
            $table->string('lot')->nullable();
            $table->string('street');
            $table->string('purok');
            $table->string('barangay');
            $table->string('municipality');
            $table->string('province');
            $table->string('date_reg');
            $table->unsignedBigInteger('res_id');
            $table->foreign('res_id')->references('unique_id')->on('residents');
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
        Schema::dropIfExists('households');
    }
}
