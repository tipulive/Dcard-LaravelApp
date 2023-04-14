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
Route::post('/AdminLoginPhone','AdminController@AdminLoginPhone')->name(' AdminLoginPhone');
Route::post('/CreateCompany','AdminController@AdminCreateCompany')->name('AdminCreateCompany');

//Route::get('/testauth','TestController@testauth')->name('testauth');

Route::middleware('auth:sanctum')->group( function () {//here is to protect multiple route
    Route::get('/logout','AccountController@logout')->name('logout');

/*AdminData*/

/*Company*/
Route::get('/PrintCard','CompanyController@CompanyPrintCard')->name('CompanyPrintCard');
Route::post('/CreateUser','CompanyController@CompanyCreateUser')->name('CompanyCreateUser');
Route::post('/CreateUserAssign','CompanyController@CompanyCreateUserAssign')->name('CompanyCreateUserAssign');
Route::post('/EditUserAssign','CompanyController@CompanyEditUserAssign')->name('CompanyEditUserAssign');
Route::get('/GetNumberDetail','CompanyController@CompanyGetNumberDetail')->name('CompanyGetNumberDetail');
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

Route::get('/CountParticipateEvent','CompanyController@CompanyCountParticipateEvent')->name('CompanyCountParticipateEvent');
Route::get('/GetAllParticipateEvent','CompanyController@CompanyGetAllParticipateEvent')->name('CompanyGetAllParticipateEvent');
Route::get('/GetActiveParticipateEvent','CompanyController@CompanyGetActiveParticipateEvent')->name('CompanyGetActiveParticipateEvent');
Route::get('/GetReachedParticipateEvent','CompanyController@CompanyGetReachedParticipateEvent')->name('CompanyGetReachedParticipateEvent');
Route::get('/GetParticipatedHist','CompanyController@CompanyGetParticipatedHist')->name('CompanyGetParticipatedHist');
Route::get('/GetAllParticipatedHist','CompanyController@CompanyGetAllParticipatedHist')->name('CompanyGetAllParticipatedHist');

/*company topup User */

Route::post('/AddBalance','CompanyController@CompanyTopupUser')->name('CompanyTopupUser');
Route::post('/EditBalance','CompanyController@CompanyTopupEditBalance')->name('CompanyTopupEditBalance');
Route::post('/RedeemBalance','CompanyController@CompanyTopupRedeemBalance')->name('CompanyTopupRedeemBalance');
Route::post('/RedeemBonus','CompanyController@CompanyTopupRedeemBonus')->name('CompanyTopupRedeemBonus');
Route::get('/GetCompanyRecord','CompanyController@CompanyTopupGetCompanyRecord')->name('CompanyTopupGetCompanyRecord');
Route::get('/GetBalanceUser','CompanyController@CompanyTopupBalanceUser')->name('CompanyTopupBalanceUser');
Route::get('/GetBalanceHist','CompanyController@CompanyTopupBalanceHistUser')->name('CompanyTopupBalanceHistUser');
Route::get('/GetBalanceHistCreator','CompanyController@CompanyTopupBalanceHistCreator')->name('CompanyTopupBalanceHistCreator');

/*Quickie Bonus */
Route::post('/SetupQuickBonus','CompanyController@CompanyPartSetupQuickBonus')->name('CompanyPartSetupQuickBonus');
Route::get('/GetAllQuickBonus','CompanyController@CompanyPartGetAllQuickBonus')->name('CompanyPartGetAllQuickBonus');
Route::get('/SearchQuickBonus','CompanyController@CompanyPartSearchQuickBonus')->name('CompanyPartSearchQuickBonus');
Route::get('/SubmitQuickBonus','CompanyController@CompanyPartSubmitQuickBonus')->name('CompanyPartSubmitQuickBonus');
Route::get('/UpdateSubmitQuickBonus','CompanyController@CompanyPartUpdateSubmitQuickBonus')->name('CompanyPartUpdateSubmitQuickBonus');
Route::get('/ConfirmAllSubmitQuickBonus','CompanyController@CompanyPartConfirmAllSubmitQuickBonus')->name('ConfirmAllSubmitQuickBonus');
Route::get('/ConfirmOnlySubmitQuickBonus','CompanyController@CompanyPartConfirmOnlySubmitQuickBonus')->name('ConfirmOnlySubmitQuickBonus');
Route::get('/SearchSubmitQuickBonus','CompanyController@CompanyPartSearchSubmitQuickBonus')->name('CompanyPartSearchSubmitQuickBonus');
Route::get('/GetUidSubmitQuickBonus','CompanyController@CompanyPartGetUidSubmitQuickBonus')->name('CompanyPartGetUidSubmitQuickBonus');
Route::get('/DeleteAllSubmitQuickBonus','CompanyController@CompanyPartDeleteAllSubmitQuickBonus')->name('CompanyPartDeleteAllSubmitQuickBonus');
Route::get('/DeleteOnlySubmitQuickBonus','CompanyController@CompanyPartDeleteOnlySubmitQuickBonus')->name('CompanyPartDeleteOnlySubmitQuickBonus');
Route::get('/GetAllSubmitQuickBonus','CompanyController@CompanyPartGetAllSubmitQuickBonus')->name('CompanyPartGetAllSubmitQuickBonus');
Route::get('/CheckQuickBonus','CompanyController@CompanyPartCheckQuickBonus')->name('CompanyPartCheckQuickBonus');

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
