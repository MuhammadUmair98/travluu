<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use App\DriverRegister;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        global $value;

        $email = Auth::user()->email;
        $Dbs = DriverRegister::where('email', $email)->get();
        foreach($Dbs as $Db){
        $value = $Db->email;
        }
        if(!is_null($value)){

             return redirect()->route('vehicles');
        }
        else{
        return view('home');
        }
    }
    public function getLogout()
    {
        Auth::Logout();
        Session::flush();
        return view('layouts.main');
    }


}
