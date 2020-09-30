<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use Illuminate\Http\Request;
use App\Models\News;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Input;


use DB;
class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news_data = News::get();
        return view('backend.news.index' ,compact('news_data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'    =>  'required',
            'description'     =>  'required',
            'image'         =>  'image|mimes:jpeg,png,jpg,gif,svg|max:4196|required'
        ]);

        $image = $request->file('image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images/news'), $new_name);
        $form_data = array(
            'title'       =>   $request->title,
            'description'        =>   $request->description,
            'image'            =>   $new_name
        );

        News::create($form_data);

        return redirect('news')->with('success', 'Data Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $news_data = News::findOrFail($id);
        return view('backend.news.show', compact('news_data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news_data = News::findOrFail($id);
        return view('backend.news.edit', compact('news_data'));
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
        $image_name = $request->hidden_image;
        $image = $request->file('image');
        if($image != '')
        {
            $request->validate([
                'title'            =>  'required',
                'description'      =>  'required',
                'image'            =>  'image|max:4196'
            ]);
            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/news'), $image_name);
        }
        else
        {
            $request->validate([
                'title'          =>  'required',
                'description'     =>  'required'
            ]);
        }

        $form_data = array(
            'title'    =>  $request->title,
            'description'     =>  $request->description,
            'image'         =>  $image_name
        );

        News::whereId($id)->update($form_data);
        return redirect('news')->with('success', 'Data is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = News::findOrFail($id);
        $data->delete();
        return redirect('news')->with('success', 'Data is successfully deleted');
    }

    public  function view()
    {
        $news_data = News::get();

        return view('backend.news.view',compact('news_data'));
    }
}
