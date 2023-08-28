<?php


namespace App\Repository\Teachers;


use App\Models\Settings\Gender;
use App\Models\Settings\Nationality;
use App\Models\Settings\Religion;
use App\Models\Settings\Specialization;
use App\Models\Teachers\Teacher;
use Illuminate\Support\Facades\Hash;

class TeacherRepository implements TeacherRepositoryInterface
{

    public function getAllTeachers()
    {
        return Teacher::all();
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

    public function SaveTeacher ($request)
    {

        try {
            $Teachers = new Teacher();

            $Teachers->email = $request->Email;
            $Teachers->password =  Hash::make($request->password);
            $Teachers->name = ['en' => $request->Name_en, 'ar' => $request->Name_ar];


            $Teachers->Uni_IdType = $request->UniqueIdType;
            $n=$request->UniqueIdType;
            if($n = 1){
                $Teachers->Uni_Id = $request->UniqueIdSS;
            }elseif($n = 2){
                $Teachers->Uni_Id = $request->UniqueIdPP;
            }

            $Teachers->specialization_id = $request->Specialization_id;
            $Teachers->gender_id  = $request->Gender_id;
            $Teachers->religion_id = $request->religion_id;
            $Teachers->nationality_id  = $request->Nationality_id;
            $Teachers->dateOfBirth  = $request->TBirthdate;
            $Teachers->hiringDate = $request->Joining_Date;

            $Teachers->save();

            toastr( $message = trans('messages.success'),  $type = 'success',  $title = ' ');
              return redirect()->route('TeachersIndex');

        }
        catch (Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }




    }

    public function EditTeachers($id)
    {
        return Teacher::findOrFail($id);
    }

    public function UpdateTeacher ($request)
    {

        try {
            $Teachers = Teacher::findOrFail($request->id);
            $Teachers->email = $request->Email;
            $Teachers->password =  Hash::make($request->password);
            $Teachers->name = ['en' => $request->Name_en, 'ar' => $request->Name_ar];


            $Teachers->Uni_IdType = $request->UniqueIdType;
            $n=$request->UniqueIdType;
            if($n = 1){
                $Teachers->Uni_Id = $request->UniqueIdSS;
            }elseif($n = 2){
                $Teachers->Uni_Id = $request->UniqueIdPP;
            }

            $Teachers->specialization_id = $request->Specialization_id;
            $Teachers->gender_id  = $request->Gender_id;
            $Teachers->religion_id = $request->religion_id;
            $Teachers->nationality_id  = $request->Nationality_id;
            $Teachers->dateOfBirth  = $request->TBirthdate;
            $Teachers->hiringDate = $request->Joining_Date;
            $Teachers->save();

            toastr( $message = trans('messages.Update'),  $type = 'success',  $title = ' ');
            return redirect()->route('TeachersIndex');

        }
        catch (Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }

     }

    public function DeleteTeacher ($request)
    {
        Teacher::findOrFail($request->id)->delete();
        toastr( $message = trans('messages.Delete'),  $type = 'error',  $title = ' ');
        return redirect()->route('TeachersIndex');
    }
}
