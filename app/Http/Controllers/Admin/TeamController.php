<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Team;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Input;

use DB;


class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $team_data = Team::get();
        return view('backend.team.index' ,compact('team_data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.team.create');
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
        $image->move(public_path('images/team'), $new_name);
        $form_data = array(
            'title'       =>   $request->title,
            'description'        =>   $request->description,
            'image'            =>   $new_name
        );

        Team::create($form_data);

        return redirect('team')->with('success', 'Data Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $team_data = Team::findOrFail($id);
        return view('backend.team.show', compact('team_data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $team_data = Team::findOrFail($id);
        return view('backend.team.edit', compact('team_data'));

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
            $image->move(public_path('images/team'), $image_name);
        }
        else
        {
            $request->validate([
                'title'    =>  'required',
                'description'     =>  'required'
            ]);
        }

        $form_data = array(
            'title'    =>  $request->title,
            'description'     =>  $request->description,
            'image'         =>  $image_name
        );

        Team::whereId($id)->update($form_data);
        return redirect('team')->with('success', 'Data is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Team::findOrFail($id);
        $data->delete();
        return redirect('team')->with('success', 'Data is successfully deleted');
    }

    public  function view()
    {
        $team_data = Team::get();

        return view('backend.team.view',compact('team_data'));
    }
}
