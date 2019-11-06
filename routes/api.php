<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(['domain' => config('settings.api_domain'), 'namespace' => 'Api', 'as' => 'api.'], function () {
    // 인증 관련 라우트

    /** 회원 가입 처리*/
    Route::post('auth/register', [
        'as' => 'jwt.register',
        'uses' => 'RegisterController@register',
    ]);

    /** 토큰 교환 요청(로그인) */
    Route::post('auth/login', [
        'as' => 'jwt.login',
        'uses' => 'LoginController@login',
    ]);

    Route::group(['middleware' => 'jwt.auth'], function () {
        Route::get('auth/user', [
            'as' => 'jwt.user',
            'uses' => 'LoginController@user',
        ]);
        Route::post('auth/logout', [
            'as' => 'lwt.logout',
            'uses' => 'LoginController@logout',
        ]);
    });

    Route::get('auth/refresh', [
        'middleware' => 'jwt.refresh',
        'as' => 'jwt.refresh',
        'uses' => 'LoginController@refresh',
    ]);

    Route::group(['prefix' => 'v1', 'namespace' => 'v1', 'as' => 'v1.'], function () {
        // 리소스 관련 라우트

        /* 환영 메세지 */
        Route::get('/', [
            'as' => 'index',
            'uses' => 'WelcomeController@index',
        ]);

        // /** 포럼 API */
        // Route::resource('articles', 'ArticlesController');
        // Route::get('tags/{slug}/articles', [
        //     'as' => 'tags.articles.index',
        //     'uses' => 'ArticlesController@index',
        // ]);
        // Route::get('tags', [
        //     'as' => 'tags,index',
        //     'uses' => 'ArticlesController@tags',
        // ]);
        // Route::resource('attachments', 'AttachmentsController', [
        //     'only' => ['store', 'destroy']
        // ]);
        // Route::resource('articles.attachments', 'AttachmentsController', [
        //     'only' => ['index']
        // ]);
    });
});

