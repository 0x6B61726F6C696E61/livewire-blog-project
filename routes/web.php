<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\MainPage;
use App\Http\Livewire\CreatePost;
use App\Http\Livewire\Show;
use App\Http\Livewire\Destroy;

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


Route::get('/',MainPage::class);
Route::get('/dodaj-post',CreatePost::class);
Route::get('/{id}/usun',Destroy::class);
Route::get('/{id}',Show::class);
