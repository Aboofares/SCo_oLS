<?php


namespace App\Repository\Admins;


interface AdminRepositoryInterface
{
    public function getAllAdmins();

    public function GetSpecialization();

    public function GetGender();

    public function GetNationality ();

    public function GetReligion ();

    public function GetDepartment ();

    public function GetRoles ();

    public function SaveAdmin ($request);

    public function EditAdmin ($id);

    public function UpdateAdmin ($request);

    public function DeleteAdmin ($request);
}
