<?php

namespace App\Http\Controllers;

use App\DriverRegister;
use Illuminate\Http\Request;
use Auth;
use DB;
use App\Documents;


class DriverRegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');

    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $documents = new Documents();
        $validatedData = $request->validate([
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10'
        ]);
      $driver=new DriverRegister();
      $driver->name=$request->input('name');
      $driver->email=$request->input('email');
      $documents->email=$request->input('email');
      $driver->age=$request->input('age');
      $driver->gender=$request->input('anynum');
      $driver->Phone_Number=$request->input('phone');
      $driver->base_location=$request->input('location');
      $driver->Language="English";
      $driver->website="";
      $driver->Description="";
      $driver->referred_by=$request->input('referred_by');
      $driver->save();
      $documents->save();
    /*  $lastid=$driver->id;
      $trueid='travluu-'.$lastid;
      $page = DriverRegister::find($lastid);
if($page) {
    $page->generated_referral_code=$trueid;
    $page->save();
}*/


      return redirect()->route('vehicles')->with('button','btn-black');


    }



    /**
     * Display the specified resource.
     *
     * @param  \App\DriverRegister  $driverRegister
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $email = Auth::user()->email;
        $flights = DriverRegister::where('email', $email)->get();
        return view('driver_layouts.driver_profile')->with('datas',$flights);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DriverRegister  $driverRegister
     * @return \Illuminate\Http\Response
     */
    public function edit(DriverRegister $driverRegister)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DriverRegister  $driverRegister
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $email=Auth::user()->email;
        $flight = DriverRegister::where('email', $email)
        ->update(['Language' => $request->input('lang'),
        'Website' => $request->input('website'),
        'Description' => $request->input('comment')
        ]);
      return dd("success");





    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DriverRegister  $driverRegister
     * @return \Illuminate\Http\Response
     */
    public function destroy(DriverRegister $driverRegister)
    {
        //
    }
}
