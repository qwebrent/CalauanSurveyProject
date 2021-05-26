<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblHouseholdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_household', function (Blueprint $table) {
            $table->id();
            $table->date('yearnow');
            $table->string('owner');
            $table->string('lot')->nullable();
            $table->string('street');
            $table->string('purok');
            $table->string('barangay');
            $table->string('municipality');
            $table->string('province');
            $table->string('date_reg');
            $table->unsignedbigInteger('res_id');
            $table->foreign('res_id')->references('unique_id')->on('tbl_residence');
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
        Schema::dropIfExists('tbl_household');
    }
}
