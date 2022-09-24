<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
Route::get('/',function(){
return view('welcome');
});

Route::get('/test-dom',function(){
return view('test-dom');

});
Route::get('dashboard', [CustomAuthController::class, 'dashboard']); 
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('logout', [CustomAuthController::class, 'logout'])->name('logout');
Route::get('profiles', [CustomAuthController::class, 'profile']);
Route::get('approves/index', [CustomAuthController::class, 'approveFile']);
//users
Route::get('users/index', [App\Http\Controllers\CustomAuthController::class, 'showUser']);

Route::get('users/change-status/{status}/{id}', [CustomAuthController::class, 'changeStatus']); 


Auth::routes();
// This is foders Register
Route::get('foders/index', [App\Http\Controllers\FoderController::class, 'index']);
Route::get('foders/create', [App\Http\Controllers\FoderController::class, 'createFoder']);
Route::post('foders/store', [App\Http\Controllers\FoderController::class, 'storeFoder']);
Route::get('foders/edit/{id}', [App\Http\Controllers\FoderController::class, 'editFoder']);
Route::post('foders/update/{id}', [App\Http\Controllers\FoderController::class, 'updateFoder']);
Route::post('foders/delete/{id}', [App\Http\Controllers\FoderController::class, 'deleteFoder']);
// This is foders Register
Route::get('cows/index', [App\Http\Controllers\CowController::class, 'index']);
Route::get('cows/create', [App\Http\Controllers\CowController::class, 'createCow']);
Route::post('cows/store', [App\Http\Controllers\CowController::class, 'storeCow']);
Route::get('cows/edit/{id}', [App\Http\Controllers\CowController::class, 'editCow']);
Route::post('cows/update/{id}', [App\Http\Controllers\CowController::class, 'updateCow']);
Route::post('cows/delete/{id}', [App\Http\Controllers\CowController::class, 'deleteCow']);
