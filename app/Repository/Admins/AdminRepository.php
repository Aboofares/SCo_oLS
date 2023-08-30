<?php


namespace App\Repository\Admins;


use App\Models\Admins\Admin;
use App\Models\Settings\Department;
use App\Models\Settings\Gender;
use App\Models\Settings\Nationality;
use App\Models\Settings\Religion;
use App\Models\Settings\Role;
use App\Models\Settings\Specialization;
use Illuminate\Support\Facades\Hash;

class AdminRepository implements AdminRepositoryInterface
{
    public function getAllAdmins()
    {
        return Admin::all();
    }

    public function GetSpecialization()
    {
        return Specialization::all();
    }

    public function GetGender()
    {
        return Gender::all();
    }

    public function GetNationality ()
    {
        return Nationality::all();
    }

    public function GetReligion ()
    {
        return Religion::all();
    }

    public function GetDepartment ()
    {
        return Department::all();
    }

    public function GetRoles ()
    {
        return Role::all();
    }

    public function SaveAdmin ($request)
    {

        try {
            $AdminN = new Admin();

            $AdminN->email = $request->Email;
            $AdminN->password =  Hash::make($request->password);
            $AdminN->name = ['en' => $request->Name_en, 'ar' => $request->Name_ar];


            $AdminN->Uni_IdType = $request->UniqueIdType;
            $n=$request->UniqueIdType;
            if($n = 1){
                $AdminN->Uni_Id = $request->UniqueIdSS;
            }elseif($n = 2){
                $AdminN->Uni_Id = $request->UniqueIdPP;
            }
            $AdminN->role_id = $request->Role_id;
            $AdminN->department_id = $request->Department_id;
            $AdminN->gender_id  = $request->Gender_id;
            $AdminN->religion_id = $request->religion_id;
            $AdminN->nationality_id  = $request->Nationality_id;
            $AdminN->dateOfBirth  = $request->TBirthdate;
            $AdminN->hiringDate = $request->Joining_Date;

            $AdminN->save();

            toastr( $message = trans('messages.success'),  $type = 'success',  $title = ' ');
            return redirect()->route('employeesIndex');

        }
        catch (Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }




    }


    public function EditAdmin($id)
    {
        return Admin::findOrFail($id);

    }


    public function UpdateAdmin ($request)
    {

        try {
            $AdminN = Admin::findOrFail($request->id);
            $AdminN->email = $request->Email;
            $AdminN->password =  Hash::make($request->password);
            $AdminN->name = ['en' => $request->Name_en, 'ar' => $request->Name_ar];


            $AdminN->Uni_IdType = $request->UniqueIdType;
            $n=$request->UniqueIdType;
            if($n = 1){
                $AdminN->Uni_Id = $request->UniqueIdSS;
            }elseif($n = 2){
                $AdminN->Uni_Id = $request->UniqueIdPP;
            }
            $AdminN->role_id = $request->Role_id;
            $AdminN->department_id = $request->Department_id;
            $AdminN->gender_id  = $request->Gender_id;
            $AdminN->religion_id = $request->religion_id;
            $AdminN->nationality_id  = $request->Nationality_id;
            $AdminN->dateOfBirth  = $request->TBirthdate;
            $AdminN->hiringDate = $request->Joining_Date;
            $AdminN->save();

            toastr( $message = trans('messages.Update'),  $type = 'success',  $title = ' ');
            return redirect()->route('employeesIndex');

        }
        catch (Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }

    }


    public function DeleteAdmin ($request)
    {
        Admin::findOrFail($request->id)->delete();
        toastr( $message = trans('messages.Delete'),  $type = 'error',  $title = ' ');
        return redirect()->route('employeesIndex');
    }
}
