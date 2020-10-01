<?php

namespace App\Http\Controllers;

use App\Documents;
use Illuminate\Http\Request;
use Auth;

class DocumentsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
      $email = Auth::user()->email;
      $driver=new Documents();
      $driver=Documents::where('email', $email)->firstOrFail();

if ($files = $request->file('F_image')) {

    $destinationPath = 'public/image/'; // upload path
    $profileImage = date('YmdHis') . "." . $files->getClientOriginalName();
    $files->move($destinationPath, $profileImage);
    $driver->nic_F=$profileImage;
    }
    if ($files = $request->file('B_image')) {
        $destinationPath1 = 'public/image/'; // upload path
        $profileImage1 = date('YmdHis') . "." . $files->getClientOriginalName();
        $files->move($destinationPath1, $profileImage1);
        $driver->nic_B=$profileImage1;
        }
        if ($files = $request->file('L_image')) {
            $destinationPath2 = 'public/image/'; // upload path
            $profileImage2 = date('YmdHis') . "." . $files->getClientOriginalName();
            $files->move($destinationPath2, $profileImage2);
            $driver->lic_A=$profileImage2;
            }
            $driver->save();
            $getDocuments = Documents::where('email', $email)->get();
            return view('driver_layouts.Documents')->with('document',$getDocuments);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Documents  $documents
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $email = Auth::user()->email;
        $getDocuments = Documents::where('email', $email)->get();
            return view('driver_layouts.Documents')->with('document',$getDocuments);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Documents  $documents
     * @return \Illuminate\Http\Response
     */
    public function edit(Documents $documents)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Documents  $documents
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Documents $documents)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Documents  $documents
     * @return \Illuminate\Http\Response
     */
    public function destroy(Documents $documents)
    {
        //
    }
}
