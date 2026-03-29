<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('/contact', 'contact')->name('contact');

Route::post('/contact', function (Request $request) {
    $request->validate([
        'full_name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'email', 'max:255'],
        'message' => ['required', 'string', 'min:20'],
        '_hp_field' => ['nullable', 'max:0'],
    ]);

    return back()->with('status', 'Thanks. Your strategy session request has been received.');
})->name('contact.store');
