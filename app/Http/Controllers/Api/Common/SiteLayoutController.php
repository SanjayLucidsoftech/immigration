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
        return $sitemenues=SiteMenue::getSiteMenuesList();
        //return response()->json($sitemenues, 200);
        //$build_menu=$this->build_menu($sitemenues);
        //return response(['Product 1', 'Product 2', 'Product 3'],200);
    }

    public function page($id){
        $page_data = SitePage::findOrFail($id);
        return $page_data;
    }
}
