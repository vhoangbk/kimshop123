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

Route::get('/', [
    'as' => 'frontend.home',
    'uses' => 'Frontend\P3\I12Controller@index2'
]);

/**
 * tai nghe i11
 */
Route::get('/tai-nghe-i11', [
    'as' => 'frontend.p1.index',
    'uses' => 'Frontend\P1\P1Controller@index'
]);


Route::get('/tai-nghe-i11/thanks', [
    'as' => 'frontend.p1.thanks',
    'uses' => 'Frontend\P1\P1Controller@thanks'
]);

Route::post('/tai-nghe-i11/add-customer', [
    'as' => 'p1_add_customer',
    'uses' => 'Frontend\P1\P1Controller@addCustomer'
]);

/**
 * bs watch
 */
Route::get('/bs-watch', [
    'as' => 'frontend.p2.index',
    'uses' => 'Frontend\P2\MDWatchController@index'
]);

Route::post('/bs-watch/add-customer', [
    'as' => 'p2_add_customer',
    'uses' => 'Frontend\P2\MDWatchController@addCustomer'
]);

Route::get('/bs-watch/thanks', [
    'as' => 'frontend.p2.thanks',
    'uses' => 'Frontend\P2\MDWatchController@thanks'
]);

/**
 * tai nghe i12
 */
Route::get('/tai-nghe-i12', [
    'as' => 'frontend.p3.index',
    'uses' => 'Frontend\P3\I12Controller@index'
]);

Route::get('/tai-nghe-i12-2', [
    'as' => 'frontend.p3.index2',
    'uses' => 'Frontend\P3\I12Controller@index2'
]);

Route::get('/tai-nghe-i12-3', [
    'as' => 'frontend.p3.index3',
    'uses' => 'Frontend\P3\I12Controller@index3'
]);

Route::get('/tai-nghe-i12-4', [
    'as' => 'frontend.p3.index4',
    'uses' => 'Frontend\P3\I12Controller@index4'
]);

Route::post('/tai-nghe-i12/add-customer', [
    'as' => 'p3_add_customer',
    'uses' => 'Frontend\P3\I12Controller@addCustomer'
]);

Route::get('/tai-nghe-i12/thanks', [
    'as' => 'frontend.p3.thanks',
    'uses' => 'Frontend\P3\I12Controller@thanks'
]);


/**
 * loa bluetooth karaoke
 */
Route::get('/loa-bluetooth-karaoke', [
    'as' => 'frontend.p4.index',
    'uses' => 'Frontend\P4\P4Controller@index'
]);

Route::post('/loa-bluetooth-karaoke/add-customer', [
    'as' => 'p4_add_customer',
    'uses' => 'Frontend\P4\P4Controller@addCustomer'
]);

Route::get('/loa-bluetooth-karaoke/thanks', [
    'as' => 'frontend.p4.thanks',
    'uses' => 'Frontend\P4\P4Controller@thanks'
]);

/**
 * khan say nano
 */
Route::get('/khan-say-nano', [
    'as' => 'frontend.khansay.index',
    'uses' => 'Frontend\KhanSay\KhanSayController@index'
]);

Route::post('/khan-say-nano/add-customer', [
    'as' => 'khansay_add_customer',
    'uses' => 'Frontend\KhanSay\KhanSayController@addCustomer'
]);

Route::get('/khan-say-nano/thanks', [
    'as' => 'frontend.khansay.thanks',
    'uses' => 'Frontend\KhanSay\KhanSayController@thanks'
]);

/**
 * sip muji
 */
Route::get('/muji-japan', [
    'as' => 'frontend.sip.index',
    'uses' => 'Frontend\Sip\MujiController@index'
]);

Route::get('/muji-japan-2', [
    'as' => 'frontend.sip.index2',
    'uses' => 'Frontend\Sip\MujiController@index2'
]);

Route::post('/muji-japan/add-customer', [
    'as' => 'sip_add_customer',
    'uses' => 'Frontend\Sip\MujiController@addCustomer'
]);

Route::get('/muji-japan/thanks', [
    'as' => 'frontend.sip.thanks',
    'uses' => 'Frontend\Sip\MujiController@thanks'
]);

