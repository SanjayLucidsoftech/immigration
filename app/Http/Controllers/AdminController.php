<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //$data=$request->session()->all();
        $data=$request->user();
        //print_r($data);
        return view('admin.home');
    }

    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */

}
