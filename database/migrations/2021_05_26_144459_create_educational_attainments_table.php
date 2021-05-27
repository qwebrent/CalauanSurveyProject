<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEducationalAttainmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('educational_attainments', function (Blueprint $table) {
            $table->id();
            $table->string('school_name');
            $table->string('school_address');
            $table->string('course')->nullable();
            $table->string('level');
            $table->string('school_year');
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
        Schema::dropIfExists('educational_attainments');
    }
}
