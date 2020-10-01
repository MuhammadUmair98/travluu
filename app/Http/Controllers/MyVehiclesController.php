<?php

namespace App\Http\Controllers;

use App\myVehicles;
use Illuminate\Http\Request;
use Auth;
use Session;
use App\driver_images;

class MyVehiclesController extends Controller
{

    private $id=1;
    private $getDriver;
    private $imageName="firstImage";

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
        $imageData=new driver_images();
        $saveData=new myVehicles();
        $saveData->email=$email;
        $saveData->Brand=$request->input('brand');
        $saveData->Model=$request->input('model');
        $saveData->Year=$request->input('year');
        $saveData->License_plate=$request->input('License');
        $saveData->transport_type=$request->input('type');
        $saveData->pass_seats=$request->input('Passenger');
        $saveData->lugg_places=$request->input('Luggage');
        $saveData->color=$request->input('color');
        $saveData->status="Not Verified";
        $saveData->save();
        $this->id = $saveData->id;
        $imageData->user_id=$saveData->id;
        $imageData->email=$email;
        $imageData->save();
        Session::put('key', $this->id);
        return \Redirect::route('save_vehicles_images',['post_id'=>$saveData->id]);


    }

    public function showDriver($post_id){


        $email = Auth::user()->email;
        $getId=Session::get('key');



        $this->getDriver = myVehicles::where('email', $email)->where('id', $post_id)->get();

       // return(dd($post_id));
       $getImage = driver_images::where('email', $email)->where('user_id', $post_id)->get();
       return view('driver_layouts.add_new_driver_images')->with('vehicle_data',$this->getDriver)->with('images_data',$getImage)->with('name',$this->imageName);


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\myVehicles  $myVehicles
     * @return \Illuminate\Http\Response
     */
    public function saveImages(Request $request,$this_Id){
        $email = Auth::user()->email;




        $this->getDriver = myVehicles::where('email', $email)->where('id', $this_Id)->get();

        $driver=driver_images::findOrFail($this_Id);
        if ($files = $request->file('firstImage')) {
$this->imageName="secondImage";
            $destinationPath = 'public/image/'; // upload path
            $profileImage = date('YmdHis') . "." . $files->getClientOriginalName();
            $files->move($destinationPath, $profileImage);
            $driver->image1=$profileImage;
            }
            if ($files = $request->file('secondImage')) {
                $this->imageName="thirdImage";
                $destinationPath1 = 'public/image/'; // upload path
                $profileImage1 = date('YmdHis') . "." . $files->getClientOriginalName();
                $files->move($destinationPath1, $profileImage1);
                $driver->image2=$profileImage1;
                }
                if ($files = $request->file('thirdImage')) {
                    $this->imageName="fourthImage";
                    $destinationPath2 = 'public/image/'; // upload path
                    $profileImage2 = date('YmdHis') . "." . $files->getClientOriginalName();
                    $files->move($destinationPath2, $profileImage2);
                    $driver->image3=$profileImage2;
                    }
                    if ($files = $request->file('fourthImage')) {
                        $this->imageName="fifthImage";
                        $destinationPath3 = 'public/image/'; // upload path
                        $profileImage3 = date('YmdHis') . "." . $files->getClientOriginalName();
                        $files->move($destinationPath3, $profileImage3);
                        $driver->image4=$profileImage3;
                        }
                        if ($files = $request->file('fifthImage')) {
                            $this->imageName="sixthImage";
                            $destinationPath4 = 'public/image/'; // upload path
                            $profileImage4 = date('YmdHis') . "." . $files->getClientOriginalName();
                            $files->move($destinationPath4, $profileImage4);
                            $driver->image5=$profileImage4;
                            }
                            if ($files = $request->file('sixthImage')) {
                                $this->imageName="sevethImage";
                                $destinationPath5 = 'public/image/'; // upload path
                                $profileImage5 = date('YmdHis') . "." . $files->getClientOriginalName();
                                $files->move($destinationPath5, $profileImage5);
                                $driver->image6=$profileImage5;
                                }
                                if ($files = $request->file('sevethImage')) {
                                    $this->imageName="eighthImage";
                                    $destinationPath6 = 'public/image/'; // upload path
                                    $profileImage6 = date('YmdHis') . "." . $files->getClientOriginalName();
                                    $files->move($destinationPath6, $profileImage6);
                                    $driver->image7=$profileImage6;

                                    }
                                    if ($files = $request->file('eighthImage')) {
                                        $this->imageName="ninthImage";
                                        $destinationPath7 = 'public/image/'; // upload path
                                        $profileImage7 = date('YmdHis') . "." . $files->getClientOriginalName();
                                        $files->move($destinationPath7, $profileImage7);
                                        $driver->image8=$profileImage7;

                                        }
                                        if ($files = $request->file('ninthImage')) {
                                            $this->imageName="tenImage";
                                            $destinationPath8 = 'public/image/'; // upload path
                                            $profileImage8 = date('YmdHis') . "." . $files->getClientOriginalName();
                                            $files->move($destinationPath8, $profileImage8);
                                            $driver->image9=$profileImage8;

                                            }
                                            if ($files = $request->file('tenImage')) {
                                                $this->imageName="elevenImage";
                                                $destinationPath9 = 'public/image/'; // upload path
                                                $profileImage9 = date('YmdHis') . "." . $files->getClientOriginalName();
                                                $files->move($destinationPath9, $profileImage9);
                                                $driver->image10=$profileImage9;


                                                }
                $driver->save();
                $getImage = driver_images::where('email', $email)->where('user_id', $this_Id)->get();
                return view('driver_layouts.add_new_driver_images')->with('vehicle_data',$this->getDriver)->with('images_data',$getImage)->with('name',$this->imageName);

    }
    public function show()
    {
        $email = Auth::user()->email;
        $flights = myVehicles::where('email', $email)->get();
        return view('driver_layouts.Vehicles')->with('driver_data',$flights);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\myVehicles  $myVehicles
     * @return \Illuminate\Http\Response
     */
    public function edit(myVehicles $myVehicles)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\myVehicles  $myVehicles
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\myVehicles  $myVehicles
     * @return \Illuminate\Http\Response
     */
    public function destroy(myVehicles $myVehicles)
    {
        //
    }
}
