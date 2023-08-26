<?php

namespace App\Http\Controllers\Admins\Settings;

use App\Http\Controllers\Controller;
use App\Models\Admins\Settings\Stage;
use Illuminate\Http\Request;

class StageController extends Controller
{
    public function index()
    {
        $Stages = Stage::all();
        return view('Admins.Content.Settings.stagesIndex',compact('Stages'));
    }

    public function store(Request $request)
    {
        try {
//        $validated = $request->validated();
            $Stage = new Stage();

            $Stage->name = ['en' => $request->Name_en, 'ar' => $request->Name_ar];
            $Stage->notes = $request->Notes;

            if (isset($request->Status)) {
                $Stage->status = true;
            }else{
                $Stage->status = false;
            }

            $Stage->save();

            toastr( $message = trans('messages.success'),  $type = 'success',  $title = ' ');
            return redirect()->route('stagesIndex');
        }

        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function update(Request $request)
    {
        try {
//            $validated = $request->validated();
            $Stage = Stage::findOrFail($request->id);
            if (isset($request->Status)) {
                $t=  $Stage->status = true;
            }else{
                $t= $Stage->status = false;
            }
            $Stage->update(
                ['name' => ['en' => $request->Name_en, 'ar' => $request->Name_ar] ,
                    'notes' => $request->Notes,
                    'status'=>$t,
                ]);
            toastr( $message = trans('messages.Update'),  $type = 'warning',  $title = ' ');
            return redirect()->route('stagesIndex');
        }
        catch
        (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function destroy(Request $request)
    {

            Stage::findOrFail($request->id)->delete();
            toastr( $message = trans('messages.Delete'),  $type = 'error',  $title = ' ');
            return redirect()->route('stagesIndex');
//        $MyGrade_id = Grade::where('stage_id',$request->id)->pluck('stage_id');
//
//
//
//        if($MyGrade_id->count() == 0){
//
//            Stage::findOrFail($request->id)->delete();
//            toastr( $message = trans('messages.Delete'),  $type = 'error',  $title = ' ');
//            return redirect()->route('stages.index');
//        }
//
//        else{
//
//            toastr( $message = trans('messages.Error'),  $type = 'warning',  $title = ' ');
//            return redirect()->route('stages.index');
//
//        }


    }
}
