<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Clients;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Input;

use DB;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client_data = Clients::get();
        return view('backend.clients.index' ,compact('client_data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.clients.create');
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
            'image'         =>  'image|mimes:jpeg,png,jpg,gif,svg|max:4196|required'
        ]);

        $image = $request->file('image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images/clients'), $new_name);
        $form_data = array(

            'image'            =>   $new_name
        );

        Clients::create($form_data);

        return redirect('clients')->with('success', 'Data Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $client_data = Clients::findOrFail($id);
        return view('backend.clients.show', compact('client_data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client_data = Clients::findOrFail($id);
        return view('backend.clients.edit', compact('client_data'));

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

                'image'         =>  'image|max:4196'
            ]);
            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/clients'), $image_name);
        }
        else
        {

        }

        $form_data = array(

            'image'         =>  $image_name
        );

        Clients::whereId($id)->update($form_data);
        return redirect('clients')->with('success', 'Data is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Clients::findOrFail($id);
        $data->delete();
        return redirect('clients')->with('success', 'Data is successfully deleted');
    }

    public  function view()
    {
        $client_data = Clients::get();

        return view('backend.clients.view',compact('client_data'));
    }
}
