<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;

class MyHistoryController extends Controller
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
    public function AddBalance($input,$action,$moreQuery){//History of Balance
        $check=DB::table("topup_histories")
            ->insert([
                "uid"=>$input["uidUser"],//uid of user
                "uidCreator"=>Auth::user()->uidCreator,
                "subscriber"=>Auth::user()->subscriber,
                "balance"=>$input["balance"]??0,

                "action"=>$action,
                "CBalance"=>$input["CBalance"]??'US',
                "description"=>$input["description"]??'none',
                "created_at"=>$this->today,
            ]);

            if($check)
            {


             return response([
                 "status"=>true,
                 "result"=>$check,
                 "datas"=>$this->today


             ],200);
            }
            else{

                    return response([
                        "status"=>false,
                        "result"=>$check,

                    ],200);


            }

    }
    public function AddBonus($input,$bonus,$action,$moreQuery){//History of Balance
        $check=DB::table("topup_histories")
            ->insert([
                "uid"=>$input["uidUser"],//uid of user
                "purpose"=>$input["uid"],//id of promotion
                "uidCreator"=>Auth::user()->uidCreator,
                "subscriber"=>Auth::user()->subscriber,

                "bonus"=>$bonus??0,
                "action"=>$action,
                //"CBonus"=>$input["CBonus"]??'US',
                //"desc"=>$input["desc"]??'none',
                "created_at"=>$this->today,
            ]);

            if($check)
            {


             return response([
                 "status"=>true,
                 "result"=>$check,
                 "reach"=>$input["reach"],
                 "gain"=>$bonus,//gain as Bonus
                 "datas"=>$this->today


             ],200);
            }
            else{

                    return response([
                        "status"=>false,
                        "result"=>$check,

                    ],200);


            }

    }
public function BalanceHistUser($input)// and Bonus too
{
    $LimitStart=$input["LimitStart"]??0;
    $LimitEnd=$input["LimitEnd"]??10;
    $option=strtolower($input["optionCase"])??'';
    $optionData=($option=="balance"|| $option=="bonus")?$option:'';
    //$optionCase=($option=="balance")?"and balance!='0'":($option=="bonus")?"and bonus!='0'":$option;
    $optionCase=($optionData=="balance")?"and balance!='0'":(($optionData=="bonus")?"and bonus!='0'":$optionData);
    $check=DB::select("select *from topup_histories where uid=:uid $optionCase order by created_at desc limit $LimitStart,$LimitEnd",array(
        "uid"=>$input["uid"],
    ));
   /* $check=DB::select("select *from products limit $LimitStart,$LimitEnd",array(
       // "uid"=>$input["uid"],
    ));*/
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

public function participatedHist($input,$action,$moreQuery)
{

$check=DB::table("participated_hists")
->insert([
"uid"=>$input["uid"],
"uidUser"=>$input['uidUser'],
"subscriber"=>Auth::user()->subscriber,
"inputData"=>$input["inputData"],
'actionName'=>$action,
//"carduid"=>$input["carduid"],
"uidCreator"=>Auth::user()->uid,
"created_at"=>$this->today,
"updated_at"=>$this->today
]);

if($check)
{
    return true;
}
else{
    return false;
}


}
public function GetParticipatedHist($input)
{
    $LimitStart=$input["LimitStart"]??0;
    $LimitEnd=$input["LimitEnd"]??10;

    $check=DB::select("select *from participated_hists where uid=:uid and uidUser=:uidUser order by id desc limit $LimitStart,$LimitEnd",array(
       "uid"=>$input["uid"],
       "uidUser"=>$input["uidUser"]
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
public function GetAllParticipatedHist($input)
{
    $LimitStart=$input["LimitStart"]??0;
    $LimitEnd=$input["LimitEnd"]??10;
    $name=$input["name"]??"none";
    $nameQuery=($name!='none')?"and users.name Like '%$name%'  limit 10":"order by participated_hists.id desc limit $LimitStart,$LimitEnd";
    //$Name



    /*$check=DB::select("select *from participated_hists where subscriber=:subscriber order by id desc limit $LimitStart,$LimitEnd",array(
       "subscriber"=>Auth::user()->subscriber

    ));*/
    $check=DB::select("SELECT users.uid as uidUser ,participated_hists.id,participated_hists.uid,promotions.promoName,promotions.gain,promotions.reach,participated_hists.inputData,participated_hists.created_at,users.name FROM participated_hists
    INNER JOIN users INNER JOIN promotions ON participated_hists.subscriber=:subscriber and participated_hists.uid=promotions.uid and participated_hists.uidUser=users.uid $nameQuery",array(

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
