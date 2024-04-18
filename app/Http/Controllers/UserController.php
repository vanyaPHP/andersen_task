<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class UserController extends Controller
{
    public function index(): View
    {
        return view('users_index', [
            'users' => User::all()
        ]);
    }

    public function store(StoreUserRequest $userRequest): RedirectResponse
    {
        User::create($userRequest->all());
        return redirect('/');
    }
}
