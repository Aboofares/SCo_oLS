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

            $table->string('name')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('profileImageURL')->nullable();

            $table->tinyInteger('FamilyStatus')->nullable();
            $table->tinyInteger('EducationRightTo')->nullable();

            $table->string('Father_Name');
            $table->date('Father_dateOfBirth')->nullable();
            $table->bigInteger('Father_nationality_id')->unsigned()->nullable();
            $table->foreign('Father_nationality_id')->references('id')->on('nationalities')->onDelete('cascade');
            $table->bigInteger('Father_religion_id')->unsigned()->nullable();
            $table->foreign('Father_religion_id')->references('id')->on('religions')->onDelete('cascade');
            $table->string('Father_IdType')->nullable();
            $table->string('Father_Id')->nullable();

            $table->string('Mother_Name');
            $table->date('Mother_dateOfBirth')->nullable();
            $table->bigInteger('Mother_nationality_id')->unsigned()->nullable();
            $table->foreign('Mother_nationality_id')->references('id')->on('nationalities')->onDelete('cascade');
            $table->bigInteger('Mother_religion_id')->unsigned()->nullable();
            $table->foreign('Mother_religion_id')->references('id')->on('religions')->onDelete('cascade');
            $table->string('Mother_IdType')->nullable();
            $table->string('Mother_Id')->nullable();

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
