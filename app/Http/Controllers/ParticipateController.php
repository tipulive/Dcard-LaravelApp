<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\TopupController;
use DB;
use Auth;

class ParticipateController extends Controller
{
    //

    public function __construct()
    {
        date_default_timezone_set(env('TIME_ZONE'));
        $this->today = date('Y-m-d H:i:s', time());
        $this->Appstate=env('APP_LIVE')?env('APP_PRO'):env('APP_DEV');
        $this->AppName=env('APP_NAME');

        $this->otp='1 hours';
      // $this->otp='20 seconds';//test purpose
        $this->email_confirm='24 hours';
        $this->Admin_Auth_error="You Are not authenticate please Request Permission to Admin";
        $this->Admin_Auth_result_error="0";//Admin auth result zero

    }

    public function ParticipateEvent($input)
    {

        $check=DB::select("select uid,uidUser,inputData,subscriber from participateds where uid=:uid and uidUser=:uidUser and subscriber=:subscriber  limit 1",array(
            "uid"=>$input['uid'],//event Id
            "uidUser"=>$input['uidUser'],

           // "subscriber"=>$input['subscriber']
            "subscriber"=>Auth::user()->subscriber
        ));

        if($check)
        {



         $addedInputData=$input['inputData']+$check[0]->inputData;

         if($addedInputData==$input["reach"])
         {
             //add Bonus as gain

             $inputData=$input["inputData"];
             $check2=DB::update("update participateds set status='reached',inputData=inputData+$inputData where uid=:uid and uidUser=:uidUser and subscriber=:subscriber limit 1",array(
                 "uid"=>$input['uid'],
                 //"carduid"=>$input['carduid'],
                 "uidUser"=>$input['uidUser'],
                 "subscriber"=>Auth::user()->subscriber
             ));

             if($check2)
             {
                $action="AddBonus";
                $moreQuery="";

  //after topups then
  return (new TopupController)->AddBonus($input,$action,$moreQuery);

             }



         }
         else{
            $inputData=$input["inputData"];
            $check1=DB::update("update participateds set inputData=inputData+$inputData where uid=:uid and uidUser=:uidUser and subscriber=:subscriber limit 1",array(
                "uid"=>$input['uid'],
                //"carduid"=>$input['carduid'],
                "uidUser"=>$input['uidUser'],
                "subscriber"=>Auth::user()->subscriber
            ));

            if($check1)
            {

             return response([
                 "status"=>true,
                 "result"=>$check1


             ],200);
            }
            else{
             return response([
                 "status"=>false,
                 "result"=>$check1,

             ],200);
            }

         }

        /*$check=DB::insert("INSERT INTO topups("") VALUES (4,'Gorilla')
        ON DUPLICATE KEY UPDATE animal='Gorilla'")*/


        }
        else{

            $check2=DB::table("participateds")
            ->insert([
            "uid"=>$input["uid"],
            "uidUser"=>$input['uidUser'],
            "subscriber"=>Auth::user()->subscriber,
            "inputData"=>$input["inputData"],
//"carduid"=>$input["carduid"],
            "uidCreator"=>Auth::user()->uid,
            "created_at"=>$this->today
            ]);

        if($check2)
        {

         return response([
             "status"=>true,
             "result"=>$check2


         ],200);
        }
        else{
         return response([
             "status"=>false,
             "result"=>$check2,

         ],200);
        }

        }
    }


    public function ParticipateEditEvent($input)//not finished
    {



                 $inputData=$input["inputData"];
            $check=DB::update("update participateds set inputData=inputData+$inputData where uid=:uid and uidUser=:uidUser limit 1",array(
                "uid"=>$input['uid'],
                "uidUser"=>Auth::user()->uidUser
            ));

            if($check1)
            {

             return response([
                 "status"=>true,
                 "result"=>$check1


             ],200);
            }
            else{
             return response([
                 "status"=>false,
                 "result"=>$check1,

             ],200);
            }



    }

    public function ParticipateRedeemed($input){

        $check=DB::update("update participateds set status='Redeemed',updated_at=:updated_at where uid=:uid and uidUser=:uidUser and subscriber=:subscriber limit 1",array(
            "uid"=>$input["uid"],//id of participated
            "uidUser"=>$input["uidUser"],
            "subscriber"=>Auth::user()->subscriber,
            "updated_at"=>$this->today
        ));
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
    public function CountParticipateEvent($input)
    {

        $uidUser=$input['uidUser'];
        $subscriber=Auth::user()->subscriber;
        $check=DB::select("SELECT (SELECT count(*) from participateds where uidUser='$uidUser' and subscriber='$subscriber' and status='none') AS Active, (SELECT count(*) from participateds where uidUser='$uidUser' and subscriber='$subscriber' and status='reached') AS Reached");


       if($check)
       {

        return response([
            "status"=>true,
             "all"=>($check[0]->Active+$check[0]->Reached),
            "Active"=>$check[0]->Active,
            "Reached"=>$check[0]->Reached


        ],200);
       }
       else{
        return response([
            "status"=>false,
            "result"=>$check,

        ],200);
       }
    }
    public function GetAllParticipateEvent($input)//All

{


            $check=DB::select("select *from participateds where uidUser=:uidUser and subscriber=:subscriber limit 100",array(
                 "uidUser"=>$input["uidUser"],
                "subscriber"=>Auth::user()->subscriber
            ));

            if($check)
            {

             return response([
                 "status"=>true,
                 "count"=>count($check),
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

    public function GetActiveParticipateEvent($input)//
    {




            $check=DB::select("select *from participateds where uidUser=:uidUser and subscriber=:subscriber and status!='reached' limit 100",array(
                 "uidUser"=>$input["uidUser"],
                "subscriber"=>Auth::user()->subscriber
            ));

            if($check)
            {

             return response([
                 "status"=>true,
                 "count"=>count($check),
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
    public function GetReachedParticipateEvent($input)//Reached

    {


                $check=DB::select("select *from participateds where uidUser=:uidUser and subscriber=:subscriber and status='reached' limit 100",array(
                     "uidUser"=>$input["uidUser"],
                    "subscriber"=>Auth::user()->subscriber
                ));

                if($check)
                {

                 return response([
                     "status"=>true,
                     "count"=>count($check),
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

}
