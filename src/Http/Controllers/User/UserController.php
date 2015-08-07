<?php

namespace Ax2to\LaravelUser\Http\Controllers\User;

use Ax2to\LaravelUser\Model\User;
use Illuminate\Support\Facades\View;
use Validator;
use App\Http\Controllers\Controller;


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

    public function postUpdate()
    {

    }
}
