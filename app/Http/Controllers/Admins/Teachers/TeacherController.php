<?php

namespace App\Http\Controllers\Admins\Teachers;

use App\Http\Controllers\Controller;
use App\Models\Settings\Gender;
use App\Models\Settings\Specialization;
use App\Repository\Teachers\TeacherRepositoryInterface;
use Illuminate\Http\Request;

class TeacherController extends Controller
{

    protected $Teacher;
    public function __construct(TeacherRepositoryInterface $Teacher)
    {
        $this->Teacher = $Teacher;
    }



    public function index()
    {
        //
        $teachers = $this->Teacher->getAllTeachers();
        return view('Admins.Content.Teachers.teachersIndex',compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $teachers=$this->Teacher->getAllTeachers();
        $specializations = $this->Teacher->GetSpecialization();
        $genders = $this->Teacher->GetGender();
        $Nationalities = $this->Teacher->GetNationality();
        $religions = $this->Teacher->GetReligion();
        return view('Admins.Content.Teachers.teacherCreate',compact('specializations','genders'
            ,'Nationalities','religions','teachers'));
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
        return $this->Teacher->SaveTeacher($request);
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
        $SelectedTeacher= $this->Teacher->EditTeachers($id);
        $specializations = $this->Teacher->GetSpecialization();
        $genders = $this->Teacher->GetGender();
        $Nationalities = $this->Teacher->GetNationality();
        $religions = $this->Teacher->GetReligion();
        return view('Admins.Content.Teachers.teacherEdit',compact('specializations','genders'
            ,'Nationalities','religions','SelectedTeacher'));

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
        return $this->Teacher->UpdateTeacher($request);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
      return $this->Teacher->DeleteTeacher($request);
    }
}
