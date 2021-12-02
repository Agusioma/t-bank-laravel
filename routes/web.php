<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\StatementsView;
use App\Http\Controllers\SavingsController;
use App\Http\Controllers\AccountController;
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

Route::get('viewstatements/', [StatementsView::class, 'loadStatements']);
Route::get('statPreview/', [StatementsView::class, 'statPreview']);
Route::get('viewsavings/', [SavingsController::class, 'view_savings']);
Route::get('totalsavings/', [SavingsController::class, 'total_savings']);
Route::get('updatedetails/', [AccountController::class, 'update_details']);
Route::get('updatepassword/', [AccountController::class, 'update_password']);
Route::get('register_user/', [AccountController::class, 'sign_up']);

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