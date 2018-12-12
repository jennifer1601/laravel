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

// home
Route::get('/','indexController@index')->name('home');

// about us
Route::get('/about','indexController@about')->name('about');

// service
Route::get('/services','indexController@services')->name('services');

// team
Route::get('/team','indexController@team')->name('team');

// contact us
Route::get('/contact','indexController@contact')->name('contact');

// achievement
Route::get('/achievement','indexController@achievement')->name('achievement');

// blogdetail
Route::get('/blog/{id}','indexController@blog')->name('blog');

//admin
Route::prefix('admin')->group(function () {
    Route::get('/login', function () {
        return view('/admin/login');
    })->name('login');
    
    Route::post('/login','AuthController@login')->name('checkLogin');
    
    Route::get('/register', function () {
        return view('/admin/register');
    })->name('register');
    
    Route::post('/register','AuthController@register')->name('createRegister');
    
    //managepost
    Route::get('managepost', 'DashboardAdminController@showPost');
    Route::post('managepost/{id?}','DashboardAdminController@setPost')->name('savepost');
    Route::get('managepost/{id}', 'DashboardAdminController@showEditPost')->name('showeditpost');
    Route::get('managepost/delete/{id}', 'DashboardAdminController@deletePost')->name('deletepost');
    
    Route::get('/menumanagement','DashboardAdminController@showMenus')->name('showMenus');
    Route::post('/menumanagement','DashboardAdminController@setMenu')->name('setMenu');
    Route::get('/menumanagement/{menuid}','DashboardAdminController@showEditMenu')->name('showEditMenu');
    Route::post('/menumanagement/{menuid}','DashboardAdminController@editMenu')->name('editMenu');
    Route::get('/menumanagement/delete/{menuid}','DashboardAdminController@deleteMenu')->name('deleteMenu');

    Route::get('/rolesmanagement','DashboardAdminController@showRoles')->name('showRoles');
    Route::get('/rolesmanagement/{rolesid}','DashboardAdminController@showEditRoles')->name('showEditRoles');
    Route::post('/rolesmanagement','DashboardAdminController@setRole')->name('setRole');
    Route::post('/rolesmanagement/{rolesid}','DashboardAdminController@setEditRole')->name('setEditRole');
    Route::get('/rolesmanagement/delete/{rolesid}','DashboardAdminController@deleteRole')->name('deleteRoles');

    Route::get('/accessmanagement','DashboardAdminController@showAccess')->name('showAccess');
    Route::post('/accessmanagement/{accountid}','DashboardAdminController@setAccess')->name('setAccess');
        
    Route::get('/logout', function () {
        Auth::logout();
        return redirect('/admin/login');
    })->name('logout');
    Route::get('/{pages?}','Controller@showPages');
});