/**
 * dong ho kevin
 */
Route::get('/kevin-watch', [
    'as' => 'frontend.kevin.index',
    'uses' => 'Frontend\DongHo\KevinController@index'
]);

Route::post('/kevin-watch/add-customer', [
    'as' => 'kevin_add_customer',
    'uses' => 'Frontend\DongHo\KevinController@addCustomer'
]);

Route::get('/kevin-watch/thanks', [
    'as' => 'frontend.kevin.thanks',
    'uses' => 'Frontend\DongHo\KevinController@thanks'
]);

/**
 * sac nam cham phat sang
 */
Route::get('/cable', [
    'as' => 'frontend.cable.index',
    'uses' => 'Frontend\Cable\CableController@index'
]);

Route::get('/cable2', [
    'as' => 'frontend.cable.index',
    'uses' => 'Frontend\Cable\CableController@index2'
]);

Route::post('/cable/add-customer', [
    'as' => 'cable_add_customer',
    'uses' => 'Frontend\Cable\CableController@addCustomer'
]);

Route::get('/cable/thanks', [
    'as' => 'frontend.cable.thanks',
    'uses' => 'Frontend\Cable\CableController@thanks'
]);

Route::get('/cable/thanks2', [
    'as' => 'frontend.cable.thanks2',
    'uses' => 'Frontend\Cable\CableController@thanks2'
]);

/**
 * my pham mioskin
 */
Route::get('/mioskin', [
    'as' => 'frontend.mioskin.index',
    'uses' => 'Frontend\MyPham\MioskinController@index'
]);

Route::get('/mioskin2', [
    'as' => 'frontend.mioskin.index2',
    'uses' => 'Frontend\MyPham\MioskinController@index2'
]);

Route::post('/mioskin/add-customer', [
    'as' => 'mioskin_add_customer',
    'uses' => 'Frontend\MyPham\MioskinController@addCustomer'
]);

Route::get('/mioskin/thanks', [
    'as' => 'frontend.mioskin.thanks',
    'uses' => 'Frontend\MyPham\MioskinController@thanks'
]);

/**
 * giay da bo
 */
Route::get('/giay-da', [
    'as' => 'frontend.shoes.index',
    'uses' => 'Frontend\Shoes\ShoesController@index'
]);


Route::post('/giay-da/add-customer', [
    'as' => 'shoes_add_customer',
    'uses' => 'Frontend\Shoes\ShoesController@addCustomer'
]);

Route::get('/giay-da/thanks', [
    'as' => 'frontend.shoes.thanks',
    'uses' => 'Frontend\Shoes\ShoesController@thanks'
]);

Route::group(['middleware' => 'auth'], function () {

    /**
     * Customer
     */
    Route::get('/admin/customer', [
        'as' => 'admin_customer',
        'uses' => 'Admin\CustomerController@index'
    ]);

    Route::post('/admin/customer/update', [
        'as' => 'admin_update_customer',
        'uses' => 'Admin\CustomerController@update'
    ]);

    Route::post('/admin/customer/remove', [
        'as' => 'admin_remove_customer',
        'uses' => 'Admin\CustomerController@remove'
    ]);

    /**
     * Logout
     */
    Route::get('/admin/logout', function() {
        \Illuminate\Support\Facades\Auth::logout();
        return redirect('/admin/login');
    });

    Route::get('/admin', [
        'as' => 'admin_index',
        'uses' => 'Admin\AdminController@index'
    ]);

    /**
     * Promotion
     */
    Route::get('/admin/promotion', [
        'as' => 'admin_promotion',
        'uses' => 'Admin\PromotionController@index'
    ]);

    Route::post('/admin/promotion/update', [
        'as' => 'admin_update_promotion',
        'uses' => 'Admin\PromotionController@update'
    ]);

    Route::post('/admin/promotion/remove', [
        'as' => 'admin_remove_promotion',
        'uses' => 'Admin\PromotionController@remove'
    ]);

});

Route::group(['middleware' => 'guest'], function () {

    Route::any('/admin/login', [
        'as' => 'user_login',
        'uses' => 'Admin\UserController@login'
    ]);

});






