<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFamiliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('families', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->tinyInteger('FamilyStatus')->nullable();
            $table->tinyInteger('EducationRightTo')->nullable();


            $table->date('Father_dateOfBirth')->nullable();
            $table->bigInteger('Father_nationality_id')->unsigned()->nullable();
            $table->foreign('Father_nationality_id')->references('id')->on('nationalities')->onDelete('cascade');
            $table->bigInteger('Father_religion_id')->unsigned()->nullable();
            $table->foreign('Father_religion_id')->references('id')->on('religions')->onDelete('cascade');
            $table->bigInteger('Father_gender_id')->unsigned()->nullable();
            $table->foreign('Father_gender_id')->references('id')->on('genders')->onDelete('cascade');

            $table->string('Father_IdType')->nullable();
            $table->string('Father_Id');


            $table->string('profileImageURL')->nullable();

            $table->date('Mother_dateOfBirth')->nullable();
            $table->bigInteger('Mother_nationality_id')->unsigned()->nullable();
            $table->foreign('Mother_nationality_id')->references('id')->on('nationalities')->onDelete('cascade');
            $table->bigInteger('Mother_religion_id')->unsigned()->nullable();
            $table->foreign('Mother_religion_id')->references('id')->on('religions')->onDelete('cascade');
            $table->bigInteger('Mother_gender_id')->unsigned()->nullable();
            $table->foreign('Mother_gender_id')->references('id')->on('genders')->onDelete('cascade');

            $table->string('Mother_IdType')->nullable();
            $table->string('Mother_Id');


            $table->rememberToken();
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
        Schema::dropIfExists('families');
    }
}
