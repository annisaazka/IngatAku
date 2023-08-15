<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\DependencyInjection\RegisterControllerArgumentLocatorsPass;
use App\Http\Controllers\RegistController;
use App\Http\Controllers\TodosController;
use App\Http\Controllers\UpcomingController;
use App\Http\Controllers\WeeklyController;
use App\Http\Controllers\NotesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;

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

Route::get('/', function () {
    return view('landing');
});

Route::get('/login', function () {
    return view('login');
});

Route::post('/login', [RegistController::class, 'storeLogin']);

Route::get('/protodos', [TodosController::class, 'index'])->name('protodos.index');
Route::post('/protodos', [TodosController::class, 'store'])->name('protodos.store');
Route::get('/edit-todos', [TodosController::class, 'addnew'])->name('protodos.addnew');
Route::get('/edit-todos/{id}', [TodosController::class, 'edit'])->name('protodos.edit');
Route::post('/edit-todos/{id}', [TodosController::class, 'update'])->name('protodos.update');
Route::get('/protodos/{id}', [TodosController::class, 'destroy'])->name('protodos.destroy');

Route::get('/proupcoming', [UpcomingController::class, 'index'])->name('proupcoming.index');
Route::post('/proupcoming', [UpcomingController::class, 'store'])->name('proupcoming.store');
Route::get('/edit-upcoming', [UpcomingController::class, 'addnew'])->name('proupcoming.addnew');
Route::get('/edit-upcoming/{id}', [UpcomingController::class, 'edit'])->name('proupcoming.edit');
Route::post('/edit-proupcoming/{id}', [UpcomingController::class, 'update'])->name('proupcoming.update');
Route::get('/proupcoming/{id}', [UpcomingController::class, 'destroy'])->name('proupcoming.destroy');

Route::get('/pronotes', [NotesController::class, 'index'])->name('pronotes.index');
Route::post('/pronotes', [NotesController::class, 'store'])->name('pronotes.store');
Route::get('/edit-notes', [NotesController::class, 'addnew'])->name('pronotes.addnew');
Route::get('/edit-notes/{id}', [NotesController::class, 'edit'])->name('pronotes.edit');
Route::post('/edit-notes/{id}', [NotesController::class, 'update'])->name('pronotes.update');
Route::get('/pronotes/{id}', [NotesController::class, 'destroy'])->name('pronotes.destroy');

Route::get('/proweekly', [WeeklyController::class, 'index'])->name('proweekly.index');
Route::post('/proweekly', [WeeklyController::class, 'store'])->name('proweekly.store');
Route::get('/edit-weekly', [WeeklyController::class, 'addnew'])->name('proweekly.addnew');
Route::get('/edit-weekly/{id}', [WeeklyController::class, 'edit'])->name('proweekly.edit');
Route::post('/edit-proweekly/{id}', [WeeklyController::class, 'update'])->name('proweekly.update');
Route::get('/proweekly/{id}', [WeeklyController::class, 'destroy'])->name('proweekly.destroy');

Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');

//Route::get('/prodashboard', [UpcomingController::class, 'index'])->name('proupcoming.index');
//Route::get('/prodashboard', [UpcomingController::class, 'upcomingdash'])->name('proupcoming.dash');
//Route::get('/prodashboard', [TodosController::class, 'todosdash'])->name('todos.dash');
Route::get('/prodashboard', [DashboardController::class, 'index'])->name('dashboard.index');

Route::get('/register', [RegistController::class, 'index'])->name('register');
Route::post('/register', [RegistController::class, 'store']);

Route::get('/logout', [RegistController::class, 'logout'])->name('logout');