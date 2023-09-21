<?php

namespace App\Http\Controllers\Admission;

use App\Http\Controllers\Controller;
use App\Models\Students\AdmissionStudents;
use Illuminate\Http\Request;

class AdmissionController extends Controller
{
    //
    public function index(){

        $AdmissionAll=AdmissionStudents::all();
        return view('Admission.Index',compact('AdmissionAll'));

    }
}

