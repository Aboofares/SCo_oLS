<?php


namespace App\Repository\Teachers;


interface TeacherRepositoryInterface
{
    // get all Teachers
    public function getAllTeachers();

    // Get specialization
    public function GetSpecialization();

    // Get Gender
    public function GetGender();

    // Get GetNationality
    public function GetNationality();


    // Get GetReligion
    public function   GetReligion();

    // Get SaveTeacher
    public function SaveTeacher($request);

    // Get EditTeachers
    public function EditTeachers($id);

// Get UpdateTeacher
    public function UpdateTeacher ($request);

// Get UpdateTeacher
    public function DeleteTeacher ($request);
}
