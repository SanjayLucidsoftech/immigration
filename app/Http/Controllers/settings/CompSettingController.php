<?php

namespace App\Http\Controllers\settings;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CompSettingController extends Controller
{
    //
    //
     public function __construct()
        {
            $this->middleware('auth');
        }
    public function general(){

      return view('settings.general');
    }
}
