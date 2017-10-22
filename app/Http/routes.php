<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', [
    'as' => 'home', 'uses' => 'HomeController@home'
]);

/* 關於阿蘇 */
Route::get('/about', [
   'as' => 'about', 'uses' => 'HomeController@about'
]);


/* 調和導師 */
Route::get('/team/創意總監', [
   'as' => 'team.ceo', 'uses' => 'TeamController@ceo'
]);

Route::get('/team/教育總監', [
   'as' => 'team.educationDirector', 'uses' => 'TeamController@educationDirector'
]);

/* 個人調和課程 */

/* 團體調和課程 */
Route::get('/groupClass/BrainGym®丹尼遜健腦操26式體驗工作坊', [
   'as' => 'class.workshop26', 'uses' => 'ClassController@workshop26'
]);

Route::get('/groupClass/BrainGym®101丹尼遜基礎健腦操國際證書課程', [
    'as' => 'class.basicBrainGymCertification', 'uses' => 'ClassController@basicBrainGymCertification'
]);

Route::get('/groupClass/BrainGym®101丹尼遜基礎健腦操國際證書親子班', [
    'as' => 'class.basicBrainGymFamilyCertification', 'uses' => 'ClassController@basicBrainGymFamilyCertification'
]);

Route::get('/groupClass/對稱塗鴉遊戲-全腦視覺之窗', [
    'as' => 'class.graffiti', 'uses' => 'ClassController@graffiti'
]);

Route::get('/groupClass/優勢的因素工作坊', [
    'as' => 'class.advantageFactor', 'uses' => 'ClassController@advantageFactor'
]);

Route::get('/groupClass/國際肌動學院證書研習課程~Touch-For-Health~觸康健®', [
    'as' => 'class.touchForHealthCertification', 'uses' => 'ClassController@touchForHealthCertification'
]);

Route::get('/groupClass/觸康健®目標設定與中國五行隱喻', [
   'as' => 'class.fiveElements', 'uses' => 'ClassController@fiveElements'
]);