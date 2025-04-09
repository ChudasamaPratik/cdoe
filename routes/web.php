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
Route::get('gallery', function () {
    return view('frontend.pages.gallery');
})->name('gallery');

Route::get('single-gallery', function () {
    return view('frontend.pages.single-gallery');
})->name('single-gallery');
Route::get('sitemap', function () {
    return view('frontend.pages.sitemap');
})->name('sitemap');

Route::get('/admin', function () {
    return view('backend.pages.index');
});
Route::get('/program-coordinator/{name}', function ($name) {
    return view('frontend.pages.program-coordinator-details', compact('name'));
})->name('programCoordinator.details');

Route::get('/course-coordinator-details', function () {
    return view('frontend.pages.course-coordinator-details');
})->name('course.coordinator.details');
Route::get('/vice-chancellor', function () {
    return view('frontend.pages.vice-chancellor');
})->name('vice.chancellor');
Route::get('/faqs', function () {
    return view('frontend.pages.faq');
})->name('faq');

Route::get('Administrative-Technical-staff', function () {
    return view('frontend.pages.administrative-technical-staff');
})->name('administrative_technical_staff');

Route::get('/course-coordinators', function () {
    return view('frontend.pages.course-coordinators');
})->name('course-coordinators');

Route::get('/CIQA-director-details', function () {
    return view('frontend.pages.CIQA-director-details');
})->name('CIQA-director-details');
Route::get('Grievance-Guidelines', function () {
    return view('frontend.pages.grievance-guidelines');
})->name('grievance-guidelines');
Route::get('Learner-Guidelines', function () {
    return view('frontend.pages.learner-guidelines');
})->name('learner-guidelines');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
