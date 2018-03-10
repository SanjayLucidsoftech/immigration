<?php

namespace App\Http\Controllers\Admin\settings;

use App\Http\Controllers\Controller;
use App\Models\SitePage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class WebSettingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function general()
    {

        return view('admin.settings.general');
    }

    /*public function postGeneral(){

    echo "hi";
    }*/
    public function postGeneral(Request $request)
    {
        $v = Validator::make($request->all(), [
            'title'       => 'required',
            'alia'        => 'required',
            'description' => 'required',
        ]);

        if ($v->fails()) {
            return back()->with('error', ' You have some form errors. Please check below');
        } else {
            $input = request()->all();
            $user  = SitePage::create($input);
//return redirect()->route('admin.settings.general');
            return back()->with('success', 'Inserted successfully.');
        }
    }

    public function sitepages(){

        return view('admin.settings.sitepage');
    }
    public function addPage(){

        return view('admin.settings.addSitepage');
    }
     public function postAddPage(Request $request)
    {
        $v = Validator::make($request->all(), [
            'title'       => 'required',
            'alia'        => 'required',
            'description' => 'required',
        ]);

        if ($v->fails()) {
            return back()->with('error', ' You have some form errors. Please check below');
        } else {
            $input = request()->all();
            $user  = SitePage::create($input);
//return redirect()->route('admin.settings.general');
            return back()->with('success', 'Inserted successfully.');
        }
    }
     public function editPage($id)
    {
        //echo $id;
        $editpage = SitePage::findOrFail($id);
        return view('admin.settings.editSitepage', compact('editpage'));
    }

     public function updatePage(Request $request, $id)
    {
        $task = SitePage::findOrFail($id);

    $this->validate($request, [
        'title' => 'required',
        'alia' => 'required',
        'description' => 'required',
    ]);

    $input = $request->all();

    $task->fill($input)->save();

   return back()->with('success', 'Updated successfully.');
        //$editpage = SitePage::findOrFail($id);
        //return view('admin.settings.editSitepage', compact('editpage'));
    }
    public function deletePage($id)
    {
    $task = SitePage::findOrFail($id);

    $task->delete();

    return back()->with('success', 'Deleted successfully.');
    }

}
