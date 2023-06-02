<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VisitorController;
use App\Http\Controllers\EmployeController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!

|
*/

// Route::get('/', function () {
//     return view('index');
// });

// --- Index Page ----


Route::post('/save',[VisitorController::class, 'store'])->name('save');
Route::get('/', [Controller::class, 'index'])->name('index');


Route::get('/getList',[EmployeController::class, 'index'])->name('getList');



Route::get('/dashboard', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    
});



Route::get ('/user', [HomeController::class, 'index'])->name('user');

Route::group(['middleware'=> 'role:admin'], function(){
    Route::get ('/admin', [AdminController::class, 'index'])->name('admin');
    
});





require __DIR__.'/auth.php';
Route::resource("/Visitor", EmployeController::class);