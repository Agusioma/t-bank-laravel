<?php error_reporting(1);

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use Artisan;

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
    echo "ping";
});

Route::get('seer/{id}', function ($id) {
    echo($id);
});
Route::get('run-migrations', function () {
    echo env('DB_HOST', false);
    echo env('DB_DATABASE', false);
    echo env('DB_USERNAME', false);
    echo env('DB_PASSWORD', false); 
});
Route::get('customer/{id}', [LoginController::class, 'show']);