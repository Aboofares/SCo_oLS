<?php

namespace App\Http\Controllers\Admins\Marketing;

use App\Http\Controllers\Controller;
use App\Models\Admins\Marketing\WebsiteSetting;
use Illuminate\Http\Request;

class WebsiteSettingController extends Controller
{
    //

    public function index(){

        $collection = WebsiteSetting::all();
        $setting['setting'] = $collection->flatMap(function ($collection) {
            return [$collection->key => $collection->value];
        });
        return view('Marketing.index', $setting);
    }

    public function update(Request $request){

//return $request;

        try{

            $info = $request->except('_token', '_method', 'logo');
            foreach ($info as $key=> $value){
                WebsiteSetting::where('key', $key)->update(['value' => $value]);
            }
            toastr( $message = trans('messages.Update'),  $type = 'warning',  $title = ' ');
            return back();
        }
        catch (\Exception $e){

            return redirect()->back()->with(['error' => $e->getMessage()]);
        }

    }


}
