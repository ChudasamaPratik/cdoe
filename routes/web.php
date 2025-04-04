<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.pages.index');
});
Route::get('/about-cdoe', function () {
    return view('frontend.pages.about-cdeo');
})->name('about-cdoe');

Route::get('/authorities/{role?}', function ($role = null) {
    return view('frontend.pages.authority-details', compact('role'));
})->name('authorities.show');

Route::get('/course-details/{corse}', function ($course = null) {
    return view('frontend.pages.course-details', compact('course'));
})->name('course-details.show');

Route::get('/coordinators/{type}', function ($type) {
    return view("frontend.pages.coordinators-list", compact('type'));
})->name('coordinators.show');

Route::get('/fees-structure', function () {
    return view('frontend.pages.fees-structure');
})->name('fees.structure');

Route::get('/notification/{type}', function ($type = null) {
    return view('frontend.pages.notification', compact('type'));
})->name('notification.show');


Route::get('/approval-disclosures', function () {
    return view('frontend.pages.approval-disclosures');
})->name('approval-disclosures');

Route::get('/help-desk', function () {
    return view('frontend.pages.help-desk');
})->name('help.desk');

Route::get('/CIQA-Committee', function () {
    return view('frontend.pages.ciqa-committee');
})->name('CIQA.committee');

Route::get('CIGA-Guidelines', function () {
    return view('frontend.pages.ciqa-guidelines');
})->name('CIGA.guidelines');

Route::get('CIQA-director', function () {
    return view('frontend.pages.ciqa-director');
})->name('CIQA.director');

Route::get('how-to-apply', function () {
    return view('frontend.pages.how-to-apply');
})->name('how-to-apply');
Route::get('/admin', function () {
    return view('backend.pages.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
