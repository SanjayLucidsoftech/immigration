<?php

namespace App\Http\Controllers\Admin\settings;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\SitePage;

class WebSettingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function general(){

    return view('admin.settings.general');
    }

    /*public function postGeneral(){

     echo "hi";
    }*/
    public function postGeneral(Request $request)
{  
	 $input = request()->validate([
                'title' => 'required',
                'alia' => 'required',
                'description' => 'required'
            ], [
                'title.required' => 'Title is required',
                'alia.required' => 'Alia is required',
                'description.required' => 'Description is required',
            ]);
	 if ($input->fails())
    {
    $messages = $validator->messages();
    return back()->with('errors', 'There are some errors..Please fix them and submit again');
	 }else{
	  $input = request()->all();
$user = SitePage::create($input);
//return redirect()->route('admin.settings.general');
return back()->with('success', 'Inserted created successfully.');
}
}
}
