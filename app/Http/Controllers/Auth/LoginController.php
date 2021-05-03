<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Role;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    public function redirectTo() {
        $role = auth()->user()->role->name;

        switch ($role) {
            case Role::ADMIN:
                return '/admin/dashboard';
                break;
            case Role::MANAGER:
                return '/manager/dashboard';
                break;
            case Role::REVIEWER:
                return '/reviewer/dashboard';
                break;
            case Role::USER:
                return '/user/dashboard';
                break;
            default:
                return '/home';
                break;
        }
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
