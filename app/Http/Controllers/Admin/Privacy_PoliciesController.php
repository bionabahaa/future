<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SoicalMedia;



class Privacy_PoliciesController extends Controller
{
    
    public function index()
    {   
        $SoicalMedia_data = SoicalMedia::findOrfail(1);
        return view('backend.privacypolicies.index' ,compact('SoicalMedia_data'));

    }
    public function update(Request $request){

        $facebook       = $request->facebook;
        $twitter        = $request->twitter;
        $massenger      = $request->massenger;
        $whatsup        = $request->whatsup;
        $address        = $request->address;
        $phone_number   = $request->phone_number;
        $gmail          = $request->gmail;
        
        $SoicalMedia = SoicalMedia::findOrfail(1);
        $SoicalMedia->massenger = $massenger;
        $SoicalMedia->whatsup = $whatsup;
        $SoicalMedia->address = $address;
        $SoicalMedia->phone_number = $phone_number;
        $SoicalMedia->gmail = $gmail;
        $SoicalMedia->facebook = $facebook;
        $SoicalMedia->twitter = $twitter;
        $SoicalMedia->save();

        return back();
    }
   
}
