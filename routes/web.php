<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/cleareverything', function () {
    $clearcache = Artisan::call('cache:clear');
    echo "Cache cleared<br>";

    $clearview = Artisan::call('view:clear');
    echo "View cleared<br>";

    $clearconfig = Artisan::call('config:cache');
    echo "Config cleared<br>";

    $cleardebugbar = Artisan::call('debugbar:clear');
    echo "Debug Bar cleared<br>";
});

Route::get('/', function () {return view('welcome');})->middleware('lang');
Route::get('/faq', function () {return view('faq');})->name('faq');


Route::get('/recharger-compte', function () {
    return view('recharger-compte');
})->middleware('lang')->name('recharger-compte');


Auth::routes();
Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/lang/{lang}', 'LangController@setLang');

    Route::get('/home/inscription', 'InscriptionController@index');
    Route::post('/home/inscriptions/ajouter','InscriptionController@ajouter');
     
});




Route::group(['prefix' => 'user', 'as' => 'user'], function () {
    Route::get('/', ['as' => '.index', 'uses' => 'UserController@index']);
    Route::get('/show/create',['as'=>'.show.create', 'uses' => 'UserController@create']);
    Route::post('/create', ['as' => '.create', 'uses' => 'UserController@store']);
    Route::get('/destroy/{id_user}', ['as' => '.destroy', 'uses' => 'UserController@destroy']);    
    Route::get('/remise/{id_user}', ['as' => '.destroy', 'uses' => 'UserController@destroy']);    
    Route::get('/edit/{id_user}', ['as' => '.edit', 'uses' => 'UserController@edit']);
    Route::get('/show/{id_user}', ['as' => '.show', 'uses' => 'UserController@show']);
    Route::post('/update/{id_user}', ['as' => '.update', 'uses' => 'UserController@update']);    
});


Route::group(['prefix' => 'operation', 'as' => 'operation'], function () {
    Route::get('/', ['as' => '.index', 'uses' => 'OperationController@index']);

    Route::get('/rechargement', ['as' => '.recharger.index', 'uses' => 'OperationController@indexRechargement']);
    Route::get('/recharger',['as'=>'.recharger.show', 'uses' => 'OperationController@rechargerShow']);
    Route::post('/recharger',['as'=>'.recharger.action', 'uses' => 'OperationController@rechargerAction']);



    Route::get('/transfert', ['as' => '.transferer.index', 'uses' => 'OperationController@indexRechargement']);
    Route::get('/transferer',['as'=>'.transferer.show', 'uses' => 'OperationController@transfererShow']);
    Route::post('/transferer',['as'=>'.transferer.action', 'uses' => 'OperationController@transfererAction']);


});



Route::group(['prefix' => 'partenaire', 'as' => 'partenaire'], function () {
    Route::get('/', ['as' => '.index', 'uses' => 'PartenaireController@index']);
    Route::get('/rechercher',['as'=>'.rechercher', 'uses' => 'PartenaireController@rechercher']);
    Route::post('/create', ['as' => '.store', 'uses' => 'PartenaireController@store']);
    Route::get('/destroy/{id_demande}', ['as' => '.destroy', 'uses' => 'PartenaireController@destroy']); 
    Route::get('/edit/{id_demande}', ['as' => '.edit', 'uses' => 'PartenaireController@edit']);
    Route::post('/update/{partenaire}', ['as' => '.update', 'uses' => 'PartenaireController@update']);        
});


Route::post('/sms/send', ['as' => 'send.sms', 'uses' => 'SmsController@send']);
Route::post('/sms/send/bulk', ['as' => 'send.sms.bulk', 'uses' => 'SmsController@sendBulk']);
// send.sms.bulk
Route::get('/sms/create/{type}', ['as' => 'send.sms.view', 'uses' => 'SmsController@sendView']);
Route::get('/sms/create/groupe', ['as' => 'send.sms.groupe.view', 'uses' => 'SmsController@sendGroupeView']);
Route::get('/sms', ['as' => 'sms.index', 'uses' => 'SmsController@index']);

Route::get('/setting', ['as' => 'setting', 'uses' => 'SettingController@index']);


Route::get('/fichier', ['as' => 'fichier.index', 'uses' => 'HomeController@fichiers']);
Route::get('/fichier/download/{fichier}', ['as' => 'fichier.download', 'uses' => 'HomeController@downloadFile']);
