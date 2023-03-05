<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use File;
use App\Http\Controllers\Auth\AuthUserRegisterController;
use App\Http\Controllers\PromotionController;
use App\Http\Controllers\ParticipateController;
use App\Http\Controllers\CardController;
use App\Http\Controllers\SyncController;
use App\Http\Controllers\SafariController;
use App\Http\Controllers\TopupController;
use App\Http\Controllers\MyHistoryController;


class CompanyController extends Controller
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
        $this->platform1=env('PLATFORM3');
    }
   /*SafariCode calculation */
   public function CompanySafariGetAll(Request $request){

    if(Auth::check())
    {





        if(Auth::user()->platform==$this->platform1)
        {
            $input=$request->all();

            return (new SafariController)->GetAll();
        }
        else{
            return response([
                "status"=>false,
                "result"=>$this->Admin_Auth_result_error,
                "error"=>$this->Admin_Auth_error,

            ],200);
        }
    }
    else{
        return response([
            "status"=>false,
            "result"=>$this->Admin_Auth_result_error,
            "error"=>$this->Admin_Auth_error,

        ],200);
    }
}
   public function CompanySafariCreate(Request $request){

    if(Auth::check())
    {





        if(Auth::user()->platform==$this->platform1)
        {
            $input=$request->all();

            return (new SafariController)->create($input);
        }
        else{
            return response([
                "status"=>false,
                "result"=>$this->Admin_Auth_result_error,
                "error"=>$this->Admin_Auth_error,

            ],200);
        }
    }
    else{
        return response([
            "status"=>false,
            "result"=>$this->Admin_Auth_result_error,
            "error"=>$this->Admin_Auth_error,

        ],200);
    }
}
public function CompanySafariEdit(Request $request){

    if(Auth::check())
    {





        if(Auth::user()->platform==$this->platform1)
        {
            $input=$request->all();

            return (new SafariController)->Edit($input);
        }
        else{
            return response([
                "status"=>false,
                "result"=>$this->Admin_Auth_result_error,
                "error"=>$this->Admin_Auth_error,

            ],200);
        }
    }
    else{
        return response([
            "status"=>false,
            "result"=>$this->Admin_Auth_result_error,
            "error"=>$this->Admin_Auth_error,

        ],200);
    }
}

public function CompanySafariDelete(Request $request){

    if(Auth::check())
    {





        if(Auth::user()->platform==$this->platform1)
        {
            $input=$request->all();

            return (new SafariController)->Delete($input);
        }
        else{
            return response([
                "status"=>false,
                "result"=>$this->Admin_Auth_result_error,
                "error"=>$this->Admin_Auth_error,

            ],200);
        }
    }
    else{
        return response([
            "status"=>false,
            "result"=>$this->Admin_Auth_result_error,
            "error"=>$this->Admin_Auth_error,

        ],200);
    }
}

public function CompanySafariItemSearch(Request $request){

    if(Auth::check())
    {





        if(Auth::user()->platform==$this->platform1)
        {
            $input=$request->all();

            return (new SafariController)->Search($input);
        }
        else{
            return response([
                "status"=>false,
                "result"=>$this->Admin_Auth_result_error,
                "error"=>$this->Admin_Auth_error,

            ],200);
        }
    }
    else{
        return response([
            "status"=>false,
            "result"=>$this->Admin_Auth_result_error,
            "error"=>$this->Admin_Auth_error,

        ],200);
    }
}

public function CompanySafariAddItem(Request $request){

    if(Auth::check())
    {





        if(Auth::user()->platform==$this->platform1)
        {
            $input=$request->all();

            return (new SafariController)->AddItem($input);
        }
        else{
            return response([
                "status"=>false,
                "result"=>$this->Admin_Auth_result_error,
                "error"=>$this->Admin_Auth_error,

            ],200);
        }
    }
    else{
        return response([
            "status"=>false,
            "result"=>$this->Admin_Auth_result_error,
            "error"=>$this->Admin_Auth_error,

        ],200);
    }
}
public function CompanySafariEditItem(Request $request){

    if(Auth::check())
    {





        if(Auth::user()->platform==$this->platform1)
        {
            $input=$request->all();

            return (new SafariController)->EditItem($input);
        }
        else{
            return response([
                "status"=>false,
                "result"=>$this->Admin_Auth_result_error,
                "error"=>$this->Admin_Auth_error,

            ],200);
        }
    }
    else{
        return response([
            "status"=>false,
            "result"=>$this->Admin_Auth_result_error,
            "error"=>$this->Admin_Auth_error,

        ],200);
    }
}

