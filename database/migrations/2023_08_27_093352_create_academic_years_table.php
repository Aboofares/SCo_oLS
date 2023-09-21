<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcademicYearsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academic_years', function (Blueprint $table) {
            $table->id();
            $table->string('AcademicYear');
            $table->date('FirstTermStartDate')->nullable();
            $table->date('FirstTermEndDate')->nullable();
            $table->date('MiddleExamsStartDate')->nullable();
            $table->date('MiddleExamsEndDate')->nullable();
            $table->date('SecondTermStartDate')->nullable();
            $table->date('SecondTermEndDate')->nullable();
            $table->date('FinalExamsStartDate')->nullable();
            $table->date('FinalExamsEndDate')->nullable();
            $table->date('SummerStartDate')->nullable();
            $table->date('SummerEndDate')->nullable();

            $table->date('AdmissionStartDate')->nullable();
            $table->date('AdmissionEndDate')->nullable();
            $table->boolean('AcademicYearStatus')->nullable();
            $table->string('AcademicYearNote')->nullable();
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
        Schema::dropIfExists('academic_years');
    }
}
