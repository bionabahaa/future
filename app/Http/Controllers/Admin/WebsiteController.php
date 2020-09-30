<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutUs;
use App\Models\Slider;
use App\Models\Questions;
use App\Models\News;
use App\Models\Services;
use App\Models\Blog;
use App\Models\Clients;
use App\Models\TestSeo;

use App\Models\Team;
use App\Models\ContactUs;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Input;


use DB;
class WebsiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    
    {    $value = '';
        if (isset($_COOKIE["lang"])){
            $value = $_COOKIE["lang"];
        }else{
            setcookie("lang", "EN");
        }
        if (!empty($value)){
            if ($value == "EN"){
                $data['Header'] =   'layouts.header';
                $data['EN'] = 1;
            }else{
                $data['Header'] =   'layouts.header_AR';
                $data['EN'] = 0;
            }
        }else{
            $data['Header'] =   'layouts.header';
            $data['EN'] = 1;
        }



        $data['Slider']    =   Slider::orderBy('id', 'desc')->get();
       
        $data['AboutUs']  = AboutUs::orderBy('id', 'asc')->take(2)->get();
        $data['Services']= Services::orderBy('id', 'asc')->get();
        $data['Blog']=     Blog::get();
        $data['News'] =   News::orderBy('id', 'desc')->take(4)->get();
        $data['Clients']= Clients::orderBy('id', 'desc')->take(5)->get();
        $data['ContactUs'] =ContactUs::get();

        $data['Team']    = Team::get();
//        $data['Projects'] =Projects::orderBy('id', 'desc')->take(6)->get();

        return view('/website',compact('data'));
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function ChangeLang(){
        $value = '';
        if (isset($_COOKIE["lang"])){
            $value = $_COOKIE["lang"];
        }else{
            setcookie("lang", "EN");
        }

        if (!empty($value)){
            if ($value == "EN"){
                setcookie("lang", "AR");
            }else{
                setcookie("lang", "EN");
            }
        }
    }
}
