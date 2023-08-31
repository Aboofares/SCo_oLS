<?php

namespace App\Http\Controllers\Admins\Settings;

use App\Http\Controllers\Controller;
use App\Models\Admins\Settings\Classroom;
use App\Models\Students\Student;
use Illuminate\Http\Request;

class StudentClassroomController extends Controller
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
        $Students=Student::all();

        return view('Admins.content.Students.Classroom.studentsClassroomsIndex',compact('Students','Classrooms'));
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
        $Classrooms->students()->attach($request->student_id,
            [
                'AcademicYear' => $request->currentyear,
            ]);


        toastr( $message = trans('messages.success'),  $type = 'success',  $title = ' ');
        return redirect()->route('StudentsClassroom');
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
        if (isset($request->student_id)) {
            $Classrooms->students()->sync($request->student_id,
                [
                    'AcademicYear' => $request->currentyear,

                ]);
        } else {
            $Classrooms->students()->sync(array(),
                [
                    'AcademicYear' => $request->currentyear,

                ]);
        }
        toastr( $message = trans('messages.success'),  $type = 'success',  $title = ' ');
        return redirect()->route('StudentsClassroom');
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
