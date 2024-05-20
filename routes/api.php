<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\OAuthController;
use App\Http\Controllers\AuthController;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/register', [AuthController::class, 'register']);

Route::get('/oauth/register', [OAuthController::class,'redirectToProvider']);
Route::get('/oauth/callback', [OAuthController::class,'handleProviderCallback']);

Route::post('/login', function (Request $request) {
    $request->validate([
        'email' => 'required|string|email',
        'password' => 'required|string',
    ]);

    $user = User::where('email', $request->email)->first();

    if (! $user || ! Hash::check($request->password, $user->password)) {
        return response()->json(['message' => 'Unauthorized'], 401);
    }

    $token = $user->createToken('auth_token')->plainTextToken;

    return response()->json(['access_token' => $token, 'token_type' => 'Bearer']);
});

Route::middleware('admin')->group(function () {
    Route::get('/categories', [CategoryController::class, 'index']);
    Route::post('/categories', [CategoryController::class, 'store']);
    Route::get('/categories/{id}', [CategoryController::class, 'show']);
    Route::put('/categories/{id}', [CategoryController::class, 'update']);
    Route::delete('/categories/{id}', [CategoryController::class, 'destroy']);
    Route::get('/products', [ProductController::class, 'index']);
    Route::post('/products', [ProductController::class, 'store']);
    Route::put('/products/{id}', [ProductController::class, 'update']);
    Route::delete('/products/{id}', [ProductController::class, 'destroy']);
});


