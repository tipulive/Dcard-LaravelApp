<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Auth;


class AuthUserRegisterController extends Controller
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
    //

    public function UserCreatedByCompany($input)
    {
        $uid=preg_replace('/[^A-Za-z0-9-]/','',$input['name']);//generated on production
        //echo $this->today;
        $uid=$uid.""."_".date(time());
                $check=DB::table("users")
                ->insert([
                    'name'=>$input['name'],

                    //'fname'=>$input['fname'],
                    //'lname'=>$input['lname'],
                    'email'=>$input['email'],
                    'Ccode'=>$input['Ccode']??'none',//country code
                    'phone'=>$input['phone']??'none',
                    'country'=>$input['country'],
                    'uidCreator'=>Auth::user()->uid,

                    'subscriber'=>Auth::user()->subscriber,
                    'platform'=>env('PLATFORM4'),
                    'password'=>bcrypt($input['password']),
                    //'passdecode' =>$input['password'],

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

    public function UserCreatedByCompanyAssign($input) //create User and Assigned With new Cards
    {

        $PhoneNumber=$input['Ccode']."".$input['phone'];
        $email=$input['email']."_".date(time());
        $check=DB::select("select PhoneNumber,email,carduid from users where PhoneNumber=:PhoneNumber or email=:email limit 2",array(
         "PhoneNumber"=>$PhoneNumber,
         "email"=>$email,
        ));
        if($check)
        {
            $countCheck=count($check)==2?$check[1]->PhoneNumber==$PhoneNumber:"";
            $countCheckEmail=count($check)==2?$check[1]->email==$email:"";
            $CheckPhone=$check[0]->PhoneNumber==$PhoneNumber || $countCheck?'PhoneNumber already Exist':'Phone is not Exist';
            $CheckEmail=$check[0]->email==$email || $countCheckEmail?'Email already Exist':'Email is not Exist';
           // $CheckCard=$check[0]->email==$input['email'] || $countCheckEmail?'Email already Exist':'Email is not Exist';
         return response([
             "status"=>false,
             "Count"=>count($check),
             "phone"=>$CheckPhone,
             "Email"=>$CheckEmail
             //"cardUid"=>


         ],200);
        }
        else{

            $carduid=$input["carduid"];
            $checkCard=DB::update("update cards set status='Assigned' where uid=:uid and status='none' limit 1",array(
                "uid"=>$carduid
            ));//this query will make us check if card existed and Assigned to user straight
            if($checkCard)
            {
                $uid=preg_replace('/[^A-Za-z0-9-]/','',$input['name']);//generated on production
                //echo $this->today;
                $uid=$uid.""."_".date(time());
                        $check=DB::table("users")
                        ->insert([
                            'name'=>$input['name'],

                            //'fname'=>$input['fname'],
                            //'lname'=>$input['lname'],
                            'email'=>$email??'none',
                            'Ccode'=>$input['Ccode']??'none',//country code
                            'phone'=>$input['phone']??'none',
                            'PhoneNumber'=>$PhoneNumber,
                            'uidCreator'=>Auth::user()->uid,

                            'subscriber'=>Auth::user()->subscriber,
                            'platform'=>env('PLATFORM4'),
                            'password' =>bcrypt($input['password']),
                            //'passdecode' =>$input['password'],
                            'country'=>$input['country'],
                            "carduid"=>$input["carduid"],
                            'uid'=>$uid,
                            'created_at'=>$this->today,

                        ]);
                        if($check)
                        {

                            return response([
                                "status"=>true,
                                "result"=>$check


                            ],200);


                        }
                        else{
                         return response([
                             "status"=>false,
                             "result"=>$check,

                         ],200);
                        }
            }
            else{
                return response([
                    "status"=>false,
                    "result"=>"Card is Invalid or already Assigned",

                ],200);
            }



        }

    }
    public function UserEditedByCompanyAssign($input) //create User and Assigned With new Cards
    {

        $PhoneNumber=$input['Ccode']."".$input['phone'];
        $email=$input['email']."_".date(time());
       DB::update("update users set PhoneNumber=$PhoneNumber, where PhoneNumber=");

    }
    public function TestUid(){

        return response([
            "status"=>false,
            "result"=>'result',
            "userid"=>4

        ],200);
    }
    public function UserRegisterEmail($input)
    {
        $uid=preg_replace('/[^A-Za-z0-9-]/','',$input['name']);//generated on production
        //echo $this->today;
        $uid=$uid.""."_".date(time());
                $check=DB::table("users")
                ->insert([
                    'name'=>$input['name'],
                    //'fname'=>$input['fname'],
                    //'lname'=>$input['lname'],
                    'email'=>$input['email'],
                    'Ccode'=>$input['Ccode'],
                    'phone'=>$input['phone'],
                    'uidCreator'=>$input['uidCreator'],
                    'subscriber'=>$input['subscriber'],
                    'platform'=>'client',
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
    public function Register_with_phone($input)
    {

    }





}
