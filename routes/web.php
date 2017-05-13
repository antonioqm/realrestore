<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    // return view('welcome');
    return view('home');
})->name('home');


// Layout Admin
Route::get('/admin/index', function () {
    // return view('welcome');
    return view('admin.app');
});



Route::get('/home', function () {
    // return view('welcome');
    return view('home');
});
// Route::get('/home', 'HomeController@index');

// Logout
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
    

Auth::routes();

// proteção de login
Route::group(['middleware' => 'auth'], function () {
    
  Route::group([
    'as' => 'admin.', 
    'prefix' => 'admin',
    'middleware' => 'auth'], function () {  
        // Crud Professional
        Route::resource('professional', 'ProfessionalController');
        Route::resource('professionals', 'AdminProfessionalController');
        Route::resource('state', 'StateController');
        Route::resource('city', 'CityController');
        Route::resource('phone', 'PhoneController');
        Route::resource('specialty', 'SpecialtyController');
    });

});


// ROTAS DO GUIA DO USUÁRIO
Route::group(['prefix' => 'guia_medico/'], function() {
    Route::get('estados/{name}','GuiaMedicoController@guideState')->name('state');
    Route::get('estados/{state}/cidades/{city}/{id}','GuiaMedicoController@guideCity')->name('city');
    Route::get('cidades/{city}/especialidades/{specialty}/{id}/{city_id}','GuiaMedicoController@guideSpecialty')->name('specialty');
    Route::get('credenciado/', 'GuiaMedicoController@guideMedical');
    Route::get('especialidade/{nome}', 'GuiaMedicoController@guideSearchSpecialty');
    Route::get('guia_medico_impressao', 'GuiaMedicoController@guideDownload');
    Route::post('store', 'GuiaMedicoController@store');
    // Route::get('profissional/{name}', 'GuiaMedicoController@index');
});

// Rotas do MENU
Route::group(['prefix' => 'site'], function() {
    Route::get('real', 'MenuController@real')->name('real');
    Route::get('premio', 'MenuController@premio')->name('premio');
    Route::get('convenios', 'MenuController@convenios')->name('convenios');
    Route::get('parceiros', 'MenuController@parceiros')->name('parceiros');
    Route::get('faleconosco', 'MenuController@fale')->name('fale');
    Route::get('duvidas', 'MenuController@duvidas')->name('duvidas');
    Route::get('premios', 'MenuController@premios')->name('premios');
    Route::get('resolve', 'MenuController@resolve')->name('resolve');
});


// Envio de email
Route::post('/send/mail/', 'MailController@store')->name('mailCall');
Route::post('/send/mail/fale', 'MailController@fale')->name('mailFale');












