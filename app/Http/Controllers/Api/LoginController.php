<?php

namespace App\Http\Controllers\Api;

use Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Tymon\JWTAuth\Facades\JWTAuth;

/**
 * Class LoginController
 * @package App\Http\Controllers\Api
 */
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | API Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Send the response after the user was authenticated.
     *
     * @param \Illuminate\Http\Request $request
     * @return \JsonResponse - token
     */
    protected function sendLoginResponse(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (!$token = JWTAuth::attempt($credentials)) {
            return response()->json([
                'status' => 'error',
                'error' => 'invalid.credentials',
                'msg' => 'Invalid Credentials.'
            ], 400, [], JSON_PRETTY_PRINT);
        }

        return response()->json([
            'status' => 'success',
            'token' => $token
        ], 201, [], JSON_PRETTY_PRINT)->header('Authorization', $token);
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh()
    {
        return response()->json([
            'status' => 'success'
        ], 201, [], JSON_PRETTY_PRINT);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function user(Request $request)
    {
        $user = User::find(Auth::user()->id);
        return response()->json([
            'status' => 'success',
            'data' => $user
        ], 201, [], JSON_PRETTY_PRINT);
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        JWTAuth::invalidate();
        return response()->json([
            'status' => 'success',
            'message' => 'Logged out Successfully.'
        ], 201, [], JSON_PRETTY_PRINT);
    }
}
