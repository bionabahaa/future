<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\TestSeo;
use Illuminate\Http\Request;

class SeoController extends Controller
{

    public function index()
    {
        $seo_data = TestSeo::findOrfail(1);
        return view('backend.seo.index' ,compact('seo_data'));
    }

    public function update(Request $request){

        $title = $request->title;
        $descriptions = $request->descriptions;
        $footer = $request->footer;
        $keywords = $request->keywords;
        $subject = $request->subject;
        $seo = TestSeo::findOrfail(1);
        $seo->title = $title;
        $seo->descriptions = $descriptions;
        $seo->footer = $footer;
        $seo->keywords = $keywords;
        $seo->subject = $subject;

        if($request->hasFile('logo')){
            $imageName = time().'.'.request()->logo->getClientOriginalExtension();
            request()->logo->move(public_path('seo'), $imageName);
            $logo = $imageName;
            $seo->logo = $logo;

        }

        $seo->save();
        return back();
    }
}
