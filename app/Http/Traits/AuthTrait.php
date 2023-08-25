<?php


namespace App\Http\Traits;
use App\Providers\RouteServiceProvider;

trait AuthTrait
{
    public function chekGuard($request){

        if($request->type == 'student'){
            $guardName= 'student';
        }
        elseif ($request->type == 'family'){
            $guardName= 'family';
        }
        elseif ($request->type == 'teacher'){
            $guardName= 'teacher';
        }
        elseif ($request->type == 'admin'){
            $guardName= 'admin';
        }
        else{
            $guardName= 'web';
        }
        return $guardName;
    }

    public function redirect($request){

        if($request->type == 'student'){
            return redirect()->intended(RouteServiceProvider::STUDENT);
        }
        elseif ($request->type == 'family'){
            return redirect()->intended(RouteServiceProvider::FAMILY);
        }
        elseif ($request->type == 'teacher'){
            return redirect()->intended(RouteServiceProvider::TEACHER);
        }
        elseif ($request->type == 'admin'){
            return redirect()->intended(RouteServiceProvider::ADMIN);
        }
        else{
            return redirect()->intended(RouteServiceProvider::HOME);
        }
    }
}
