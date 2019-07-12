<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;

use Illuminate\Http\Request;

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
    // protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function redirectTo(){
     // User role
    $role = Auth::user()->role; 
    $active = Auth::user()->is_activated;   
    // Check user role
        switch (true) {
            case ($role == 'customer' && $active == '1'):
                return '/pelajar';
                break;
            case ($role == 'agent' && $active == '1'):
                return '/tutor';
                break;
            case ($role == 'admin'&& $active == '1'):
                echo "halo";
                return '/admin';
                break;     
            default:
                session()->forget('guest');
                session()->flush();
                return '/login'; 
                break;
        }
    }
    // protected function redirectTo() {
    //     if (Auth::check() && Auth::user()->role == 'customer' && Auth::user()->is_activated == 0) {

    //         return('/pelajar');
    //     }
    //     elseif (Auth::check() && Auth::user()->role == 'agent') {
    //         return('/pengajar');
    //     }
    //     else {
    //         return('/admin');
    //     }
    // }

    protected function credentials(Request $request){
        $request['is_activated'] = 1;
        return $request->only('email','password','is_actived');
    }
}
