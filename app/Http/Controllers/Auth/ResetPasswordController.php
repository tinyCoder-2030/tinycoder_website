<?php

namespace App\Http\Controllers\Auth;
use App\SocialNetwork;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    
  
    public function showResetForm(Request $request, $token = null)
    {
        $socials = SocialNetwork::all();
        return view('auth.passwords.reset')->with(
            ['token' => $token, 'email' => $request->email,'socials'=>$socials]
        );
    }

}
