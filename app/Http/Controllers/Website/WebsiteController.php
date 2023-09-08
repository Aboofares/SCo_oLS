<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Admins\Marketing\WebsiteSetting;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    //
    public function index(){

        $collection = WebsiteSetting::all();
        $setting['setting'] = $collection->flatMap(function ($collection) {
            return [$collection->key => $collection->value];
        });
        return view('WebSite.Index', $setting);
    }
}
