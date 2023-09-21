<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdmissionStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admission_students', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->date('dateOfBirth')->nullable();
            $table->bigInteger('nationality_id')->unsigned()->nullable();
            $table->foreign('nationality_id')->references('id')->on('nationalities')->onDelete('cascade');
            $table->bigInteger('religion_id')->unsigned()->nullable();
            $table->foreign('religion_id')->references('id')->on('religions')->onDelete('cascade');
            $table->bigInteger('gender_id')->unsigned()->nullable();
            $table->foreign('gender_id')->references('id')->on('genders')->onDelete('cascade');
            $table->bigInteger('AdmissionStudentStatus')->nullable();

            $table->bigInteger('adm_stage_id')->unsigned();
            $table->foreign('adm_stage_id')->references('id')->on('stages')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->bigInteger('adm_grade_id')->unsigned();
            $table->foreign('adm_grade_id')->references('id')->on('grades')
                ->onDelete('cascade')
                ->onUpdate('cascade');


            $table->bigInteger('adm_AcademicYear_id')->unsigned();
            $table->foreign('adm_AcademicYear_id')->references('id')->on('academic_years')
                ->onDelete('cascade')
                ->onUpdate('cascade');


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
        Schema::dropIfExists('admission_students');
    }
}
