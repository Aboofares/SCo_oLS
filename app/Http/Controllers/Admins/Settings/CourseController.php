<?php

namespace App\Http\Controllers\Admins\Settings;

use App\Http\Controllers\Controller;
use App\Models\Admins\Settings\Course;
use App\Models\Settings\Specialization;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $courses=Course::all();
        $specializations=Specialization::all();
        return view('Admins.Content.Settings.coursesIndex',compact('specializations','courses'));
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

        try {
            $Course = new Course();
            $Course->name = ['en' => $request->Name_en, 'ar' => $request->Name_ar];

            $Course->specialization_id = $request->Specialization_id;
            $Course->notes = $request->Note;

            if (isset($request->Status)) {
                $Course->status = true;
            }else{
                $Course->status = false;
            }

            $Course->save();
            toastr( $message = trans('messages.success'),  $type = 'success',  $title = ' ');
            return redirect()->route('coursesIndex');
        }
        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
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
        try {

            $Course = Course::findOrFail($request->id);
            if (isset($request->Status)) {
                $t=  $Course->status = true;
            }else{
                $t= $Course->status = false;
            }
            $Course->update(
                ['name' => ['en' => $request->Name_en, 'ar' => $request->Name_ar] ,
                    'notes' => $request->Note,
                    'status'=>$t,
                    'specialization_id'=>$request->Specialization_id,
                ]);



            toastr( $message = trans('messages.Update'),  $type = 'warning',  $title = ' ');
            return redirect()->route('coursesIndex');
        }
        catch
        (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
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


        Course::findOrFail($request->id)->delete();
        toastr( $message = trans('messages.Delete'),  $type = 'error',  $title = ' ');
        return redirect()->route('coursesIndex');
    }
}
