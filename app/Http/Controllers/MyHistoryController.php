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
                "desc"=>$input["desc"]??'none',
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
    public function AddBonus($input,$action,$moreQuery){//History of Balance
        $check=DB::table("topup_histories")
            ->insert([
                "uid"=>$input["uidUser"],//uid of user
                "purpose"=>$input["uid"],//id of promotion
                "uidCreator"=>Auth::user()->uidCreator,
                "subscriber"=>Auth::user()->subscriber,

                "bonus"=>$input["gain"]??0,
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
                 "gain"=>$input["gain"],//gain found
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
    $check=DB::select("select *from topup_histories where uid=:uid limit $LimitStart,$LimitEnd",array(
        "uid"=>$input["uid"],
    ));
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

}


}
