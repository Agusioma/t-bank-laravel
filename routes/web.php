<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    //return view('welcome');
    echo "Connected:) Site under construction";
});

Route::get('seer/{id}', function ($id) {
    echo($id);
});
Route::get('run-migrations', function () {
    try {
        //code...
        return Artisan::call('migrate');
    } catch (Exception $e) {
        //throw $th;
        $e->getMessage();
        print($e);
    }
    
});
Route::get('customer/', [LoginController::class, 'auth_user']);