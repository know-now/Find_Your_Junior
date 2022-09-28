<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\CreateCompanyProfileController;
use App\Http\Controllers\CreateCandidateProfileController;
use App\Models\Skill;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|s
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!-

|
*/

Route::get('/', function () {
    return view('welcome');
});

//warning routes
Route::get('warning-profile', function(){
    return view('warning.profile');
})->name('warning-profile');

//logout
Route::get('logout',[AuthenticatedSessionController::class, 'destroy'])->name('logout');


//all candidate routes
Route::get('/profile', [CreateCandidateProfileController::class, 'show'])->middleware(['auth','user.candidate','create.profile'])->name('profile');

Route::get('/profile/create', [CreateCandidateProfileController::class, 'index'])->middleware(['auth','user.candidate'])->name('profile-create');
Route::post('/profile/create', [CreateCandidateProfileController::class, 'store'])->middleware(['auth','user.candidate'])->name('profile-create');

Route::get('/profile/edit/{profile}', [CreateCandidateProfileController::class, 'edit'])->middleware(['auth','user.candidate',])->name('candidate-edit');
Route::post('/profile/edit/{profile}', [CreateCandidateProfileController::class, 'update'])->middleware(['auth', 'user.candidate'])->name('candidate-edit');

Route::get('/soft_skills', function () {
    return view('soft_skills');
})->middleware(['auth', 'user.candidate','create.profile'])->name('soft_skills');

//all company routes
Route::get('/company', [CreateCompanyProfileController::class, 'show'])->middleware(['auth','user.company','create.profile'])->name('company');

Route::get('/company/create', [CreateCompanyProfileController::class, 'index'])->middleware(['auth','user.company'])->name('company-create');
Route::post('/company/create', [CreateCompanyProfileController::class, 'store'])->middleware(['auth','user.company'])->name('company-create');

Route::get('/company/edit/{details}', [CreateCompanyProfileController::class, 'edit'])->middleware(['auth','user.company',])->name('company-edit');
Route::post('/company/edit/{details}', [CreateCompanyProfileController::class, 'update'])->middleware(['auth', 'user.company'])->name('company-edit');

Route::get('/search_junior', [SkillController::class, 'create'])->middleware(['auth','user.company','create.profile'])->name('search');
Route::post('/search_junior', [SkillController::class, 'store'])->middleware(['auth','user.company','create.profile'])->name('search');
//global user routes
Route::get('/adem', function () {
    return view('adem');
})->middleware(['auth'])->name('adem');

Route::group(['middleware' => 'auth', 'middleware' => 'create.profile', 'prefix' => 'messages', 'as' => 'messages'], function () {
    Route::get('/', [MessagesController::class, 'index']);
    Route::get('create', [MessagesController::class, 'create'])->name('.create');
    Route::post('/', [MessagesController::class, 'store'])->name('.store');
    Route::get('{thread}', [MessagesController::class, 'show'])->name('.show');
    Route::put('{thread}', [MessagesController::class, 'update'])->name('.update');
    Route::delete('{thread}', [MessagesController::class, 'destroy'])->name('.destroy');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth','create.profile'])->name('dashboard');

require __DIR__ . '/auth.php';
