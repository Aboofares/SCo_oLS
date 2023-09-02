<?php

namespace App\Http\Controllers\Admins\Settings;

use App\Http\Controllers\Controller;
use App\Models\Settings\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $roles = Role::all(); // use pagination and  add custom pagination on index.blade
        return view('Admins.Content.Settings.Main.RolesIndex', compact('roles'));
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
        try {
            $role = $this->process(new Role, $request);
            toastr( $message = trans('messages.success'),  $type = 'success',  $title = ' ');
            return redirect()->route('rolesIndex');
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


        try {
            $role = Role::findOrFail($request->id);
            $role = $this->process($role, $request);
            toastr( $message = trans('messages.success'),  $type = 'warning',  $title = ' ');
            return redirect()->route('rolesIndex');
        }

        catch (\Exception $e){
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
        Role::findOrFail($request->id)->delete();
        toastr( $message = trans('messages.Delete'),  $type = 'error',  $title = ' ');
        return redirect()->route('rolesIndex');
    }


    protected function process(Role $role, Request $r)
    {
        $role->name = ['en' => $r->Name_en, 'ar' => $r->Name_ar];

        $role->Role_Description=$r->Notes;
        $role->permissions = json_encode($r->permissions);
        $role->save();
        return $role;
    }
}

