<?php

namespace App\Http\Controllers\Admins\Settings;

use App\Http\Controllers\Controller;
use App\Models\Admins\Settings\Grade;
use App\Models\Admins\Settings\Stage;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    //
    public function index()
    {
        //
        $Grades = Grade::all();
        $Stages = Stage::all();
        return view('Admins.Content.Settings.gradesIndex',compact('Grades','Stages'));

    }

    public function store(Request $request)
    {
        $listGrades=$request->listGrades;

        try {
//            $validated = $request->validated();

            foreach ($listGrades as $listGrade) {
                $Grade = new Grade();
                $Grade->name = ['en' => $listGrade['Name_en'], 'ar' => $listGrade['Name_ar']];
                $Grade->notes = $listGrade['Notes'];
                $Grade->stage_id = $listGrade['stage_id'];
                if (isset($listGrade['Status'])) {
                    $Grade->status = true;
                } else {
                    $Grade->status = false;
                }
                $Grade->save();
            }
            toastr( $message = trans('messages.success'),  $type = 'success',  $title = ' ');
            return redirect()->route('gradesIndex');
        }

        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }


    public function update(Request $request)
    {
        try {

            $Grade = Grade::findOrFail($request->id);
            if (isset($request->Status)) {
                $t=  $Grade->status = true;
            }else{
                $t= $Grade->status = false;
            }
            $Grade->update(
                ['name' => ['en' => $request->Name_en, 'ar' => $request->Name_ar] ,
                    'notes' => $request->Notes,
                    'stage_id'=>$request->stage_id,
                    'status'=>$t,
                ]);
            toastr( $message = trans('messages.Update'),  $type = 'warning',  $title = ' ');
            return redirect()->route('gradesIndex');
        }
        catch
        (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }


    public function destroy(Request $request)
    {

        Grade::findOrFail($request->id)->delete();
        toastr( $message = trans('messages.Delete'),  $type = 'error',  $title = ' ');
        return redirect()->route('gradesIndex');

    }

    public function delete_all(Request $request)
    {
        $delete_all_id = explode(",", $request->delete_all_id);

        Grade::whereIn('id', $delete_all_id)->Delete();
        toastr( $message = trans('messages.Delete'),  $type = 'error',  $title = ' ');
        return redirect()->route('gradesIndex');
    }

    public function Filter_Grades(Request $request)
    {

        $Stages = Stage::all();
        $Search = Grade::select('*')->where('stage_id','=',$request->Stage_id)->get();

        return view('Admins.Content.Settings.gradesIndex',compact('Stages'))->withDetails($Search);


    }
}
