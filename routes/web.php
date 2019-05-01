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

//Cambiar idioma
Route::get('/set_lenguage/{lang}', 'Controller@setLanguage')->name('set_language');

//Social Routes
Route::get('login/{driver}', 'Auth\LoginController@redirectToProvider')->name('social_auth');
Route::get('login/{driver}/callback', 'Auth\LoginController@handleProviderCallback');

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::group(['prefix' => 'courses'], function () {
    Route::get('/{course}', 'CourseController@show')->name('courses.detail');
});


Route::group(['middleware' => ['auth']], function () {
    Route::group(['prefix' => 'subscriptions'], function () {
        Route::get('/plans', 'SubscriptionController@plans')->name('subscriptions.plans');
        Route::post('/process_subscriptions', 'SubscriptionController@processSubscriptions')->name('subscriptions.process_subscription');
        Route::get('/admin', 'SubscriptionController@admin')->name('subscriptions.admin');
    
        Route::post('/resume', 'SubscriptionController@resume')->name('subscriptions.resume');
        Route::post('/cancel', 'SubscriptionController@cancel')->name('subscriptions.cancel');
    
    });

    Route::group(['prefix' => 'invoices'], function () {
        Route::get('/admin', 'InvoiceController@admin')->name('invoices.admin');
        Route::get('/{invoice}/download', 'InvoiceController@download')->name('invoices.download');
    });

});

//Ruta para las imagenes
Route::get('/images/{path}/{attachment}', function ($path, $attachment) {
    $file = sprintf('storage/%s/%s', $path, $attachment);
    if (File::exists($file)) {
        return \Intervention\Image\Facades\Image::make($file)->response();
    }
});
