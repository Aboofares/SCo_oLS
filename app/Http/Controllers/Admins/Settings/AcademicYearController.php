<?php

namespace App\Http\Controllers\Admins\Settings;

use App\Http\Controllers\Controller;
use App\Models\Admins\Settings\AcademicYear;
use Illuminate\Http\Request;

class AcademicYearController extends Controller
{
    //

    public function index(){
        $AcademicYears=AcademicYear::all();
        return view('Admins.Content.Settings.Main.AcademicYearIndex',compact('AcademicYears'));
    }


    public function store(Request $request){

//return $request;
        try {

            $AcademicYear = new AcademicYear();
            $AcademicYear->AcademicYear = $request->AcademicYearName;
            $AcademicYear->FirstTermStartDate = $request->FirstTermStartDate;
            $AcademicYear->FirstTermEndDate = $request->FirstTermEndDate;
            $AcademicYear->MiddleExamsStartDate = $request->MiddleExamsStartDate;
            $AcademicYear->MiddleExamsEndDate = $request->MiddleExamsEndDate;
            $AcademicYear->SecondTermStartDate = $request->SecondTermStartDate;
            $AcademicYear->SecondTermEndDate = $request->SecondTermEndDate;
            $AcademicYear->FinalExamsStartDate = $request->FinalExamsStartDate;
            $AcademicYear->FinalExamsEndDate = $request->FinalExamsEndDate;
            $AcademicYear->SummerStartDate= $request->SummerStartDate;
            $AcademicYear->SummerEndDate= $request->SummerEndDate;
            $AcademicYear->AdmissionStartDate= $request->AdmissionStartDate;
            $AcademicYear->AdmissionEndDate= $request->AdmissionEndDate;
            $AcademicYear->AcademicYearNote= $request->AcademicYearNote;

            if (isset($request->AcademicYearStatus)) {
                $AcademicYear->AcademicYearStatus = true;
            }else{
                $AcademicYear->AcademicYearStatus = false;
            }

            $AcademicYear->save();



            toastr( $message = trans('messages.success'),  $type = 'success',  $title = ' ');
            return redirect()->route('AcademicYearIndex');
        }

        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }



    }
}
