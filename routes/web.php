<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/req_login', function (Request $request){
    return view('page');
});
Route::post("/req_login", "PageController@req_login");


Route::get('/prog_logout', function (Request $request){
    return view('page');
});
Route::post("/prog_logout", "PageController@prog_logout");


Route::get('/changemenu', function (Request $request){
    return view('page');
});
Route::post("/changemenu", "PageController@changemenu");


Route::get('/insert_INPUTPLANNED', function (Request $request){
    return view('page');
});
Route::post("/insert_INPUTPLANNED", "PageController@insert_INPUTPLANNED");


Route::get('detail_deal/planned_id/{planned_id}/planned_name/{planned_name}/planned_email/{planned_email}/no_paket/{no_paket}/no_media_order/{no_media_order}/agency/{agency}/advertiser_product/{advertiser_product}/update_date/{update_date}/sales_id/{sales_id}/sales_name/{sales_name}/sales_email/{sales_email}/start_periode/{start_periode}/end_periode/{end_periode}/budget_deals/{budget_deals}/ket_budget_deals/{ket_budget_deals}/net_deals_per_eps/{net_deals_per_eps}/eps/{eps}/type_paket/{type_paket}/program/{program}/status_deals/{status_deals}', 'PageController@detail_deal')->name('request.manage');
Route::post("/detail_deal", "PageController@detail_deal");


Route::get('/page', 'PageController@index')->name('page.index');