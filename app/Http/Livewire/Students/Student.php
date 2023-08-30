<?php

namespace App\Http\Livewire\Students;

use App\Models\Families\Family;
use App\Models\Settings\Gender;
use App\Models\Settings\Nationality;
use App\Models\Settings\Religion;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Student extends Component
{
    public $currentStep = 1;
    public $successMessage = '';
    public $catchError;

    public $Stu_Id;


    public $SName_ar,$FName_ar,$MName_ar,$MName_en,$FName_en,$SName_en,
            $SGender_id,$SNationality_id,$SReligion_id,$SBirthdate;

    public $FNationality_id,$FReligion_id,$FBirthdate;

    public $MNationality_id,$MReligion_id,$MBirthdate;

    public $SEmail,$SPassword,$FEmail,$FPassword;

    public $show_table=true;
    public $updateMode=false;


//    public function updated($propertyName)
//    {
//        $this->validateOnly($propertyName, [
////            'SName_ar' => 'required',
//
//        ]);
//    }


    public function ShowFamilyData(){
        $this->show_table = false;
    }

    public function HideFamilyData(){
        $this->show_table = true;
    }

    public function render()
    {
        return view('livewire.students.student', [
            'Nationalities' => Nationality::all(),
            'Religions' => Religion::all(),
            'Genders'=>Gender::all(),
            'Students'=>\App\Models\Students\Student::all(),
            'Family'=>Family::all(),
        ]);
    }



    public function edit($id)
    {
        $this->show_table = false;
        $this->updateMode = true;

        $student = \App\Models\Students\Student::where('id',$id)->first();
        $this->Stu_Id=$student->id;
        $this->SName_ar = $student->getTranslation('name', 'ar');
        $this->SName_en = $student->getTranslation('name', 'en');
        $this->SEmail  = $student->email;
        $this->SPassword =$student->password;
        $this->SNationality_id=$student->nationality_id;
        $this->SReligion_id=$student->religion_id;
        $this->SGender_id=$student->gender_id ;
        $this->Uni_Id =$student->Uni_Id;
        $this->SBirthdate =$student->dateOfBirth;
        $this->studentStatus =$student->studentStatus;

        $Stu_Family = Family::where('id',$student->family_id)->first();

        $this->FName_ar = $Stu_Family->getTranslation('Father_Name', 'ar');
        $this->FName_en = $Stu_Family->getTranslation('Father_Name', 'en');
        $this->FNationality_id = $Stu_Family->Father_nationality_id;
        $this->FReligion_id= $Stu_Family->Father_religion_id ;
        $this->FBirthdate= $Stu_Family->Father_dateOfBirth;

        $this->MName_ar = $Stu_Family->getTranslation('Mother_Name', 'ar');
        $this->MName_en = $Stu_Family->getTranslation('Mother_Name', 'en');
        $this->MNationality_id = $Stu_Family->Mother_nationality_id;
        $this->MReligion_id= $Stu_Family->Mother_religion_id;
        $this->MBirthdate=$Stu_Family->Mother_dateOfBirth;

        $this->FEmail= $Stu_Family->email;
        $this->FPassword= $Stu_Family->password;
    }




    //FirstStepSubmit
    public function FirstStepSubmit()
    {
        $this->currentStep = 2;
    }

    //SecondStepSubmit
    public function SecondStepSubmit()
    {
        $this->currentStep = 3;
    }

    //ThirdStepSubmit
    public function ThirdStepSubmit()
    {
        $this->currentStep = 4;
    }



    public function SubmitForm()
    {
        try{

            //student
            $Student = new \App\Models\Students\Student();
            $Student->name = ['en' => $this->SName_en, 'ar' => $this->SName_ar];
            $Student->email  = $this->SEmail;
            $Student->password = Hash::make($this->SPassword);
            $Student->nationality_id   = $this->SNationality_id;
            $Student->religion_id = $this->SReligion_id;
            $Student->gender_id = $this->SGender_id;
            $Student->Uni_Id = "---";
            $Student->dateOfBirth = $this->SBirthdate;
            $Student->studentStatus = "unClassed";
            $Student->save();
            $insertedStudentId = $Student->id;

            //$Family
            $Family = new \App\Models\Families\Family();
            //Father
            $Family->Father_Name = ['en' => $this->FName_en, 'ar' => $this->FName_ar];
            $Family->Father_nationality_id= $this->FNationality_id;
            $Family->Father_religion_id = $this->FReligion_id;
            $Family->Father_dateOfBirth= $this->FBirthdate;
            $Family->Father_IdType= "1";
            $Family->Father_Id= "1234567889000";
            //mother
            $Family->Mother_Name = ['en' => $this->MName_en, 'ar' => $this->MName_ar];
            $Family->Mother_nationality_id= $this->MNationality_id;
            $Family->Mother_religion_id=$this->MReligion_id;
            $Family->Mother_dateOfBirth=$this->MBirthdate;
            $Family->Mother_IdType= "1";
            $Family->Mother_Id= "1234567889000";
            $Family->email  = $this->FEmail;
            $Family->password = Hash::make($this->FPassword);
            $Family->save();

            $insertedFamilyId = $Family->id;


            $StudentU = \App\Models\Students\Student::findOrFail($insertedStudentId);

            $StudentU->update(
                [
                    'family_id' => $insertedFamilyId,
                ]);

            $this->successMessage = trans('messages.success');
            $this->clearForm();
            $this->currentStep = 1;
//            return redirect()->to('/add-family');
        }
        catch(\Exception $e){
            $this->catchError = $e->getMessage();
        }
    }




    public function submitForm_edit(){

        $Student = \App\Models\Students\Student::findOrFail($this->Stu_Id);
        $Student->update([
            'name' => ['en' => $this->SName_en, 'ar' => $this->SName_ar],
            'nationality_id' => $this->SNationality_id,
            'religion_id' => $this->SReligion_id,
            'gender_id' => $this->SGender_id,
            'dateOfBirth' =>$this->SBirthdate,
            'email' => $this->SEmail,
            'password' => Hash::make($this->SPassword),
        ]);
        $Family = Family::findOrFail($Student->family_id);
        $Family->update([
            'Father_Name' => ['en' => $this->FName_en, 'ar' => $this->FName_ar],
            'Mother_Name' => ['en' => $this->MName_en, 'ar' => $this->MName_ar],
        ]);

//
//
//            $this->successMessage = trans('messages.success');
            return redirect()->to('admin/students');

    }




    public function clearForm()
    {
        $this->SEmail = '';
        $this->SName_en = '';
        $this->SName_ar = '';
        $this->SPassword = '';
        $this->SNationality_id   = '';
        $this->SReligion_id   = '';
        $this->SGender_id  = '';
        $this->Uni_Id = '';
        $this->SBirthdate = '';
        $this->studentStatus = '';

    }






    //back
    public function back($step)
    {
        $this->currentStep = $step;
    }

//Submit_edit
    public function firstStepSubmit_edit()
    {
        $this->updateMode = true;
        $this->currentStep = 2;

    }

    public function secondStepSubmit_edit()
    {
        $this->updateMode = true;
        $this->currentStep = 3;

    }

    public function thirdStepSubmit_edit()
    {
        $this->updateMode = true;
        $this->currentStep = 4;

    }









    public function delete($id){

        $student = \App\Models\Students\Student::findOrFail($id);
        $Family = Family::where('id',$student->family_id)->delete();
        $student->delete();
        return redirect()->to('admin/students');
    }
}
