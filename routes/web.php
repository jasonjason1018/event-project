<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KnorrController;
use App\Http\Controllers\FukushimaController;
use App\Http\Controllers\MoriyukaiController;
use App\Http\Controllers\BookkeepingController;
use App\Http\Controllers\GroupbuyVendorController;
use App\Http\Controllers\GroupbuyAdminController;

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

$controller = [
    '/' => '',
    'knorr' => KnorrController::class,
    'fukushima' => FukushimaController::class,
    'moriyukai' => MoriyukaiController::class,
];

$PATH = '/';
$function = 'index';
$param = '';
if (isset($_SERVER['REQUEST_URI']) && $_SERVER['REQUEST_URI'] !== '/') {
    $pathInfo = explode('/', $_SERVER['REQUEST_URI']);
    $PATH = $pathInfo[1];
    $function = $pathInfo[2];
    if(isset($pathInfo[3])){
        $param = $pathInfo[3];
    }
}

Route::get('/', function () {
    return view('welcome');
});

Route::prefix($PATH)->group(function () use ($PATH, $controller, $function, $param) {
    Route::middleware('auth.bookkeeping')->group(function () use ($PATH, $controller, $function, $param) {
        Route::any("$function/{param?}", [$controller[$PATH], $function]);
    });
});