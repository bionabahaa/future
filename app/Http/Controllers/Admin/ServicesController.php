<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Services;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Input;
use DB;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Services_data = Services::get();
        return view('backend.services.index' ,compact('Services_data'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view('backend.services.create');
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
            'image'         =>  'image|mimes:jpeg,png,jpg,gif,svg|max:4196|required',
        ]);

        $image = $request->file('image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images/services'), $new_name);
        $form_data = array(
            'title'       =>   $request->title,
            'description'        =>   $request->description,
            'image'            =>   $new_name
        );

        Services::create($form_data);

        return redirect('services')->with('success', 'Data Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Services_data = Services::findOrFail($id);
        return view('backend.services.show', compact('Services_data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Services_data = Services::findOrFail($id);
        return view('backend.services.edit', compact('Services_data'));

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
                'title'    =>  'required',
                'description'     =>  'required',
                'image'         =>  'image|max:4196'
            ]);
            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/services'), $image_name);
        }
        else
        {
            $request->validate([
                'title'           =>  'required',
                'description'     =>  'required'
            ]);
        }

        $form_data = array(
            'title'    =>  $request->title,
            'description'     =>  $request->description,
            'image'         =>  $image_name
        );

        Services::whereId($id)->update($form_data);
        return redirect('services')->with('success', 'Data is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Services::findOrFail($id);
        $data->delete();
        return redirect('services')->with('success', 'Data is successfully deleted');
    }

    public function viewservicedetails($id)
    {  
        $data['currentservice'] = Services::findOrFail($id);
        $data['allservice']=Services::get();
        return view('backend.services.servicedetails', compact('data'));

    // //    $services = Services::findOrFail($id);
    //    return view('backend.services.servicedetails', compact('data'));
    }

    public  function view()
    {
        $Services_data = Services::get();

        return view('backend.services.view',compact('Services_data'));
    }
}
