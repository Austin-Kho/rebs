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

/** 사용자 인증 */

use Illuminate\Foundation\Inspiring;

Auth::routes(['verify' => true]);

/*
|--------------------------------------------------------------------------
| Front Routes
|--------------------------------------------------------------------------
| Define the routes for your Frontend pages here
|
*/
Route::get('/', 'Home\WelcomeController@index')
    ->name('home');

/*
|--------------------------------------------------------------------------
| Docs Routes
|--------------------------------------------------------------------------
| Define the routes for your Docs pages here
|
*/

Route::resource('docs', 'Docs\DocsController');
Route::resource('docs.sub', 'Docs\SubjectsController');
Route::resource(
    'attachments',
    'Docs\AttachmentsController',
    ['only' => ['store', 'destroy']]
);
Route::get('docs/images/{image}', 'Docs\SubjectsController@image');


// DB::listen(function ($query) {
//     dump($query->sql);
// });

/*
|--------------------------------------------------------------------------
| Rebs Routes
|--------------------------------------------------------------------------
| Route group for Backend prefixed with "rebs".
| To Enable Authentication just remove the comment from Rebs Middleware
|
*/

Route::get('/rebs', function () {
    return view('rebs.index');
});

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
| Route group for Backend prefixed with "admin".
| To Enable Authentication just remove the comment from Admin Middleware
|
*/

Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(function () {
    /* Auto-generated profile routes */
    Route::get('/admin/profile', 'Admin\ProfileController@editProfile');
    Route::post('/admin/profile', 'Admin\ProfileController@updateProfile');
    Route::get('/admin/password', 'Admin\ProfileController@editPassword');
    Route::post('/admin/password', 'Admin\ProfileController@updatePassword');


    /////////////*****//////////////////
    Route::get('/admin', function () {
        return view('admin.core-layout.index', [
            'inspiration' => Inspiring::quote()
        ]);
    });

    Route::get('/admin/1', function () {
        return view('admin.hello-world');
    });
    Route::get('/admin/2', function () {
        return view('admin.hello-world');
    });
    Route::get('/admin/3', function () {
        return view('admin.hello-world');
    });
    Route::get('/admin/4', function () {
        return view('admin.hello-world');
    });
    Route::get('/admin/5', function () {
        return view('admin.hello-world');
    });

    Route::get('/admin/6', function () {
        return view('admin.hello-world');
    });
    Route::get('/admin/7', function () {
        return view('admin.hello-world');
    });

    Route::get('/admin/8', function () {
        return view('admin.hello-world');
    });
    Route::get('/admin/9', function () {
        return view('admin.hello-world');
    });
    Route::get('/admin/10', function () {
        return view('admin.hello-world');
    });
    Route::get('/admin/11', function () {
        return view('admin.hello-world');
    });
    Route::get('/admin/12', function () {
        return view('admin.hello-world');
    });

    Route::get('/admin/13', function () {
        return view('admin.hello-world');
    });
    Route::get('/admin/14', function () {
        return view('admin.hello-world');
    });
    Route::get('/admin/15', function () {
        return view('admin.hello-world');
    });
    Route::get('/admin/16', function () {
        return view('admin.hello-world');
    });

    Route::get('/admin/17', function () {
        return view('admin.hello-world');
    });
    Route::get('/admin/18', function () {
        return view('admin.hello-world');
    });
    Route::get('/admin/19', function () {
        return view('admin.hello-world');
    });
    Route::get('/admin/20', function () {
        return view('admin.hello-world');
    });
    Route::get('/admin/21', function () {
        return view('admin.hello-world');
    });
    Route::get('/admin/22', function () {
        return view('admin.hello-world');
    });

    Route::get('/admin/23', function () {
        return view('admin.hello-world');
    });
    Route::get('/admin/24', function () {
        return view('admin.hello-world');
    });

    Route::get('/admin/25', function () {
        return view('admin.hello-world');
    });
    Route::get('/admin/26', function () {
        return view('admin.hello-world');
    });
    Route::get('/admin/27', function () {
        return view('admin.hello-world');
    });
    Route::get('/admin/28', function () {
        return view('admin.hello-world');
    });
    Route::get('/admin/29', function () {
        return view('admin.hello-world');
    });
    Route::get('/admin/30', function () {
        return view('admin.hello-world');
    });

    Route::get('/admin/31', function () {
        return view('admin.hello-world');
    });
    Route::get('/admin/32', function () {
        return view('admin.hello-world');
    });

    Route::get('/admin/33', function () {
        return view('admin.hello-world');
    });
    Route::get('/admin/34', function () {
        return view('admin.hello-world');
    });
    Route::get('/admin/35', function () {
        return view('admin.hello-world');
    });
    Route::get('/admin/36', function () {
        return view('admin.hello-world');
    });
    Route::get('/admin/37', function () {
        return view('admin.hello-world');
    });
    Route::get('/admin/38', function () {
        return view('admin.hello-world');
    });

    Route::get('/admin/39', function () {
        return view('admin.hello-world');
    });
    Route::get('/admin/40', function () {
        return view('admin.hello-world');
    });
    Route::get('/admin/41', function () {
        return view('admin.hello-world');
    });
    Route::get('/admin/42', function () {
        return view('admin.hello-world');
    });

    Route::get('/admin/43', function () {
        return view('admin.hello-world');
    });
    Route::get('/admin/44', function () {
        return view('admin.hello-world');
    });
    /* 부서 정보 관리 Auto-generated admin routes */
    Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(function () {
        Route::get('/admin/rebs-departments',                       'Admin\RebsDepartmentsController@index');
        Route::get('/admin/rebs-departments/create',                'Admin\RebsDepartmentsController@create');
        Route::post('/admin/rebs-departments',                      'Admin\RebsDepartmentsController@store');
        Route::get('/admin/rebs-departments/{rebsDepartment}/edit', 'Admin\RebsDepartmentsController@edit')->name('admin/rebs-departments/edit');
        Route::post('/admin/rebs-departments/{rebsDepartment}',     'Admin\RebsDepartmentsController@update')->name('admin/rebs-departments/update');
        Route::delete('/admin/rebs-departments/{rebsDepartment}',   'Admin\RebsDepartmentsController@destroy')->name('admin/rebs-departments/destroy');
    });

    Route::get('/admin/46', function () {
        return view('admin.hello-world');
    });

    /* 47. 회사 정보 등록 - Auto-generated admin routes */
    Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(function () {
        Route::get('/admin/rebs-companies', 'Admin\RebsCompaniesController@index');
        Route::get('/admin/rebs-companies/create', 'Admin\RebsCompaniesController@create');
        Route::post('/admin/rebs-companies', 'Admin\RebsCompaniesController@store');
        Route::get('/admin/rebs-companies/{rebsCompany}/edit', 'Admin\RebsCompaniesController@edit')->name('admin/rebs-companies/edit');
        Route::post('/admin/rebs-companies/{rebsCompany}', 'Admin\RebsCompaniesController@update')->name('admin/rebs-companies/update');
        Route::delete('/admin/rebs-companies/{rebsCompany}', 'Admin\RebsCompaniesController@destroy')->name('admin/rebs-companies/destroy');
    });

    Route::get('/admin/48', function () {
        return view('admin.hello-world');
    });
    Route::get('/admin/49', function () {
        return view('admin.hello-world');
    });
    Route::get('/admin/50', function () {
        return view('admin.hello-world');
    });
    Route::get('/admin/51', function () {
        return view('admin.hello-world');
    });
    Route::get('/admin/52', function () {
        return view('admin.hello-world');
    });
    Route::get('/admin/53', function () {
        return view('admin.hello-world');
    });

    /* Auto-generated admin routes */
    Route::get('/admin/admin-users', 'Admin\AdminUsersController@index');
    Route::get('/admin/admin-users/create', 'Admin\AdminUsersController@create');
    Route::post('/admin/admin-users', 'Admin\AdminUsersController@store');
    Route::get('/admin/admin-users/{adminUser}/edit', 'Admin\AdminUsersController@edit')->name('admin/admin-users/edit');
    Route::post('/admin/admin-users/{adminUser}', 'Admin\AdminUsersController@update')->name('admin/admin-users/update');
    Route::delete('/admin/admin-users/{adminUser}', 'Admin\AdminUsersController@destroy')->name('admin/admin-users/destroy');
    Route::get('/admin/admin-users/{adminUser}/resend-activation', 'Admin\AdminUsersController@resendActivationEmail')->name('admin/admin-users/resendActivationEmail');

});