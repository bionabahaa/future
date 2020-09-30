<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ChooseCampany;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Input;


use DB;
class ChooseCompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $choose_data = ChooseCampany::get();
        return view('backend.choosecompany.index' ,compact('choose_data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.choosecompany.create');
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
        ]);

        $form_data = array(
            'title'       =>   $request->title,
        );

        ChooseCampany::create($form_data);

        return redirect('choosecompany')->with('success', 'Data Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $choose_data = ChooseCampany::findOrFail($id);
        return view('backend.choosecompany.show', compact('choose_data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $choose_data = ChooseCampany::findOrFail($id);
        return view('backend.choosecompany.edit', compact('choose_data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    { $request->validate([
        'title'    =>  'required',

    ]);

        $form_data = array(
            'title'    =>  $request->title,


        );

        ChooseCampany::whereId($id)->update($form_data);
        return redirect('choosecompany')->with('success', 'Data is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = ChooseCampany::findOrFail($id);
        $data->delete();
        return redirect('choosecompany')->with('success', 'Data is successfully deleted');
    }

    public  function view()
    {
        $choose_data = ChooseCampany::get();

        return view('backend.choosecompany.view',compact('choose_data'));
    }
}
