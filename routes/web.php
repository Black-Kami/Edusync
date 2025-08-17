<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/activity/create-activity', function () {
    return view('createEventPage');
});
Route::get('/activity', function () {
    return view('activity');
});
Route::get('/group', function () {
    return view('group');
});
Route::get('/evaluation', function () {
    return view('evaluation');
});
Route::get('/event', function () {
    return view('event');
});
Route::get('/activity/create-activity/activity-proposal', function () {
    return view('activity_proposal');
});
Route::get('/activity/create-activity/activity-property', function () {
    return view('activity_property');
});
Route::get('/activity/create-activity/activity-budget', function () {
    return view('activity_budget');
});