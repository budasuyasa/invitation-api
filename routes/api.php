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
    User::where('email', $request->email)->update([ 'attend' => '1' ]);
    return response()->json(['status' => 'success'], 200);
});

// Route::get('/kehadiran/')

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
