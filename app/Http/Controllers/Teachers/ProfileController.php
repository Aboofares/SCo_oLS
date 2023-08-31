<?php

namespace App\Http\Controllers\Teachers;

use App\Http\Controllers\Controller;
use App\Models\Teachers\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    //
    public function index()
    {

        return view('Teachers.profile');
    }

    public function ProfilePicEdit(Request $request){

        $ProfileId=$request->ProfileId;
        $r=$request->file('ProfilePic');

        // save file
        $file_extension=$request->file('ProfilePic')->getClientOriginalExtension();
        $file_name= $ProfileId.'.'.$file_extension;
        $path='Images/ProfileImages/Teachers';
        $request->file('ProfilePic')->move($path,$file_name);

        Teacher::where('id', $ProfileId)
            ->update([
                'profileImageURL' => $file_name,

            ]);
        $selectedimg=Teacher::find($ProfileId);
        if($ProfileId)
        {
            return response()->json(['status' =>true,'msg'=>"saved",'selectedimg'=>$selectedimg ]);
        }
        else{
            return response()->json(['status' =>false,'msg'=>"not saved"]);
        }

    }

    public function ProfilePicEditE(Request $request){


        $user=Teacher::find($request->ProfileId);
        $r=$request->file('ProfilePic');
        $ProfileId=$request->ProfileId;

        $person = json_decode($user);
//        Storage::delete(''.auth()->user()->profileImageURL);
        File::delete( 'Images/ProfileImages/Teachers/'.$person->profileImageURL);
        Teacher::where('id', $person->id)->update(['profileImageURL' => null ]);

// save file
        $file_extension=$request->file('ProfilePic')->getClientOriginalExtension();
        $file_name= $ProfileId.'.'.$file_extension;
        $path='Images/ProfileImages/Teachers';
        $request->file('ProfilePic')->move($path,$file_name);

        Teacher::where('id', $ProfileId)
            ->update([
                'profileImageURL' => $file_name,

            ]);
        $selectedimg=Teacher::find($ProfileId);
        if($ProfileId)
        {
            return response()->json(['status' =>true,'msg'=>"saved",'selectedimg'=>$selectedimg ]);
        }
        else{
            return response()->json(['status' =>false,'msg'=>"not saved"]);
        }



    }

    public function ProfilePassword(Request $request)
    {
        $user=Teacher::find($request->id);

        $passNew=$request->passNew;

        $person = json_decode($user);

        Teacher::where('id', $request->id)
            ->update([
                'password' => Hash::make($passNew),

            ]);

        if($user)
        {
            return response()->json(['status' =>true,'msg'=>"Changed"]);
        }
        else{
            return response()->json(['status' =>false,'msg'=>"not Selected"]);
        }
    }
}
