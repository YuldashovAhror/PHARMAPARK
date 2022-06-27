<?php

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

Route::get('/languages/{loc}', function ($loc){
    if (in_array($loc, ['uz','ru','en'])) {session()->put('locale', $loc);}
    else {session()->put('locale', 'ru');}
    return back();
});

Route::get('/', function () {
    $n = 'name_'.session()->get('locale');
    $reports = \App\Models\Report::get(['photo', $n, 'id', 'created_at']);
    return view('welcome', ['reports' => $reports]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contacts', function () {
    return view('contacts');
});

Route::get('/genplan', function () {
    return view('genplan');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::get('/reports/all', [\App\Http\Controllers\ReportController::class, 'all'])->name('reports.all');
Route::get('/vacancy/all', [\App\Http\Controllers\VacationController::class, 'all'])->name('vacancy.all');
Route::get('/vacancy_categories/all', [\App\Http\Controllers\VacationCategoryController::class, 'all'])->name('vacancy_categories.all');
Route::get('/galleries/all', [\App\Http\Controllers\GalleryController::class, 'all'])->name('galleries.all');
Route::get('/messages/all', [\App\Http\Controllers\MessageController::class, 'all'])->name('messages.all');
Route::get('/missions/all', [\App\Http\Controllers\MissionController::class, 'all'])->name('missions.all');
Route::get('/teams/all', [\App\Http\Controllers\TeamController::class, 'all'])->name('teams.all');
Route::get('/partners/all', [\App\Http\Controllers\PartnerController::class, 'all'])->name('partners.all');
Route::get('/investors/all', [\App\Http\Controllers\InvestorController::class, 'all'])->name('investors.all');
Route::get('/projects/all', [\App\Http\Controllers\ProjectController::class, 'all'])->name('projects.all');
Route::get('/blogs/all', [\App\Http\Controllers\BlogController::class, 'all'])->name('blogs.all');
Route::get('/blocks/all', [\App\Http\Controllers\BlockController::class, 'all'])->name('blocks.all');
Route::resources([
    'reports' => \App\Http\Controllers\ReportController::class,
    'blogs' => \App\Http\Controllers\BlogController::class,
    'projects' => \App\Http\Controllers\ProjectController::class,
    'teams' => \App\Http\Controllers\TeamController::class,
    'missions' => \App\Http\Controllers\MissionController::class,
    'blocks' => \App\Http\Controllers\BlockController::class,
    'investors' => \App\Http\Controllers\InvestorController::class,
    'partners' => \App\Http\Controllers\PartnerController::class,
    'messages' => \App\Http\Controllers\MessageController::class,
    'galleries' => \App\Http\Controllers\GalleryController::class,
    'vacation_categories' => \App\Http\Controllers\VacationCategoryController::class,
    'vacancy' => \App\Http\Controllers\VacationController::class,
]);


