<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SoicalMedia;

class TestingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  
        // return view('backend.soical_media.index');
        $soical_media_data = SoicalMedia::findOrfail(1);

        return view('backend.soical_media.index',compact('soical_media_data'));
    }

    
    public function update(Request $request){

        $title = $request->title;
        $descriptions = $request->descriptions;
        $footer = $request->footer;
        $keywords = $request->keywords;
        $subject = $request->subject;
        $seo = SoicalMedia::findOrfail(1);
        $seo->title = $title;
        $seo->descriptions = $descriptions;
        $seo->footer = $footer;
        $seo->keywords = $keywords;
        $seo->subject = $subject;

        if($request->hasFile('logo')){
            $imageName = time().'.'.request()->logo->getClientOriginalExtension();
            request()->logo->move(public_path('soical_media'), $imageName);
            $logo = $imageName;
            $seo->logo = $logo;

        }

        $seo->save();
        return back();
    }
}
