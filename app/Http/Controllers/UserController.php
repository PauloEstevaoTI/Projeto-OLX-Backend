<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\User;

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

        $user = User::create($data);

        $response = [
            'error' => '',
            'user' => $user
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
