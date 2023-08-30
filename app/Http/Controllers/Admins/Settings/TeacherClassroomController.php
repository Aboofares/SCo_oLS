<?php

namespace App\Http\Controllers\Admins\Settings;

use App\Http\Controllers\Controller;
use App\Models\Admins\Settings\Classroom;
use App\Models\Teachers\Teacher;
use Illuminate\Http\Request;

class TeacherClassroomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $Classrooms=Classroom::all();
        $teachers=Teacher::all();

        return view('Admins.content.Teachers.Classroom.teachersClassroomsIndex',compact('teachers','Classrooms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $Classrooms=Classroom::findOrFail($request->id);
        $Classrooms->teachers()->attach($request->teacher_id,
            [
                'notes' => $request->currentyear,
                'status' => true,
            ]);


        toastr( $message = trans('messages.success'),  $type = 'success',  $title = ' ');
        return redirect()->route('TeachersClassroom');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //


        $Classrooms=Classroom::findOrFail($request->id);

        // update pivot tABLE
        if (isset($request->teacher_id)) {
            $Classrooms->teachers()->sync($request->teacher_id,
                [
                    'notes' => $request->currentyear,
                    'status' => true,
                ]);
        } else {
            $Classrooms->teachers()->sync(array(),
                [
                    'notes' => $request->currentyear,
                    'status' => true,
                ]);
        }
        toastr( $message = trans('messages.success'),  $type = 'success',  $title = ' ');
        return redirect()->route('TeachersClassroom');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
