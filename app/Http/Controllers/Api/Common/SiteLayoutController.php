<?php

namespace App\Http\Controllers\Api\Common;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\SitePage;
use App\Models\SiteMenue;

class SiteLayoutController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function menu(){
        //$sitepages=$this->getSitePagesList();
    //return  $sitemenues=SiteMenue::getSiteMenuesList();
       // print_r($sitemenues);


       
    //    $surveys = SiteMenue::with('childrenRecursive')->where('parent',0)->geet();
    //     print_r($surveys);
    //     die;
       $sitemenues = SiteMenue::all();
       $tree = [];
        foreach($sitemenues as $item) {
            $i=0; 
            $pid  = $item->parent;
            $id   = $item->id;
            $name = $item->menue_name;
            
            $menue_type = $item->menue_type;
            if($item->menue_type=='link'){
                $link = $item->link;
            }else{
                $link = "/page/".$item->link;
            }


            // Create or add child information to the parent node
            if (isset($tree[$pid]) && $pid!=0  ){
                // a node for the parent exists
                // add another child id to this parent
                //$tree[$pid]["children"][] = $id;
                $tree[$pid]["children"][$id]['id'] = $id;
                $tree[$pid]["children"][$id]['name'] = $name;
                $tree[$pid]["children"][$id]['parent'] = $pid;
                $tree[$pid]["children"][$id]['link'] = $link;
                $tree[$pid]["children"][$id]['menue_type'] = $menue_type;

            }
            elseif($pid!=0 ){
                // create the first child to this parent
                $tree[$pid] = array("children"=>array($id));

            // Create or add name information for current node
            }
            if (isset($tree[$id])){
                // a node for the id exists:
                // set the name of current node
                $tree[$id]["id"] = $id;
                $tree[$id]["name"] = $name;
                $tree[$id]["parent"] = $parent;
                $tree[$id]["link"] = $link;
                $tree[$id]["menue_type"] = $menue_type;
            
            }
            else{
                // create the current node and give it a name
                $tree[$id] = array("id"=>$id, "name"=>$name, "parent"=>$pid,"link"=>$link,"menue_type"=>$menue_type);}

                
        }

        //print_r(json_encode($tree));die("here..");
        return $tree;

    }

    public function page($alia){

        //$page_data = SitePage::findOrFail($id);
        $page_data=SitePage::where('status', '1')
        ->where('alia', $alia)
        ->select('id', 'title', 'description')
        ->get();
        return $page_data;
    }
}
