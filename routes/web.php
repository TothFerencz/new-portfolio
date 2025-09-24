<?php


use App\Models\Project;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $projects = Project::latest()->take(4)->get();
    return view('pages.home', compact('projects'));
});

