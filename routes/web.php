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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/comp', function () {
    return view('companies');
});


Route::get('/company', "HomeController@get_company");
Route::get('/comp', 'HomeController@get_comp')->name('comp');
Route::get('/surveys', "HomeController@get_survey");
Route::get('/questions', "HomeController@get_questions");

Route::post('/company', "HomeController@post_company");
Route::post('/surveys', "HomeController@post_survey");
Route::post('/questions', "HomeController@post_questions");



/*Route::get('/c', function () {
    echo \App\Company::all();

    echo \App\Options::all();
});*/
Route::get('/c', "HomeController@get_c");
Route::get('/inf', function () {
    return view('inf');
   /* echo \App\Company::all();
    echo \App\Options::all();*/
});




Route::get('/companyy', "HomeController@get_companyy");



Route::get('/surveys', "HomeController@get_quest")->name('question');

//Route::get('/options', "Contr@get_options");
//Route::any('/options', "Contr@post_options");

//Route::get('/surveys', 'HomeController@data')->name('data');

