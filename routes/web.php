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

//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');


// Authentication Routes...
Route::get('admin-panel', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('admin-panel', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout')->middleware('auth');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout')->middleware('auth');



// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->middleware('auth');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->middleware('auth');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->middleware('auth');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->middleware('auth');


// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register')->middleware('auth');
Route::post('register', 'Auth\RegisterController@register')->middleware('auth');

//routes backend


/************************************home page **********************************/

Route::resource('slider', 'Admin\SliderController')->middleware('auth');
//Route::get('/choose_elamin', 'Admin\SliderController@view')->name('view');


/************************************blog**********************************/

Route::resource('blog', 'Admin\BlogController')->middleware('auth');
Route::get('/portflio', 'Admin\BlogController@view')->name('view');
Route::get('/portfliodetails/{id}', 'Admin\BlogController@portfliodetails')->name('portfliodetails');


/**********************************aboutus***********************************/
Route::resource('aboutus', 'Admin\AboutUsController')->middleware('auth');
Route::get('/about_us', 'Admin\AboutUsController@view')->name('view');



/************************************choose company **********************************/

Route::resource('choosecompany', 'Admin\ChooseCompanyController')->middleware('auth');
Route::get('/choose_elamin', 'Admin\ChooseCompanyController@view')->name('view');


/************************************blog**********************************/


/**********************************services***********************************/
Route::resource('services', 'Admin\ServicesController')->middleware('auth');

Route::get('/service_3m', 'Admin\ServicesController@view')->name('view');

Route::get('/servicedetails/{id}', 'Admin\ServicesController@viewservicedetails')->name('servicedetails');




/**********************************news***********************************/
Route::resource('news', 'Admin\NewsController')->middleware('auth');

Route::get('/news&deal', 'Admin\NewsController@view')->name('view');


/**********************************our clients***********************************/
Route::resource('clients', 'Admin\ClientsController')->middleware('auth');

Route::get('/our_clients', 'Admin\ClientsController@view')->name('view');



/**********************************our team***********************************/
Route::resource('team', 'Admin\TeamController')->middleware('auth');

Route::get('/our_team', 'Admin\TeamController@view')->name('view');

/**********************************faq***********************************/
Route::resource('faq', 'Admin\FAQController')->middleware('auth');

Route::get('/questions', 'Admin\FAQController@view')->name('view');

/**********************************contactuser***********************************/
Route::resource('contactuser', 'Admin\ContactUsController')->middleware('auth');

Route::get('/contactus', 'Admin\ContactUsController@view')->name('view');

/**********************************Terms&conditions***********************************/
Route::resource('terms', 'Admin\TermsController')->middleware('auth');

/**********************************privacypolicies***********************************/
Route::resource('privacypolicies', 'Admin\Privacy_PoliciesController')->middleware('auth');



Route::resource('/website','Admin\WebsiteController');

/******************************************************************** */


Route::get('/sendemail', 'Admin\SendEmailController@index');
Route::post('/sendemail/send', 'Admin\SendEmailController@send');



/**********************************seo***********************************/
Route::get('/testseo', 'Admin\SeoController@index')->name('seo_index');
Route::post('/testseo/update', 'Admin\SeoController@update')->name('seo_update');

/*  ***************************************************************** */

Route::resource('soicalmedia', 'Admin\Privacy_PoliciesController')->middleware('auth');

Route::get('/soicalmedia', 'Admin\Privacy_PoliciesController@index')->name('soicalmedia_index');
Route::post('/soicalmedia/update', 'Admin\Privacy_PoliciesController@update')->name('soicalmedia_update');



Route::get('/ChangeLang', 'Admin\WebsiteController@ChangeLang')->name('ChangeLang');
