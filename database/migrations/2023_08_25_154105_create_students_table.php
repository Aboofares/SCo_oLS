<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('Uni_IdType')->nullable();
            $table->string('Uni_Id')->nullable();
            $table->date('dateOfBirth')->nullable();
            $table->bigInteger('nationality_id')->unsigned()->nullable();
            $table->foreign('nationality_id')->references('id')->on('nationalities')->onDelete('cascade');
            $table->bigInteger('religion_id')->unsigned()->nullable();
            $table->foreign('religion_id')->references('id')->on('religions')->onDelete('cascade');
            $table->bigInteger('gender_id')->unsigned()->nullable();
            $table->foreign('gender_id')->references('id')->on('genders')->onDelete('cascade');
            $table->string('profileImageURL')->nullable();
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
        Schema::dropIfExists('students');
    }
}
