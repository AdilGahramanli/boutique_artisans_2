<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;


class UserController extends Controller
{
    public function index()
    {
        return User::all();
    }
    public function store(StoreUserRequest $request)
    {
        $request->validated();
        $user = User::create($request->all());
        return response()->json($user, 200);
    }

    public function update(UpdateUserRequest $request, User $user)
    {
        #dd(str($request->all()));
        return $user->update($request->all());
    }

    public function destroy(User $user)
    {
        return $user->delete();
    }
}
