<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Repositories\UserRepository;

class UserController extends Controller
{
    public function index(UserRepository $userRepository)
    {
        $users = $userRepository->all('created_at_desc', 10);
        return view('users.list', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(StoreUserRequest $request, UserRepository $userRepository)
    {
        $user = $userRepository->store($request->all());
        return redirect()->route('users.index')->with('message', 'اطلاعات با موفقیت ذخیره شد.');
    }
}
