<?php

namespace App\Http\Controllers\Admins\Settings;

use App\Http\Controllers\Controller;
use App\Models\Admins\Settings\Classroom;
use App\Models\Admins\Settings\Grade;
use App\Models\Admins\Settings\Stage;
use Illuminate\Http\Request;

class ClassroomController extends Controller
{
    public function index()
    {
        //
        $Grades = Grade::all();
        $Stages = Stage::all();
        $Classrooms = Classroom::all();
        return view('Admins.Content.Settings.classroomsIndex',compact('Grades','Stages','Classrooms'));

    }

    public function store(Request $request)
    {
        try {

            $Classroom = new Classroom();

            $Classroom->name = ['en' => $request->Name_en, 'ar' => $request->Name_ar];
            $Classroom->notes = $request->Notes;
            $Classroom->stage_id = $request->stage_id;
            $Classroom->grade_id = $request->grade_id;
            if (isset($request->Status)) {
                $Classroom->status = true;
            }else{
                $Classroom->status = false;
            }

            $Classroom->save();

            toastr( $message = trans('messages.success'),  $type = 'success',  $title = ' ');
            return redirect()->route('ClassroomsIndex');
        }

        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function update(Request $request)
    {

        try {

            $Classroom = Classroom::findOrFail($request->id);
            if (isset($request->Status)) {
                $t=  $Classroom->status = true;
            }else{
                $t= $Classroom->status = false;
            }
            $Classroom->update(
                ['name' => ['en' => $request->Name_en, 'ar' => $request->Name_ar] ,
                    'notes' => $request->Notes,
                    'stage_id'=>$request->stage_id,
                    'grade_id'=>$request->grade_id,
                    'status'=>$t,
                ]);
            toastr( $message = trans('messages.Update'),  $type = 'warning',  $title = ' ');
            return redirect()->route('ClassroomsIndex');
        }
        catch
        (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function getClasses($id){
        return Grade::where("stage_id", $id)->pluck("name", "id");
    }

    public function destroy(Request $request)
    {

        Classroom::findOrFail($request->id)->delete();
        toastr( $message = trans('messages.Delete'),  $type = 'error',  $title = ' ');
        return redirect()->route('ClassroomsIndex');

    }
}
