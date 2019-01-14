<?php

namespace App\Http\Controllers\Auth;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    
    public function logout(Request $request) 
    {
        Auth::logout();
        return redirect('/home');

    }
    
    public function login(Request $request)
    {
        $login = $request->all();
        $auth = [
            'email' => $login['email'],
            'password' => $login['password'],
        ];

        if (Auth::attempt($auth)) {
            if (Auth::user()->role == config('custom.role.admin')) {
                return redirect()->route('users.index');
            }
            
            return redirect()->route('home');
        }

        return redirect()->back();
    }
}
