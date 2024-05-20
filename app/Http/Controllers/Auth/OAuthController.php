<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class OAuthController extends Controller
{
    
    /**
     * Redirect the user to the Provider authentication page.
     *
     * @param $provider
     * @return JsonResponse
     */
    public function redirectToProvider()
    {

        return Socialite::driver("google")->stateless()->redirect();
    }

    /**
     * Obtain the user information from Provider.
     *
     * @param $provider
     * @return JsonResponse
     */
    public function handleProviderCallback()
    {
        try {
            $user = Socialite::driver("google")->stateless()->user();
        } catch (ClientException $exception) {
            return response()->json(['error' => 'Invalid credentials provided.'], 422);
        }

        $users = User::create([
            'name' => $user->getName(),
            'email' => $user->getEmail(),
            'password' => Hash::make($user->getPassword()),
            'role' => 'user', // Set role as user by default
        ]);
        return response()->json(['message' => 'User registered successfully', 'user' => $users], 201);
    }
    
}
