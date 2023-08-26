<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Models\Admins\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProfileController extends Controller
{
    //
    public function index()
    {

        return view('Admins.profile');
    }

    public function ProfilePicEdit(Request $request){

        $ProfileId=$request->ProfileId;
        $r=$request->file('ProfilePic');

        // save file
        $file_extension=$request->file('ProfilePic')->getClientOriginalExtension();
        $file_name= $ProfileId.'.'.$file_extension;
        $path='Images/ProfileImages/Admins';
        $request->file('ProfilePic')->move($path,$file_name);

                Admin::where('id', $ProfileId)
            ->update([
                'profileImageURL' => $file_name,

            ]);
                $selectedimg=Admin::find($ProfileId);
        if($ProfileId)
        {
            return response()->json(['status' =>true,'msg'=>"saved",'selectedimg'=>$selectedimg ]);
        }
        else{
            return response()->json(['status' =>false,'msg'=>"not saved"]);
        }

    }

    public function ProfilePicEditE(Request $request){
        $user=Admin::find($request->ProfileId);
        $r=$request->file('ProfilePic');
        $ProfileId=$request->ProfileId;

        $person = json_decode($user);


        Admin::where('id', $person->id)->update(['profileImageURL' => null ]);

        $filename = 'Images/ProfileImages/Admins'.$person->pimageURL;
        File::delete($filename);


        if($user)
        {
            return response()->json(['status' =>true,'msg'=>"Selected","user"=>$filename]);
        }
        else{
            return response()->json(['status' =>false,'msg'=>"not Selected"]);
        }



//        $ProfileId=$request->ProfileId;
//        $r=$request->file('ProfilePic');
//
//        // save file
//        $file_extension=$request->file('ProfilePic')->getClientOriginalExtension();
//        $file_name= $ProfileId.'.'.$file_extension;
//        $path='Images/ProfileImages/Admins';
//        $request->file('ProfilePic')->move($path,$file_name);
//
//        Admin::where('id', $ProfileId)
//            ->update([
//                'profileImageURL' => $file_name,
//
//            ]);
//        $selectedimg=Admin::find($ProfileId);
//        if($ProfileId)
//        {
//            return response()->json(['status' =>true,'msg'=>"saved",'selectedimg'=>$selectedimg ]);
//        }
//        else{
//            return response()->json(['status' =>false,'msg'=>"not saved"]);
//        }

    }
}
