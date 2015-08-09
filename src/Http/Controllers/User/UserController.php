<?php

namespace Ax2to\LaravelUser\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Ax2to\LaravelUser\Http\Requests\UpdateProfileRequest;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    /**
     * Create a new authentication controller instance.
     *
     */
    public function __construct()
    {
        $this->middleware('auth_user');
    }

    public function getProfile()
    {
        return view('laravel-user::user.profile');
    }

    public function getUpdate()
    {
        return view('laravel-user::user.update');
    }

    /**
     * @param UpdateProfileRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function postUpdate(UpdateProfileRequest $request)
    {
        $user = Auth::user();
        $user->fill($request->all());
        $user->save();

        return redirect('user/update');
    }
}
