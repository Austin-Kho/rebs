<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\RegisterFormRequest;

class RegisterController extends Controller
{
    public function register(RegisterFormRequest $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|string|min:8|max:255|confirmed',
            'password_confirmation' => 'required|string|min:8|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'messages' => $validator->messages()
            ], 200);
        }

        $user = new User;
//        $user->email = $request->email;
//        $user->name = $request->name;
//        $user->password = bcrypt($request->password);
//        $user->save();

        $user->fill($request->all());
        $user->password = bcrypt($request->password);
        $user->save();


        return response()->json([
            'status' => 'success',
            'data' => $user
        ], 200, [], JSON_PRETTY_PRINT);
    }
}
