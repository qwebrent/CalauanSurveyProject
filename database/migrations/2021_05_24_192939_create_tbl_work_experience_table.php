<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblWorkExperienceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_work_experience', function (Blueprint $table) {
            $table->id();
            $table->string('job_type');
            $table->string('position');
            $table->string('year_from');
            $table->string('year_to');
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
        Schema::dropIfExists('tbl_work_experience');
    }
}
