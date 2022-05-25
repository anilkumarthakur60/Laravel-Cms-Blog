<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{


    use AuthenticatesUsers;


    protected $redirectTo = RouteServiceProvider::HOME;


    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    public function redirectToProvider($website)
    {
        return Socialite::driver($website)->redirect();
    }


    public function handleProviderCallback($website)
    {
        $user = $githubuser = Socialite::driver($website)->user();
        $user = User::where('provider_id', $githubuser->getId())->first();
        if (!$user) {
            $user = User::create([
                'name' => $githubuser->getName(),
                'email' => $githubuser->getEmail(),
                'provider_id' => $githubuser->getId()

            ]);
        }
        auth()->login($user, true);
        session()->flash('success', 'signed in with ' . $website);
        return redirect('/home');
    }
}
