<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('testPostData', 'TestController@testPostData');
Route::get('testGetData', 'TestController@testGetData');
Route::get('testPDf', 'TestController@testPDf');

/*test Encryption */

/* Users Authentication*/
Route::post('/UserRegisterEmail','UserController@UserRegisterEmail')->name('UserRegisterEmail');
Route::post('/UserLoginEmail','UserController@UserLoginEmail')->name('UserLoginEmail');


/* others Authentication*/
Route::post('/AdminRegisterEmail','AdminController@AdminRegisterEmail')->name('AdminRegisterEmail');
Route::post('/AdminLoginEmail','AdminController@AdminLoginEmail')->name('AdminLoginEmail');

//Route::get('/testauth','TestController@testauth')->name('testauth');

Route::middleware('auth:sanctum')->group( function () {//here is to protect multiple route
    Route::get('/logout','AccountController@logout')->name('logout');

/*AdminData*/
Route::post('/CreateCompany','AdminController@AdminCreateCompany')->name('AdminCreateCompany');

/*Company*/
Route::post('/CreateUser','CompanyController@CompanyCreateUser')->name('CompanyCreateUser');
Route::post('/CreateUserAssign','CompanyController@CompanyCreateUserAssign')->name('CompanyCreateUserAssign');
Route::get('/GetCardDetail','CompanyController@CompanyGetCardDetail')->name('CompanyGetCardDetail');
Route::post('/CreateCard','CompanyController@CompanyCreateCard')->name('CompanyCreateCard');
Route::post('/CreateMultipleCard','CompanyController@CompanyCreateMultipleCard')->name('CompanyCreateMultipleCard');
Route::post('/AssignCard','CompanyController@CompanyAssignCard')->name('CompanyAssignCard');
Route::get('/CompanySyncCardDownload','CompanyController@CompanySyncCardDownload')->name('CompanySyncCardDownload');
Route::post('/CompanySyncUpload','CompanyController@CompanySyncUpload')->name('CompanySyncUpload');
Route::post('/CreatePromotionEvent','CompanyController@CompanyCreatePromotionEvent')->name('CompanyCreatePromotionEvent');
Route::get('/GetAllPromotionEvent','CompanyController@CompanyGetAllPromotionEvent')->name('CompanyGetAllPromotionEvent');
Route::post('/SetPromotionEventStatus','CompanyController@CompanySetPromotionEventStatus')->name('CompanySetPromotionEventStatus');
/*company make user Participate */
Route::post('/ParticipateEvent','CompanyController@CompanyParticipateEvent')->name('CompanyParticipateEvent');
Route::post('/ParticipateEditEvent','CompanyController@CompanyParticipateEditEvent')->name('CompanyParticipateEditEvent');
Route::post('/ParticipateRedeemed','CompanyController@CompanyParticipateRedeemed')->name('CompanyParticipateRedeemed');
Route::get('/CountParticipateEvent','CompanyController@CompanyCountParticipateEvent')->name('CompanyCountParticipateEvent');
Route::get('/GetAllParticipateEvent','CompanyController@CompanyGetAllParticipateEvent')->name('CompanyGetAllParticipateEvent');
Route::get('/GetActiveParticipateEvent','CompanyController@CompanyGetActiveParticipateEvent')->name('CompanyGetActiveParticipateEvent');
Route::get('/GetReachedParticipateEvent','CompanyController@CompanyGetReachedParticipateEvent')->name('CompanyGetReachedParticipateEvent');

/*company topup User */

Route::post('/Topup','CompanyController@CompanyTopupUser')->name('CompanyTopupUser');
Route::get('/GetBalanceUser','CompanyController@CompanyTopupBalanceUser')->name('CompanyTopupBalanceUser');
Route::get('/GetBalanceHist','CompanyController@CompanyTopupBalanceHistUser')->name('CompanyTopupBalanceHistUser');

/*safari*/
Route::get('/SafariGetAll','CompanyController@CompanySafariGetAll')->name('CompanySafariGetAll');
Route::post('/SafariCreate','CompanyController@CompanySafariCreate')->name('CompanySafariCreate');
Route::post('/SafariEdit','CompanyController@CompanySafariEdit')->name('CompanySafariEdit');
Route::post('/SafariDelete','CompanyController@CompanySafariDelete')->name('CompanySafariDelete');

Route::get('/SafariItemSearch','CompanyController@CompanySafariItemSearch')->name('CompanySafariItemSearch');
Route::post('/SafariAddItem','CompanyController@CompanySafariAddItem')->name('CompanySafariAddItem');
Route::post('/SafariEditItem','CompanyController@CompanySafariEditItem')->name('CompanySafariEditItem');
Route::post('/SafariDeleteItem','CompanyController@CompanySafariDeleteItem')->name('CompanySafariDeleteItem');
Route::post('/SafariSpent','CompanyController@CompanySafariSpent')->name('CompanySafariSpent');
Route::get('/SafariCalculate','CompanyController@CompanySafariCalculate')->name('CompanySafariCalculate');


/*Users */




/*-Participate */







});
