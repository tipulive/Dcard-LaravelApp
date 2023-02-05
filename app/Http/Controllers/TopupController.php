<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\MyHistoryController;
use Auth;
use DB;
use Validator;

class TopupController extends Controller
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

    public function TopupUser($input)//add balance
    {
        $validateAmount = Validator::make($input, [
            // "price" => "numeric|min:0|max:100000000",
             "amount" => "numeric|min:0|max:100000000",

          ]);

          if($validateAmount->fails()){
              return response([
                  "status"=>false,
                  //"result"=>$validatePrice->errors(),
                  "result"=> $validateAmount->errors()->getMessages()['amount'][0],

              ],200);
          }
          else{

            //
            $check1=DB::select("select uid from topups where uid=:uid limit 1",array(
                "uid"=>$input["uid"]
            ));
            if($check1)//then update
            {
                $balance=$input["balance"];
             $checkUpdate=DB::update("update topups set uidCreator=:uidCreator,subscriber=:subscriber,balance=balance+$balance,desc=:desc,updated_at=:updated_at where uid=:uid limit 1",array(
                "uid"=>$input["uid"],//uid of user
                "uidCreator"=>Auth::user()->uidCreator,
                "subscriber"=>Auth::user()->subscriber,
               // "currency"=>$input["amount"],
                "desc"=>$input["desc"]??'none',
                "updated_at"=>$input["updated_at"],
             ));
             if($checkUpdate)
             {
                 $action="AddNew";
                 $moreQuery="";
                return (new MyHistoryController)->AddBalance($input,$action,$moreQuery);

             }
             else{

             }
            }
            else{//inserted

            }
            $check=DB::table("topups")
            ->insert([
                "uid"=>$input["uid"],//uid of user
                "uidCreator"=>Auth::user()->uidCreator,
                "subscriber"=>Auth::user()->subscriber,
                "balance"=>$input["balance"],
                "CBalance"=>$input["CBalance"]??'US',
                "desc"=>$input["desc"]??'none',
                "created_at"=>$input["created_at"],
            ]);

            if($check)
            {

                $action="FirstTimeAddNew";
                $moreQuery="";
               return (new MyHistoryController)->AddBalance($input,$action,$moreQuery);


            }
            else{

                    return response([
                        "status"=>false,
                        "result"=>$check,
                        "message"=>"Topup failed to insert new Topup"

                    ],200);


            }
            //

          }




    }
    public function AddBonus($input,$action,$moreQuery)
    {
        $uid=$input["uidUser"];

       $uidCreator=Auth::user()->uidCreator;
        $subscriber=Auth::user()->subscriber;
        //$bonus=$input["gaine"];
       // $CBonus=$input["CBonus"]??'US';
        //$desc=$input["desc"]??'none';
        $today=$this->today;
        $gain=$input["gain"];
        $check=DB::insert("INSERT INTO topups(uid,uidcreator,subscriber,bonus,created_at,updated_at) VALUES
        ('$uid','$uidCreator','$subscriber','$gain','$today','$today')
             ON DUPLICATE KEY UPDATE bonus=bonus+$gain,updated_at='$today'");

if($check)
{

    $action="Bonus";
    $moreQuery="";
   return (new MyHistoryController)->AddBonus($input,$action,$moreQuery);


}
else{

        return response([
            "status"=>false,
            "result"=>$check,
            "message"=>"Topup failed to insert new Topup"

        ],200);


}
    }

    public function GetBalanceUser($input)
    {

        $check=DB::select("select *from topups where uid=:uid limit 1",array(
            "uid"=>$input["uid"]
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
}
