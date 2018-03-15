<?php

namespace App\Http\Controllers\Admin\settings;

use App\Http\Controllers\Controller;
use App\Models\SitePage;
use App\Models\SiteMenue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Healpers\General;

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
        
    }

    public function sitePages(){

        return view('admin.settings.sitepage');
    }
    public function addPage(){

        return view('admin.settings.addSitepage');
    }
     public function postAddPage(Request $request)
    {
        $v = Validator::make($request->all(), [
            'title'       => 'required',
            'description' => 'required',
        ]);

        if ($v->fails()) {
            return back()->with('error', ' You have some form errors. Please check below');
        } else {
            $input = request()->all();
            $input['alia']=General::clean($input['title']);
            //print_r($input); die;
            $user  = SitePage::create($input);
            //return back()->with('success', 'Inserted successfully.');
        }
        return redirect()->route('admin.settings.sitepages')->with('success', 'Inserted successfully.');
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
    
        $v = Validator::make($request->all(), [
            'title'       => 'required',
            'description' => 'required',
        ]);
        
        if ($v->fails()) {
            return back()->with('error', ' You have some form errors. Please check below');
        } else {
            $input = $request->all();
            $input['alia']=General::clean($input['title']);
            //print_r($input);die;
            $task->fill($input)->save();
        }
        
        //return back()->with('success', 'Updated successfully.');
        //$editpage = SitePage::findOrFail($id);
        //return view('admin.settings.editSitepage', compact('editpage'));
        return redirect()->route('admin.settings.sitepages')->with('success', 'Updated successfully.');
    }
    public function deletePage($id)
    {
    $task = SitePage::findOrFail($id);
    $task->delete();
    return back()->with('success', 'Deleted successfully.');
    }

    private function getSitePagesList(){
        $sitepages=SitePage::where('status', '1')
                            ->select('title','alia')
                            ->orderBy('title', 'asc')
                            ->get();
        return $sitepages;
    }
    private function getSiteMenuesList(){
        return SiteMenue::where('status', '1')
                           ->where('menue_location', 'header')
                           ->select('id','menue_type','menue_name','parent','link')
                           ->orderBy('order', 'ASC')
                           ->orderBy('parent', 'ASC')
                           ->get();
    }

    public function siteMenues(){
        
        
        // $sitepages=SitePage::where('status', '1')
        // ->pluck('title','alia')
        // ->all();
        //  

        $sitepages=$this->getSitePagesList();

        $sitemenues=$this->getSiteMenuesList();
                            //var_dump($sitemenues);die;
                          // echo ->toSql();        
                           //->get()->toArray();
        //print_r($sitepages);die;
        $build_menu=$this->build_menu($sitemenues);
        return view('admin.settings.siteMenues',compact('sitepages','sitemenues','build_menu'));
    }

    public function addMenues(Request $request){
        $v = Validator::make($request->all(), [
            'menue_name'=> 'required',
            'menue_type' => 'required',
        ]);
            
        if ($v->fails()) {
            return back()->with('error', ' You have some form errors. Please check below');
        } else {
            $input = request()->all();
            $input['menue_location']='header';
            
            if($input['menue_type']=='page')
                $input['link']=$input['pages'];
            elseif($input['menue_type']=='link' and $input['link']!=""){
                $input['link']=$input['link'];
            }else{
                $input['link']="#";
            }
            unset($input['pages']);
            //print_r($input);
            //die;
            //print_r($input); die;
            $user  = SiteMenue::create($input);
            //return back()->with('success', 'Inserted successfully.');
        }
        return redirect()->route('admin.settings.sitemenues')->with('success', 'Inserted successfully.');
    }


    public function editMenu($id){
        $site_menue_data = SiteMenue::findOrFail($id);
        //print_r($site_menue_data->id);die;
        $sitepages=$this->getSitePagesList();
        $sitemenues=$this->getSiteMenuesList();
         return view('admin.settings.editMenu', compact('sitepages','sitemenues','site_menue_data'));
    }

    public function updateMenu(Request $request,$id){
        // $editpage = SitePage::findOrFail($id);
        $site_menue_data = SiteMenue::findOrFail($id);

        $v = Validator::make($request->all(), [
            'menue_name'=> 'required',
            'menue_type' => 'required',
        ]);

        if ($v->fails()) {
            return back()->with('error', ' You have some form errors. Please check below');
        } else {
            $input = request()->all();
            $input['menue_location']='header';
            
            if($input['menue_type']=='page')
                $input['link']=$input['pages'];
            elseif($input['menue_type']=='link' and $input['link']!=""){
                $input['link']=$input['link'];
            }else{
                $input['link']="#";
            }
            unset($input['pages']);
            //print_r($input);
            //die;
            //print_r($input); die;
            $site_menue_data->fill($input)->save();
            //return back()->with('success', 'Inserted successfully.');
        }
        return redirect()->route('admin.settings.sitemenues')->with('success', 'Menu updated successfully.');

     }


     public function deleteMenu($id)
    {
        $site_menue_data = SiteMenue::findOrFail($id);
        $site_menue_data->delete();
        return redirect()->route('admin.settings.sitemenues')->with('success', 'Menu deleted successfully.');
    }


     private function has_children($rows,$id) {
        foreach ($rows as $row) {
          if ($row['parent'] == $id)
            return true;
        }
        return false;
      }
      public function  build_menu($rows,$parent=0)
      {  
        $result = '<ol class="dd-list">';
        foreach ($rows as $row)
        {
          if ($row['parent'] == $parent){
            $result.= "<li class='dd-item dd3-item' data-id='{$row['id']}'><div class='dd-handle dd3-handle'></div><div class='dd3-content'>
            <a href='javascript:void(0);' onClick=edit_menu({$row['id']})>{$row['menue_name']}</a>
            <a href='".route('admin.settings.deleteMenu', ['id' => $row['id']])."' class='btn btn-xs grey-cascade fr'>
            <i class='fa fa-times'></i>
            </a>
            </div>";
            if ($this->has_children($rows,$row['id']))
              $result.= $this->build_menu($rows,$row['id']);
              $result.= "</li>";
          }
        }
        $result.= '</ol>';
        return $result;
      }
}
