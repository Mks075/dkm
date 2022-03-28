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
Auth::routes();
Route::get('/', 'Frontend\FrontendController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('bhome');



// Backend User  Routes Complete
Route::prefix('user')->group(function(){
    Route::get('/view','Backend\userController@userView')->name('user.view');
    Route::get('/add','Backend\userController@userAdd')->name('user.add');
    Route::post('/store','Backend\userController@userStore')->name('user.store');
    Route::get('/edit/{id}','Backend\userController@userEdit')->name('user.edit');
    Route::post('/update/{id}','Backend\userController@userUpdate')->name('user.update');
    Route::get('/delete/{id}','Backend\userController@userDelete')->name('user.delete');
});

// Logo Left Routes
Route::prefix('logoLeft')->group(function(){
    Route::get('view','Backend\LogoLeftController@LogoLeftView')->name('logoLeft.view');
    Route::get('add','Backend\LogoLeftController@LogoLeftAdd')->name('logoLeft.add');
    Route::post('store','Backend\LogoLeftController@LogoLeftStore')->name('logoLeft.store');
    Route::get('edit/{id}','Backend\LogoLeftController@LogoLeftEdit')->name('logoLeft.edit');
    Route::post('update/{id}','Backend\LogoLeftController@LogoLeftUpdate')->name('logoLeft.update');
    Route::get('delete/{id}','Backend\LogoLeftController@LogoLeftDelete')->name('logoLeft.delete');
});

// BG Image Routes
Route::prefix('BGImage')->group(function(){
    Route::get('view','Backend\BGImageController@BGImageView')->name('BGImage.view');
    // Route::get('add','Backend\LogoController@LAdd')->name('logos.add');
    // Route::post('store','Backend\LogoController@LStore')->name('logos.store');
    // Route::get('edit/{id}','Backend\LogoController@LEdit')->name('logos.edit');
    // Route::post('update/{id}','Backend\LogoController@LUpdate')->name('logos.update');
    // Route::get('delete/{id}','Backend\LogoController@LDelete')->name('logos.delete');
});

// Route::get('/home', 'HomeController@index')->name('home');




// Route::prefix('users')->group(function(){
//     Route::get('view','Backend\UserViewController@userview')->name('users.view');
//     Route::get('add','Backend\UserViewController@userAdd')->name('users.add');
//     Route::post('store','Backend\UserViewController@userStore')->name('users.store');
//     Route::get('edit/{id}','Backend\UserViewController@userEdit')->name('users.edit');
//     Route::post('update/{id}','Backend\UserViewController@userUpdate')->name('users.update');
//     Route::get('delete/{id}','Backend\UserViewController@userDelete')->name('users.delete');
// });