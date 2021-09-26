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

Route::get('/', 'HomeController@index')->name('Home');
Route::get('/post/{id}','PostController@siglepost')->name('single');
Route::get('/post-video/{id}','VideoController@siglepost')->name('single-video');
Route::get('/allvideos','VideoController@allpost')->name('all-video');
Route::get('/allpost','PostController@allpost')->name('all-post');
Route::get('/bayaan/{id}','BayaanController@siglepost')->name('single-bayaan');
Route::get('/allbayaan','BayaanController@allbayaan')->name('all-bayaan');
Route::get('/form','FormController@index')->name('form');
Route::get('/news','HomeController@habaru')->name('habaru');
Route::get('/report','HomeController@report')->name('report');
Route::get('/event','HomeController@event')->name('event');
Route::get('/bayaan','HomeController@bayaan')->name('bayan');
Route::get('/videos','HomeController@video')->name('videos');
Route::post('/join','FormController@store')->name('join');
Route::post('/store-comment','CommentController@storeComment')->name('create-comment');
Route::post('posts', 'PostController@postPost')->name('posts.post');
Route::get('user/profile/{id}', 'UserController@userProfile')->name('user.profile');

Route::get('posts/tag/{tag}', 'HomeController@tag')->name('user.tag');

Route::get('posts/neyngunu', 'HomeController@unknown')->name('unknown');


Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    Artisan::call('view:clear');


    return "Cache is cleared";
});
Route::get('/wishlist','SessionController@getWishlist')->name('wishlist');
Route::get('/session/set/{id}','SessionController@storeSessionData');
Route::get('/session/delete','SessionController@deleteSessionData');
Route::get('/add-to-cart/{id}','SessionController@getAddToCart')->name('addtocart');
Route::delete('remove-from-cart', 'SessionController@remove')->name('removecart');

Auth::routes();

//user dashboard
Route::middleware(['web'])->group(function () {
    Route::get('/dashboard', 'UserController@index')->name('userDashboard');

    Route::get('/dashboard/recipe', 'UserController@form')->name('recipeForm');
    Route::post('/dashboard/create-post','UserController@store')->name('create-userpost');
    Route::get('/dashboard/posts/{id}','UserController@destroy')->name('delete-post');
    Route::get('/dashboard/post/{id}/edit','UserController@editPost')->name('userpost-edit');
    Route::put('/dashboard/post/update/{id}','UserController@updatePost')->name('userpost-update');




});

//admin Dashboard
Route::group(['middleware' => 'admin'], function () {

//admin routs
//Admin Routes
    Route::get('/admin/dashboard', 'DashboardController@index')->name('dashboard');

    Route::get('/admin/dashboard/posts', 'PostController@index')->name('all-posts');
    Route::get('/admin/dashboard/post/create', 'PostController@create')->name('createform');
    Route::post('/admin/dadhboard/create-post','PostController@store')->name('create-post');
    Route::get('/admin/dashboard/posts/{id}','PostController@destroy')->name('delete-id');
    Route::get('/admin/dashboard/post/{id}/edit','PostController@editPost')->name('post-edit');
    Route::put('/admin/dashboard/post/update/{id}','PostController@updatePost')->name('post-update');

    Route::get('/admin/dashboard/ingredient/{id}','IngredientController@destroy')->name('delete-ing');



    Route::get('/admin/dashboard/categories','CategoryController@index')->name('all-categories');
    Route::post('/admin/dashboard/store-category','CategoryController@storeCategory')->name('create-category');
    Route::get('/admin/dashboard/create-category','CategoryController@createCategory');
    Route::put('/admin/category/update/{id}','CategoryController@updateCategory')->name('category-update');
    Route::get('/admin/category/{id}/edit','CategoryController@editCategory')->name('category-edit');
    Route::put('/admin/category/update/{id}','CategoryController@updateCategory')->name('category-update');
    Route::get('/admin/dashboard/categories/{id}','CategoryController@destroy')->name('delete-category');

    Route::get('/admin/dashboard/video/create', 'VideoController@createvideo')->name('createvideo');
    Route::post('/admin/dadhboard/create-video','VideoController@storevideo')->name('create-video');
    Route::get('/admin/dashboard/video/index', 'VideoController@index')->name('video');
    Route::get('/admin/dashboard/video/{id}','VideoController@destroy')->name('delete-video');
    Route::get('/admin/dashboard/video/{id}/edit','VideoController@editVideo')->name('video-edit');
    Route::put('/admin/dashboard/video/update/{id}','VideoController@updateVideo')->name('video-update');


    Route::get('/admin/dashboard/bayaan/create', 'BayaanController@create')->name('bayaanform');
    Route::post('/admin/dadhboard/create-bayaan','BayaanController@store')->name('create-bayaan');
    Route::get('/admin/dashboard/bayaan/index', 'BayaanController@index')->name('bayaan');
    Route::get('/admin/dashboard/bayaan/{id}','BayaanController@destroy')->name('delete-bayaan');
    Route::get('/admin/dashboard/bayaan/{id}/edit','BayaanController@editBayaan')->name('bayaan-edit');
    Route::put('/admin/dashboard/bayaan/update/{id}','BayaanController@updateBayaan')->name('bayaan-update');


//Slider
    Route::get('/admin/dashboard/slider/create', 'SliderController@create')->name('slider-form');
    Route::get('/admin/dashboard/slider/index', 'SliderController@index')->name('slider-index');
    Route::post('/admin/dadhboard/create-slider','SliderController@store')->name('create-slider');
    Route::get('/admin/dashboard/slider/{id}','SliderController@destroy')->name('delete-slider');
    Route::get('/admin/dashboard/slider/{id}/edit','SliderController@editSlide')->name('slide-edit');
    Route::put('/admin/dashboard/slider/update/{id}','SliderController@updateSlide')->name('slide-update');


    Route::get('/admin/dashboard/setting/{id}/edit','SitesettingController@editSitesetting')->name('sitesetting-edit');
    Route::put('/admin/dashboard/setting/update/{id}','SitesettingController@updateSitesetting')->name('sitesetting-update');

    Route::get('/admin/dashboard/register', 'DashboardController@adminregister')->name('dashboard-register');

    Route::get('/admin/dashboard/event', 'EventController@index')->name('dashboard-events');
    Route::get('/admin/dashboard/create-event','EventController@createEvent')->name('store-event');
    Route::post('/admin/dashboard/store-event','EventController@storeEvent')->name('create-event');
    Route::get('/admin/event/{id}/edit','EventController@editEvent')->name('event-edit');
    Route::put('/admin/event/update/{id}','EventController@updateEvent')->name('event-update');
    Route::get('/admin/dashboard/event/{id}','EventController@destroy')->name('delete-event');

    Route::get('/admin/dashboard/tags','TagController@index')->name('all-tags');
    Route::post('/admin/dashboard/store-tag','TagController@storeTag')->name('create-tag');
    Route::get('/admin/dashboard/create-tag','TagController@createTag');
    Route::put('/admin/tag/update/{id}','TagController@updateTag')->name('tag-update');
    Route::get('/admin/tag/{id}/edit','TagController@editTag')->name('tag-edit');
    Route::get('/admin/dashboard/tags/{id}','TagController@destroy')->name('delete-tag');

});



