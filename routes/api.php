<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/kehadiran', function(){
    return response()->json(User::all());
});

Route::post('/kehadiran/{email}', function(Request $request){
    $user = User::where('email', $request->email)->firstOrFail();
    $user->update(['attend' => '1']);
    return response()->json($user, 200);
});


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
