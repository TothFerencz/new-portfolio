<?php


use App\Http\Controllers\ContactMessageController;
use App\Models\Project;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $projects = Project::latest()->take(4)->get();
    return view('pages.home', compact('projects'));
});

Route::get('/contact', function () {
  
    return view('pages.contact');
});

Route::post('/contact', ContactMessageController::class)->name('contact.submit');
