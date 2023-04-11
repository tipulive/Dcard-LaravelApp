<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Auth;

class AuthAdminRegisterController extends Controller
{

    public function __construct()
    {
        date_default_timezone_set(env('TIME_ZONE'));
        $this->today = date('Y-m-d H:i:s', time());
        $this->Appstate=env('APP_LIVE')?env('APP_PRO'):env('APP_DEV');
        $this->AppName=env('APP_NAME');

        $this->otp='1 hours';
      // $this->otp='20 seconds';//test purpose
        $this->email_confirm='24 hours';

    }
    public function AdminCreateCompany($input)//something missing  like valuation (phone or email,or )
    {
        $uid=preg_replace('/[^A-Za-z0-9-]/','',$input['name']);//generated on production
        $subscriber=preg_replace('/[^A-Za-z0-9-]/','',$input['CompanyName']);
        //echo $this->today;
        $PhoneNumber=$input['Ccode']."".$input['phone'];
        $uid=$uid.""."_".date(time());
                $check=DB::table("admins")
                ->insert([
                    'name'=>$input['name'],
                    //'fname'=>$input['fname'],
                    //'lname'=>$input['lname'],
                    'email'=>$input['email'],
                    'Ccode'=>$input['Ccode'],
                    'phone'=>$input['phone'],
                    'PhoneNumber'=>$PhoneNumber,
                    'initCountry'=>$input['initCountry']??'none',
                    'uidCreator'=>Auth::user()->uid,
                    'CompanyName'=>$input['CompanyName'],
                    'subscriber'=>$subscriber,

                    'platform'=>env('PLATFORM3'),
                    'password' =>bcrypt($input['password']),
                    //'passdecode' =>$input['password'],
                    'country'=>'USA',
                    'uid'=>$uid,
                    'created_at'=>$this->today,

                ]);
                if($check)
                {

                 return response([
                     "status"=>true,
                     "result"=>$check,
                     "userid"=>$uid

                 ],200);
                }
                else{
                 return response([
                     "status"=>false,
                     "result"=>$check,

                 ],200);
                }
    }
    //
    public function AdminRegisterEmail($input)
    {
        $uid=preg_replace('/[^A-Za-z0-9-]/','',$input['name']);//generated on production
        //echo $this->today;
        $uid=$uid.""."_".date(time());
                $check=DB::table("admins")
                ->insert([
                    'name'=>$input['name'],
                    //'lname'=>$input['lname'],
                    'email'=>$input['email'],
                    'phone'=>$uid,
                    'password' =>bcrypt($input['password']),
                   // 'passdecode' =>$input['password'],
                    'country'=>'USA',
                    'uid'=>$uid,
                    'created_at'=>$this->today,

                ]);
                if($check)
                {
                 return response([
                     "status"=>true,
                     "result"=>$check,

                 ],200);
                }
                else{
                 return response([
                     "status"=>false,
                     "result"=>$check,

                 ],200);
                }
    }
    public function Register_with_phone()
    {

    }
}
