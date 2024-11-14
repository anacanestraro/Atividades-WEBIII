<?php

namespace App\Http\Controllers;

use Laravel\Socialite\Facades\Socialite;
use Laravel\Socialite\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class GoogleLoginController extends Controller
{
    public function redirectToGoogle(){
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback(){
        $googleUser = Socialite::driver('google')->user();
        $user = User::where('email', $googleUser->getEmail())->first();

        if($user){
            Auth::login($user);
        }else{
            $user = User::updateOrCreate([
                'google_id' => $googleUser->id,
            ],[
                'name'=>$googleUser->name,
                'email'=>$googleUser->email,
                'password'=>$googleUser->token,
                
            ]);
            
        }
        return redirect('/');
        
    }

    public function logout(Request $request){
        Auth::logout($request);
        return redirect('/');
    }
}
