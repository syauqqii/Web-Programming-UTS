<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\LogOutController;
use App\Http\Controllers\Api\ContactController;
use App\Http\Controllers\Api\HomeController;
use App\Http\Controllers\Api\AboutmeController;
use App\Http\Controllers\Api\OtherController;
use App\Http\Controllers\Api\SkillController;
use App\Http\Controllers\Api\RecentController;

Route::post('/login', LoginController::class)->name('login');

Route::group(['middleware' => ['auth:api']], function () {
    // Contact
    Route::get('/contact',[ContactController::class,'show']);
    Route::put('/contact/{id}',[ContactController::class,'edit']);

    // Home
	Route::get('/home',[HomeController::class,'show']);
    Route::put('/home/{id}',[HomeController::class,'edit']);

    // About ME
    Route::get('/aboutme',[AboutmeController::class,'show']);
    Route::put('/aboutme/{id}',[AboutmeController::class,'edit']);

    // Recent Project
    Route::get('/recentproject',[RecentController::class,'show']);
    Route::put('/recentproject/{id}',[RecentController::class,'edit']);

    // Other Project
    Route::get('/otherproject',[OtherController::class,'show']);
    Route::post('/otherproject',[OtherController::class,'add']);
    Route::put('/otherproject/{id}',[OtherController::class,'edit']);
    Route::delete('/otherproject/{id}',[OtherController::class,'destroy']);

    // Skill
    Route::get('/skill',[SkillController::class,'show']);
    Route::post('/skill',[SkillController::class,'add']);
    Route::put('/skill/{id}',[SkillController::class,'edit']);
    Route::delete('/skill/{id}',[SkillController::class,'destroy']);

    Route::post('/logout', LogOutController::class)->name('logout');
});
