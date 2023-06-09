<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use PhpParser\Builder\Function_;
use PhpParser\Node\Expr\FuncCall;
use App\Http\Controllers\MahasiswaController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Route:: get('/hello',function(){
//    $data=["message"=>"hello word"];
//    return response()->json($data);
// });

Route:: get ('/hello',Function(){
    return "hello word";
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->group(function() {
    Route::apiResource('/mahasiswa', MahasiswaController::class);
    Route::get('/logout', [ApiAuthController::class, 'logout']);
});

Route::apiResource('/mahasiswa',MahasiswaController::class);

Route::post('/login', [ApiAuthController::class, 'login']);

Route::post('/register', [ApiAuthController::class, 'register']);
