<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    //
    public function signup(CreateUserRequest $request): JsonResponse {
        //register user in database
        $data = $request->only([
            'name',
            'email',
            'password',
            'state_id'
        ]);

        $data['password'] = Hash::make($data['password']);

        $user = User::create($data);

        $response = [
            'error' => '',
            'token' => $user->createToken('Register_token')->plainTextToken
        ];


        return response()->json($response);

        // return response()->json(['method' => 'signup']);
    }

    public function signin(): JsonResponse {
        return response()->json(['method' => 'signin']);
    }

    public function me(): JsonResponse {
        return response()->json(['method' => 'me']);
    }
}
