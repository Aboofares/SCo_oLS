<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Repository\Admins\AdminRepositoryInterface;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    protected $Admin;
    public function __construct(AdminRepositoryInterface $Admin)
    {
        $this->Admin = $Admin;
    }
    public function index()
    {
        //
        $Admins = $this->Admin->getAllAdmins();
        return view('Admins.Content.employees.employeeIndex',compact('Admins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $departments = $this->Admin->GetDepartment();
        $genders = $this->Admin->GetGender();
        $Nationalities = $this->Admin->GetNationality();
        $religions = $this->Admin->GetReligion();
        return view('Admins.Content.employees.employeeCreate',compact('departments','genders'
            ,'Nationalities','religions'));
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
        return $this->Admin->SaveAdmin($request);
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
        $SelectedAdmin= $this->Admin->EditAdmin($id);
        $departments = $this->Admin->GetDepartment();
        $genders = $this->Admin->GetGender();
        $Nationalities = $this->Admin->GetNationality();
        $religions = $this->Admin->GetReligion();
        return view('Admins.Content.employees.employeeEdit',compact('departments','genders'
            ,'Nationalities','religions','SelectedAdmin'));
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

        return $this->Admin->UpdateAdmin($request);

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
        return $this->Admin->DeleteAdmin($request);
    }
}
