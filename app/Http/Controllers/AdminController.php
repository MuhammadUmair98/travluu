<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DriverRegister;
use App\myVehicles;
use App\Documents;
use App\driver_Images;
use Session;
use Illuminate\Support\Facades\Mail;
use App\Mail\AdminMail;

class AdminController extends Controller
{
    private $id=1;


public function getAdminData(){
    $registeredDriver=DriverRegister::get()->all();

    return view('Admin.Admin_Layout')->with('registered',$registeredDriver);

}
public function getVehicles($id,$email){

    $registeredDriver=myVehicles::get()->where('email',$email)->all();
   //dd($registeredDriver);
     return view('Admin.specific_user')->with('viewingdata',$registeredDriver);


}
public function getReferralCode($email){
    $registeredDriver=DriverRegister::get()->where('email',$email)->all();





    return view('Admin.Referral')->with('viewingdata',$registeredDriver);
    
}
public function saveReferral(Request $request,$email){
$registeredDriver=DriverRegister::get()->where('email',$email)->all();
$changeReferral=DriverRegister::where('email', $email)->firstOrFail();
$changeReferral->generated_referral_code=$request->referral;
$changeReferral->save();

return view('Admin.Referral')->with('viewingdata',$registeredDriver)->with('alert','Referral code to email '.$email .' Successfully changed');
}
public function getUserData($id,$email){

   // $registeredUser=Documents::get()->where('email',$email)->all();
    return redirect()->route('Pr_docs',['id'=>$id,'email'=>$email]);

}

public function personalInfo($id,$email){
    $registeredDriver=DriverRegister::get()->where('email',$email)->all();





    return view('Admin.Personal_info')->with('viewingdata',$registeredDriver);
}

public function documentInfo($id,$email){
    $registeredDriver=Documents::get()->where('email',$email)->all();
    return view('Admin.Admin_Documents')->with('viewingdata',$registeredDriver);
}
public function PicsInfo($id,$email){
    Session::put('keyvalve', $id);
    $id=Session::get('keyvalve');
    $registeredDriver=driver_Images::where('email',$email)->where('id',$id)->get()->all();
    return view('Admin.Admin_Photos')->with('viewingdata',$registeredDriver);
}
public function Validation($id,$email){

    $registeredDriver=myVehicles::get()->where('email',$email)->where('id',$id)->all();
    return view('Admin.validation')->with('viewingdata',$registeredDriver);;
}
public function datachanged(Request $request){

        $id=Session::get('keyvalve');
        $insertData=myVehicles::where('id',$id)->firstOrFail();
        $insertData->transport_type=$request->input('type');
        $insertData->pass_seats=$request->input('Passenger');
        $insertData->lugg_places=$request->input('Luggage');
        $insertData->status="verified";
        $insertData->save();
       // dd($insertData->Model);
        $registeredDriver=DriverRegister::get()->all();
        $comment = 'Congratulations!!! Your Vehicle model ' .$insertData->Model .' has successfully been registered.Now you will start recieving requests';
        $toEmail = $insertData->email;
        Mail::to($toEmail)->send(new AdminMail($comment));
        return view('Admin.Admin_Layout')->with('registered',$registeredDriver);

}
}