public function CompanySafariDeleteItem(Request $request){

    if(Auth::check())
    {





        if(Auth::user()->platform==$this->platform1)
        {
            $input=$request->all();

            return (new SafariController)->DeleteItem($input);
        }
        else{
            return response([
                "status"=>false,
                "result"=>$this->Admin_Auth_result_error,
                "error"=>$this->Admin_Auth_error,

            ],200);
        }
    }
    else{
        return response([
            "status"=>false,
            "result"=>$this->Admin_Auth_result_error,
            "error"=>$this->Admin_Auth_error,

        ],200);
    }
}

public function CompanySafariSpent(Request $request){

    if(Auth::check())
    {





        if(Auth::user()->platform==$this->platform1)
        {
            $input=$request->all();

            return (new SafariController)->Spent($input);
        }
        else{
            return response([
                "status"=>false,
                "result"=>$this->Admin_Auth_result_error,
                "error"=>$this->Admin_Auth_error,

            ],200);
        }
    }
    else{
        return response([
            "status"=>false,
            "result"=>$this->Admin_Auth_result_error,
            "error"=>$this->Admin_Auth_error,

        ],200);
    }
}

public function CompanySafariCalculate(Request $request){

    if(Auth::check())
    {





        if(Auth::user()->platform==$this->platform1)
        {
            $input=$request->all();

            return (new SafariController)->Calculate($input);
        }
        else{
            return response([
                "status"=>false,
                "result"=>$this->Admin_Auth_result_error,
                "error"=>$this->Admin_Auth_error,

            ],200);
        }
    }
    else{
        return response([
            "status"=>false,
            "result"=>$this->Admin_Auth_result_error,
            "error"=>$this->Admin_Auth_error,

        ],200);
    }
}
   /*SafariCode end calculation */



    public function CompanySyncUpload(Request $request){

        if(Auth::check())
        {





            if(Auth::user()->platform==$this->platform1)
            {
                $input=$request->all();

                return (new SyncController)->SyncCardUpload($input);
            }
            else{
                return response([
                    "status"=>false,
                    "result"=>$this->Admin_Auth_result_error,
                    "error"=>$this->Admin_Auth_error,

                ],200);
            }
        }
        else{
            return response([
                "status"=>false,
                "result"=>$this->Admin_Auth_result_error,
                "error"=>$this->Admin_Auth_error,

            ],200);
        }
    }

    public function CompanySyncCardDownload(Request $request){

        if(Auth::check())
        {





            if(Auth::user()->platform==$this->platform1)
            {
                $input=$request->all();

                return (new SyncController)->SyncCardDownload($input);
            }
            else{
                return response([
                    "status"=>false,
                    "result"=>$this->Admin_Auth_result_error,
                    "error"=>$this->Admin_Auth_error,

                ],200);
            }
        }
        else{
            return response([
                "status"=>false,
                "result"=>$this->Admin_Auth_result_error,
                "error"=>$this->Admin_Auth_error,

            ],200);
        }
    }
    public function CompanyGetNumberDetail(Request $request){
        if(Auth::check())
        {





            if(Auth::user()->platform==$this->platform1)
            {
                $input=$request->all();

                return (new CardController)-> GetNumberDetail($input);
            }
            else{
                return response([
                    "status"=>false,
                    "result"=>$this->Admin_Auth_result_error,
                    "error"=>$this->Admin_Auth_error,

                ],200);
            }
        }
        else{
            return response([
                "status"=>false,
                "result"=>$this->Admin_Auth_result_error,
                "error"=>$this->Admin_Auth_error,

            ],200);
        }

    }
    public function CompanyGetCardDetail(Request $request){
        if(Auth::check())
        {





            if(Auth::user()->platform==$this->platform1)
            {
                $input=$request->all();

                return (new CardController)-> GetCardDetail($input);
            }
            else{
                return response([
                    "status"=>false,
                    "result"=>$this->Admin_Auth_result_error,
                    "error"=>$this->Admin_Auth_error,

                ],200);
            }
        }
        else{
            return response([
                "status"=>false,
                "result"=>$this->Admin_Auth_result_error,
                "error"=>$this->Admin_Auth_error,

            ],200);
        }

    }
    public function CompanyPrintCard(Request $request){
        if(Auth::check())
        {





            if(Auth::user()->platform==$this->platform1)
            {
                $input=$request->all();

                return (new CardController)->PrintCard($input);
            }
            else{
                return response([
                    "status"=>false,
                    "result"=>$this->Admin_Auth_result_error,
                    "error"=>$this->Admin_Auth_error,

                ],200);
            }
        }
        else{
            return response([
                "status"=>false,
                "result"=>$this->Admin_Auth_result_error,
                "error"=>$this->Admin_Auth_error,

            ],200);
        }

    }
    public function CompanyCreateCard(Request $request){
        if(Auth::check())
        {





            if(Auth::user()->platform==$this->platform1)
            {
                $input=$request->all();

                return (new CardController)->create($input);
            }
            else{
                return response([
                    "status"=>false,
                    "result"=>$this->Admin_Auth_result_error,
                    "error"=>$this->Admin_Auth_error,

                ],200);
            }
        }
        else{
            return response([
                "status"=>false,
                "result"=>$this->Admin_Auth_result_error,
                "error"=>$this->Admin_Auth_error,

            ],200);
        }

    }
    public function CompanyCreateMultipleCard(Request $request){
        if(Auth::check())
        {





            if(Auth::user()->platform==$this->platform1)
            {
                $input=$request->all();

                return (new CardController)->createMultiple($input);
            }
            else{
                return response([
                    "status"=>false,
                    "result"=>$this->Admin_Auth_result_error,
                    "error"=>$this->Admin_Auth_error,

                ],200);
            }
        }
        else{
            return response([
                "status"=>false,
                "result"=>$this->Admin_Auth_result_error,
                "error"=>$this->Admin_Auth_error,

            ],200);
        }

    }
    public function CompanyAssignCard(Request $request){//add Card to user
        if(Auth::check())
        {




            if(Auth::user()->platform==$this->platform1)
            {
                $input=$request->all();

                return (new CardController)->AssignCard($input);
            }
            else{
                return response([
                    "status"=>false,
                    "result"=>$this->Admin_Auth_result_error,
                    "error"=>$this->Admin_Auth_error,

                ],200);
            }
        }
        else{
            return response([
                "status"=>false,
                "result"=>$this->Admin_Auth_result_error,
                "error"=>$this->Admin_Auth_error,

            ],200);
        }

    }
    public function CompanyCreateUser(Request $request){
        if(Auth::check())
        {





            if(Auth::user()->platform==$this->platform1)
            {
                $input=$request->all();

                return (new AuthUserRegisterController)->UserCreatedByCompany($input);
            }
            else{
                return response([
                    "status"=>false,
                    "result"=>$this->Admin_Auth_result_error,
                    "error"=>$this->Admin_Auth_error,

                ],200);
            }
        }
        else{
            return response([
                "status"=>false,
                "result"=>$this->Admin_Auth_result_error,
                "error"=>$this->Admin_Auth_error,

            ],200);
        }

    }

    public function CompanyCreateUserAssign(Request $request){
        if(Auth::check())
        {





            if(Auth::user()->platform==$this->platform1)
            {
                $input=$request->all();

                return (new AuthUserRegisterController)->UserCreatedByCompanyAssign($input);
            }
            else{
                return response([
                    "status"=>false,
                    "result"=>$this->Admin_Auth_result_error,
                    "error"=>$this->Admin_Auth_error,

                ],200);
            }
        }
        else{
            return response([
                "status"=>false,
                "result"=>$this->Admin_Auth_result_error,
                "error"=>$this->Admin_Auth_error,

            ],200);
        }

    }
    public function CompanyEditUserAssign(Request $request){
        if(Auth::check())
        {





            if(Auth::user()->platform==$this->platform1)
            {
                $input=$request->all();

                return (new AuthUserRegisterController)->UserEditedByCompanyAssign($input);
            }
            else{
                return response([
                    "status"=>false,
                    "result"=>$this->Admin_Auth_result_error,
                    "error"=>$this->Admin_Auth_error,

                ],200);
            }
        }
        else{
            return response([
                "status"=>false,
                "result"=>$this->Admin_Auth_result_error,
                "error"=>$this->Admin_Auth_error,

            ],200);
        }

    }
    public function CompanyCreatePromotionEvent(Request $request){
        if(Auth::check())
        {




            if(Auth::user()->platform==$this->platform1)
            {
                $input=$request->all();

                return (new PromotionController)->CreatePromotionEvent($input);
            }
            else{
                return response([
                    "status"=>false,
                    "result"=>$this->Admin_Auth_result_error,
                    "error"=>$this->Admin_Auth_error,

                ],200);
            }
        }
        else{
            return response([
                "status"=>false,
                "result"=>$this->Admin_Auth_result_error,
                "error"=>$this->Admin_Auth_error,

            ],200);
        }

    }

    public function CompanyGetAllPromotionEvent(Request $request){
        if(Auth::check())
        {




            if(Auth::user()->platform==$this->platform1)
            {
                $input=$request->all();

                return (new PromotionController)->GetAllPromotionEvent($input);
            }
            else{
                return response([
                    "status"=>false,
                    "result"=>$this->Admin_Auth_result_error,
                    "error"=>$this->Admin_Auth_error,

                ],200);
            }
        }
        else{
            return response([
                "status"=>false,
                "result"=>$this->Admin_Auth_result_error,
                "error"=>$this->Admin_Auth_error,

            ],200);
        }

    }


    public function CompanySetPromotionEventStatus(Request $request){
        if(Auth::check())
        {




            if(Auth::user()->platform==$this->platform1)
            {
                $input=$request->all();

                return (new PromotionController)->SetPromotionEventStatus($input);
            }
            else{
                return response([
                    "status"=>false,
                    "result"=>$this->Admin_Auth_result_error,
                    "error"=>$this->Admin_Auth_error,

                ],200);
            }
        }
        else{
            return response([
                "status"=>false,
                "result"=>$this->Admin_Auth_result_error,
                "error"=>$this->Admin_Auth_error,

            ],200);
        }

    }

    public function CompanyParticipateEvent(Request $request){
        if(Auth::check())
        {




            if(Auth::user()->platform==$this->platform1)
            {
                $input=$request->all();

                return (new ParticipateController)->ParticipateEvent($input);
            }
            else{
                return response([
                    "status"=>false,
                    "result"=>$this->Admin_Auth_result_error,
                    "error"=>$this->Admin_Auth_error,

                ],200);
            }
        }
        else{
            return response([
                "status"=>false,
                "result"=>$this->Admin_Auth_result_error,
                "error"=>$this->Admin_Auth_error,

            ],200);
        }

    }

    public function CompanyParticipateEditEvent(Request $request){
        if(Auth::check())
        {




            if(Auth::user()->platform==$this->platform1)
            {
                $input=$request->all();

                return (new ParticipateController)->ParticipateEditEvent($input);
            }
            else{
                return response([
                    "status"=>false,
                    "result"=>$this->Admin_Auth_result_error,
                    "error"=>$this->Admin_Auth_error,

                ],200);
            }
        }
        else{
            return response([
                "status"=>false,
                "result"=>$this->Admin_Auth_result_error,
                "error"=>$this->Admin_Auth_error,

            ],200);
        }

    }

    public function CompanyGetAllParticipateEvent(Request $request){
        if(Auth::check())
        {




            if(Auth::user()->platform==$this->platform1)
            {
                $input=$request->all();
                return (new ParticipateController)->GetAllParticipateEvent($input);
            }
            else{
                return response([
                    "status"=>false,
                    "result"=>$this->Admin_Auth_result_error,
                    "error"=>$this->Admin_Auth_error,

                ],200);
            }
        }
        else{
            return response([
                "status"=>false,
                "result"=>$this->Admin_Auth_result_error,
                "error"=>$this->Admin_Auth_error,

            ],200);
        }

    }


    public function CompanyGetActiveParticipateEvent(Request $request){
        if(Auth::check())
        {




            if(Auth::user()->platform==$this->platform1)
            {
                $input=$request->all();
                return (new ParticipateController)->GetActiveParticipateEvent($input);
            }
            else{
                return response([
                    "status"=>false,
                    "result"=>$this->Admin_Auth_result_error,
                    "error"=>$this->Admin_Auth_error,

                ],200);
            }
        }
        else{
            return response([
                "status"=>false,
                "result"=>$this->Admin_Auth_result_error,
                "error"=>$this->Admin_Auth_error,

            ],200);
        }

    }



    public function CompanyCountParticipateEvent(Request $request){
        if(Auth::check())
        {




            if(Auth::user()->platform==$this->platform1)
            {
                $input=$request->all();
                return (new ParticipateController)->CountParticipateEvent($input);
            }
            else{
                return response([
                    "status"=>false,
                    "result"=>$this->Admin_Auth_result_error,
                    "error"=>$this->Admin_Auth_error,

                ],200);
            }
        }
        else{
            return response([
                "status"=>false,
                "result"=>$this->Admin_Auth_result_error,
                "error"=>$this->Admin_Auth_error,

            ],200);
        }

    }

    public function CompanyGetReachedParticipateEvent(Request $request){
        if(Auth::check())
        {




            if(Auth::user()->platform==$this->platform1)
            {
                $input=$request->all();
                return (new ParticipateController)->GetReachedParticipateEvent($input);
            }
            else{
                return response([
                    "status"=>false,
                    "result"=>$this->Admin_Auth_result_error,
                    "error"=>$this->Admin_Auth_error,

                ],200);
            }
        }
        else{
            return response([
                "status"=>false,
                "result"=>$this->Admin_Auth_result_error,
                "error"=>$this->Admin_Auth_error,

            ],200);
        }

    }
    public function CompanyGetParticipatedHist(Request $request){
        if(Auth::check())
        {




            if(Auth::user()->platform==$this->platform1)
            {
                $input=$request->all();
                return (new MyHistoryController)->GetParticipatedHist($input);
            }
            else{
                return response([
                    "status"=>false,
                    "result"=>$this->Admin_Auth_result_error,
                    "error"=>$this->Admin_Auth_error,

                ],200);
            }
        }
        else{
            return response([
                "status"=>false,
                "result"=>$this->Admin_Auth_result_error,
                "error"=>$this->Admin_Auth_error,

            ],200);
        }

    }
    public function CompanyTopupUser(Request $request){//add money to your country
        if(Auth::check())
        {




            if(Auth::user()->platform==$this->platform1)
            {
                $input=$request->all();
                return (new TopupController)->TopupUser($input);
            }
            else{
                return response([
                    "status"=>false,
                    "result"=>$this->Admin_Auth_result_error,
                    "error"=>$this->Admin_Auth_error,

                ],200);
            }
        }
        else{
            return response([
                "status"=>false,
                "result"=>$this->Admin_Auth_result_error,
                "error"=>$this->Admin_Auth_error,

            ],200);
        }

    }
    public function CompanyTopupEditBalance(Request $request){//add money to your country
        if(Auth::check())
        {




            if(Auth::user()->platform==$this->platform1)
            {
                $input=$request->all();
                return (new TopupController)->EditBalance($input);
            }
            else{
                return response([
                    "status"=>false,
                    "result"=>$this->Admin_Auth_result_error,
                    "error"=>$this->Admin_Auth_error,

                ],200);
            }
        }
        else{
            return response([
                "status"=>false,
                "result"=>$this->Admin_Auth_result_error,
                "error"=>$this->Admin_Auth_error,

            ],200);
        }

    }
    public function CompanyTopupBalanceUser(Request $request){//add money to your country
        if(Auth::check())
        {




            if(Auth::user()->platform==$this->platform1)
            {
                $input=$request->all();
                return (new TopupController)->GetBalanceUser($input);
            }
            else{
                return response([
                    "status"=>false,
                    "result"=>$this->Admin_Auth_result_error,
                    "error"=>$this->Admin_Auth_error,

                ],200);
            }
        }
        else{
            return response([
                "status"=>false,
                "result"=>$this->Admin_Auth_result_error,
                "error"=>$this->Admin_Auth_error,

            ],200);
        }

    }
    public function CompanyTopupBalanceHistUser(Request $request){//add money to your country
        if(Auth::check())
        {




            if(Auth::user()->platform==$this->platform1)
            {
                $input=$request->all();
                return (new MyHistoryController)->BalanceHistUser($input);
            }
            else{
                return response([
                    "status"=>false,
                    "result"=>$this->Admin_Auth_result_error,
                    "error"=>$this->Admin_Auth_error,

                ],200);
            }
        }
        else{
            return response([
                "status"=>false,
                "result"=>$this->Admin_Auth_result_error,
                "error"=>$this->Admin_Auth_error,

            ],200);
        }



    }
    public function CompanyTopupRedeemBalance(Request $request){//add money to your country
        if(Auth::check())
        {




            if(Auth::user()->platform==$this->platform1)
            {
                $input=$request->all();
                return (new TopupController)->RedeemBalance($input);
            }
            else{
                return response([
                    "status"=>false,
                    "result"=>$this->Admin_Auth_result_error,
                    "error"=>$this->Admin_Auth_error,

                ],200);
            }
        }
        else{
            return response([
                "status"=>false,
                "result"=>$this->Admin_Auth_result_error,
                "error"=>$this->Admin_Auth_error,

            ],200);
        }



    }
    public function CompanyTopupRedeemBonus(Request $request){//add money to your country
        if(Auth::check())
        {




            if(Auth::user()->platform==$this->platform1)
            {
                $input=$request->all();
                return (new TopupController)->RedeemBonus($input);
            }
            else{
                return response([
                    "status"=>false,
                    "result"=>$this->Admin_Auth_result_error,
                    "error"=>$this->Admin_Auth_error,

                ],200);
            }
        }
        else{
            return response([
                "status"=>false,
                "result"=>$this->Admin_Auth_result_error,
                "error"=>$this->Admin_Auth_error,

            ],200);
        }



    }


}
