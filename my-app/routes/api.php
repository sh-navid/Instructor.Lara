<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get("/hello", function () {
    return "This is our simple hello API";
});

Route::get("/hi/{name}", function ($name) {
    return "Hello " . $name;
});

Route::get("/bye/{name?}", function ($name = "") {
    return "Bye " . $name;
});

Route::post("/csrf-form", function () {
    // $data = file_get_contents('php://input');
    return "The value of input text is: ".$_POST["myText"];
});
