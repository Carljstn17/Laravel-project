<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WelcomeController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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

Route::get('/', [WelcomeController::class, 'index']);
    // raw php
    // $users = DB::select("select * from users");
    // $user = DB::insert('insert into users (name,email,password) values(?,?,?)',[
    //     'naruto',
    //     'naruto@gmail.com',
    //     'password'
    // ]);

    // $user = DB::update("update users set email=? where id=?", [
    //     'hinata@gmail.com',
    //     2
    // ]);

    // $user = DB::delete("delete from users where id=2");

    // Query builder
    //  $users = DB::table('users')->find(1);
    // // $users = DB::table('users')->pluck('name');

    // $user = DB::table('users')->insert([
    //     'name' => 'naruto',
    //     'email' => 'naruto2@gmail.com',
    //     'password' => 'password'
    // ]);

    // $user = DB::table('users')->where('id',4)->update(['email' => 'abc@gmail.com']);
    // $user = DB::table('users')->where('id',4)->delete();

    // Elequent
    // $users = User::all();

    // $user = User::create([
    //     'name'      => 'naruto',
    //     'email'     => 'naruto5@gmail.com',
    //     'password'  => 'password'
    // ]);

    // $user = User::find(9);
    // $user -> update([
    //     'email' => 'abc@gmail.com',
    // ]);

    // $user = User::find(9);
    // $user -> delete();

    //dd($user);

Route::get('/about', function () {
    return view('about');

});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
