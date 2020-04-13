<?php

namespace App\Http\Controllers\Auth;

use App\Repositories\UserRepository;
use http\Client\Curl\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;

class SocialController extends Controller
{
    public function login()
{
    return Socialite::with('vkontakte')->redirect();
}

    public function responseVK(UserRepository $repository)
    {
        $user = Socialite::driver('vkontakte')->user();
//        dd($user->getId());
        $systemuser = $repository->getUserBySocId($user, 'vk');
        \Auth::login($systemuser);
        return redirect()->route('home');

    }
    public function Git()
    {
        return Socialite::with('github')->redirect();
    }

    public function responseGit(UserRepository $repository)
    {

        $user = Socialite::driver('github')->user();
      dd($user);

    }
}

