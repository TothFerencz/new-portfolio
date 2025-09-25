<?php

use App\Http\Controllers\ContactMessageController;
use App\Http\Controllers\ProjectController;
use App\Models\PricingPlan;
use App\Models\Project;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $projects = Project::latest()->take(4)->get();
    $pricingPlans = PricingPlan::ordered()->get();

    return view('pages.home', compact('projects', 'pricingPlans'));
})->name('home');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::post('/contact', ContactMessageController::class)->name('contact.submit');
Route::get('/portfolio/{slug}', [ProjectController::class, 'show'])->name('portfolio.show');

Route::get('/sitemap.xml', function () {
    $staticUrls = collect([
        [
            'loc' => route('home'),
            'lastmod' => now()->toAtomString(),
            'changefreq' => 'weekly',
            'priority' => '1.0',
        ],
        [
            'loc' => route('contact'),
            'lastmod' => now()->toAtomString(),
            'changefreq' => 'monthly',
            'priority' => '0.8',
        ],
    ]);

    $projectUrls = Project::orderByDesc('updated_at')
        ->get()
        ->map(function (Project $project) {
            $lastModified = $project->updated_at ?? $project->created_at;

            return [
                'loc' => route('portfolio.show', $project->slug),
                'lastmod' => optional($lastModified)->toAtomString(),
                'changefreq' => 'monthly',
                'priority' => '0.7',
            ];
        });

    $urls = $staticUrls->merge($projectUrls);

    return response()
        ->view('sitemap', ['urls' => $urls])
        ->header('Content-Type', 'application/xml');
})->name('sitemap');

Route::get('/robots.txt', function () {
    return response()
        ->view('robots')
        ->header('Content-Type', 'text/plain');
})->name('robots');
