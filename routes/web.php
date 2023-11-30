<?php

use App\Http\Controllers\AppoinementController;
use App\Http\Controllers\DepannageController;
use App\Http\Controllers\GarageController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

/* Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard'); */
Route::get('/service', function () {
    return view('service');
});
Route::get('/comment', function () {
    return view('comment');
});


Route::get('/about', function () {
    return view('about');
});

//bloc blogs

Route::get('/blog1', function () {
    return view('actu_entretien');
});
Route::get('/blog2', function () {
    return view('actu_importance');
});

//pourquoi nous choisir
Route::get('/whyus', function () {
    return view('why');
});
Route::get('/dashboard', [DepannageController::class, 'redirect'])->middleware(['auth'])->name('dashboard');
Route::get('/depannage/index', [GarageController::class, 'index'])->name('index');

Route::group(['middleware' => 'auth', 'as' => 'appointement.'], function () {
    Route::post('/appointement/store', [AppoinementController::class, 'store'])->name('store');
    Route::get('/appointement/create', [AppoinementController::class, 'create'])->name('create');
    Route::get('/appointement/index', [AppoinementController::class, 'index'])->name('index');
    Route::get('/appointement/{id}', [AppoinementController::class, 'show'])->name('show');
    Route::get('/valider/{id}', [AppoinementController::class, 'valider_appointement'])->name('valider');
    Route::get('/annuler/{id}', [AppoinementController::class, 'annuler_appointement'])->name('destroy');
});

Route::name('quote.')->group(function () {
    Route::post('/quote/store', [QuoteController::class, 'store'])->name('store');
    Route::get('/quote/create', [QuoteController::class, 'create'])->name('create');
    Route::get('/quote/index', [QuoteController::class, 'index'])->name('index');
    Route::get('/quote/{id}', [QuoteController::class, 'show'])->name('show');
    Route::get('/quaote_valider/{id}', [QuoteController::class, 'valider_quote'])->name('valider');
    Route::get('/quaote_annuler/{id}', [QuoteController::class, 'annuler_quote'])->name('destroy');
});

Route::name('depannage.')->group(function () {
    Route::post('/depannage/store', [DepannageController::class, 'store'])->name('store');
    Route::get('/depannage/create', [DepannageController::class, 'create'])->name('create');
    Route::get('/depannage/stack', [DepannageController::class, 'depannage'])->name('stack');
    Route::get('/depannage/index', [DepannageController::class, 'index'])->name('index');
    Route::get('/depannage/command/{id}', [DepannageController::class, 'command'])->name('command');
});

Route::group(['middleware' => 'auth', 'as' => 'depannage.'], function () {
    Route::get('/depannage/{id}', [DepannageController::class, 'show'])->name('show');
    Route::get('/depannage/valider/{id}', [DepannageController::class, 'valider'])->name('valider');
    Route::get('/depannage/annuler/{id}', [DepannageController::class, 'annuler'])->name('annuler');
    Route::get('/depannage/accepter/{id}', [DepannageController::class, 'valider_depannage'])->name('accepter');
    Route::post('/depannage/pricing/{id}', [DepannageController::class, 'pricing'])->name('pricing');
    Route::get('/item-details/{id}', [DepannageController::class, 'detail_depannage'])->name('detail');

});

Route::name('client.')->group(function () {
  //customer
  Route::get('/client/depannage', [DepannageController::class, 'depannage_customer'])->name('depannage');
});

Route::group(['middleware' => 'auth', 'as' => 'garage.'], function () {
    Route::post('/garage/store', [GarageController::class, 'store'])->name('store');
    Route::get('/garage/create', [GarageController::class, 'create'])->name('create');
    Route::get('/garage/index', [GarageController::class, 'index'])->name('index');
    Route::get('/garage/edit/{id}', [GarageController::class, 'edit'])->name('edit');
    Route::get('/garage/show/{garage}', [GarageController::class, 'show'])->name('show');
});

Route::name('user.')->group(function () {
    Route::get('/user/index', [UserController::class, 'index'])->name('index');
    Route::get('/user/create', [UserController::class, 'create'])->name('create');
    Route::get('/user/show/{id}', [UserController::class, 'show'])->name('show');
});

require __DIR__ . '/auth.php';
