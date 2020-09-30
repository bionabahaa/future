<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Questions;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Input;


use DB;

class FAQController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faq_data = Questions::get();
        return view('backend.faq.index' ,compact('faq_data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.faq.create');

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

        ]);

        $form_data = array(
            'title'       =>   $request->title,
            'description'        =>   $request->description,

        );

        Questions::create($form_data);

        return redirect('faq')->with('success', 'Data Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $faq_data = Questions::findOrFail($id);
        return view('backend.faq.show', compact('faq_data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $faq_data = Questions::findOrFail($id);
        return view('backend.faq.edit', compact('faq_data'));
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

            $request->validate([
                'title'    =>  'required',
                'description'     =>  'required'
            ]);

        $form_data = array(
            'title'    =>  $request->title,
            'description'     =>  $request->description,

        );

        Questions::whereId($id)->update($form_data);
        return redirect('faq')->with('success', 'Data is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Questions::findOrFail($id);
        $data->delete();
        return redirect('faq')->with('success', 'Data is successfully deleted');
    }
    public  function view()
    {
        $faq_data = Questions::get();

        return view('backend.faq.view',compact('faq_data'));
    }
}
