<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Notifications\Welcome;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;
use Wink\WinkAuthor;

class AuthController extends Controller
{
    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return Response
     */
    public function redirectToProvider($provider)
    {
        if (! in_array($provider, ['github', 'twitter'])) {
            return Redirect::to('/');
        }

        return Socialite::driver($provider)->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function handleProviderCallback($provider)
    {
        if (! in_array($provider, ['github', 'twitter'])) {
            return Redirect::to('/');
        }

        try {
            $user = Socialite::driver($provider)->user();
        } catch (\Exception $e) {
            return Redirect::to('auth/'.$provider);
        }

        $author = $this->findOrCreateUser($user);

        Auth::guard('wink')->login($author);

        return Redirect::to('/');
    }

    /**
     * Return author if exists; create and return if doesn't.
     *
     * @param $socialUser
     * @return WinkAuthor
     */
    private function findOrCreateUser($socialUser)
    {
        if ($author = WinkAuthor::where('email', $socialUser->email)->first()) {
            return $author;
        }

        $uuid = (string) Str::uuid();
        $password = Hash::make(str_random(8));

        $author = WinkAuthor::create([
            'id' => $uuid,
            'name' => $socialUser->name,
            'slug' => $uuid,
            'is_admin' => false,
            'bio' => 'My journey starts here!',
            'email' => $socialUser->email,
            'avatar' => $socialUser->avatar,
            'password' => $password,
        ]);

        $author->notify(new Welcome($author));

        return $author;
    }
}
