<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AuthMiddleware;

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

Route::get('/', [App\Http\Controllers\IndexController::class, 'index']);

// Route::middleware(['auth'])->group(function () {
//     Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('layouts.master');
// });

Auth::routes();
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
Route::get('/logout', function(){
    \Auth::logout();
    return redirect('/login');
});

Route::middleware([AuthMiddleware::class])->group(function () {
    Route::get('/aboutme', [App\Http\Controllers\AboutmeController::class, 'index']);
    Route::get('/homepage', [App\Http\Controllers\HomePageController::class, 'index']);
    Route::get('/skill', [App\Http\Controllers\SkillController::class, 'index']);
    Route::get('/recentproject', [App\Http\Controllers\RecentprojectController::class, 'index']);
    Route::get('/project', [App\Http\Controllers\OtherprojectController::class, 'index']);
    Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index']);

    Route::get('/create-project', [App\Http\Controllers\OtherprojectController::class, 'create']);
    Route::post('/simpan-otherproject', [App\Http\Controllers\OtherprojectController::class, 'store']);
    Route::get('/edit-otherproject/{id}', [App\Http\Controllers\OtherprojectController::class, 'edit']);
    Route::post('/update-otherproject/{id}', [App\Http\Controllers\OtherprojectController::class, 'update']);
    Route::get('/delete-otherproject/{id}', [App\Http\Controllers\OtherprojectController::class, 'destroy']);

    Route::get('/create-framework', [App\Http\Controllers\SkillController::class, 'createFramework']);
    Route::post('/simpan-framework', [App\Http\Controllers\SkillController::class, 'storeFramework']);

    Route::get('/create-language', [App\Http\Controllers\SkillController::class, 'createLanguage']);
    Route::post('/simpan-language', [App\Http\Controllers\SkillController::class, 'storeLanguage']);

    Route::get('/create-tool', [App\Http\Controllers\SkillController::class, 'createTool']);
    Route::post('/simpan-tool', [App\Http\Controllers\SkillController::class, 'storeTool']);

    Route::get('/edit-framework/{id}', [App\Http\Controllers\SkillController::class, 'editFramework']);
    Route::get('/edit-language/{id}', [App\Http\Controllers\SkillController::class, 'editLanguage']);
    Route::get('/edit-tool/{id}', [App\Http\Controllers\SkillController::class, 'editTool']);
    
    Route::post('/update-framework/{id}', [App\Http\Controllers\SkillController::class, 'updateFramework']);
    Route::post('/update-language/{id}', [App\Http\Controllers\SkillController::class, 'updateLanguage']);
    Route::post('/update-tool/{id}', [App\Http\Controllers\SkillController::class, 'updateTool']);

    Route::get('/delete-framework/{id}', [App\Http\Controllers\SkillController::class, 'destroyFramework']);
    Route::get('/delete-language/{id}', [App\Http\Controllers\SkillController::class, 'destroyLanguage']);
    Route::get('/delete-tool/{id}', [App\Http\Controllers\SkillController::class, 'destroyTool']);


    Route::get('/edit-contact/{id}', [App\Http\Controllers\ContactController::class, 'edit']);
    Route::post('/update-contact/{id}', [App\Http\Controllers\ContactController::class, 'update']);

    Route::get('/edit-recentproject/{id}', [App\Http\Controllers\RecentprojectController::class, 'edit']);
    Route::post('/update-recentproject/{id}', [App\Http\Controllers\RecentprojectController::class, 'update']);

    Route::get('/edit-home/{id}', [App\Http\Controllers\HomePageController::class, 'edit']);
    Route::post('/update-home/{id}', [App\Http\Controllers\HomePageController::class, 'update']);

    Route::get('/edit-aboutme/{id}', [App\Http\Controllers\AboutmeController::class, 'edit']);
    Route::post('/update-aboutme/{id}', [App\Http\Controllers\AboutmeController::class, 'update']);
});