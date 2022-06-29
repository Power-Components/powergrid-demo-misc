<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn () => view('simple'))->name('simple');
Route::get('/simple', fn () => view('simple'))->name('simple');
Route::get('/striped', fn () => view('striped'))->name('striped');
Route::get('/header-fixed', fn () => view('header-fixed'))->name('header-fixed');
Route::get('/collection', fn () => view('collection'))->name('collection');
Route::get('/join', fn () => view('join'))->name('join');
Route::get('/multiple', fn () => view('multiple'))->name('multiple');
Route::get('/filters', fn () => view('filters'))->name('filters');
Route::get('/dish', fn () => view('dish'))->name('dish');
Route::get('/validation', fn () => view('validation'))->name('validation');
Route::get('/persist', fn () => view('persist'))->name('persist');
Route::get('/detail', fn () => view('detail'))->name('detail');
Route::get('/export', fn () => view('export'))->name('export');
Route::get('/batch', fn () => view('batch'))->name('batch');
Route::get('/custom-layout', fn () => view('custom-layout'))->name('custom-layout');
Route::get('/bulk-actions', fn () => view('bulk-actions'))->name('bulk-actions');
Route::get('/soft-delete', fn () => view('soft-delete'))->name('soft-delete');

Route::view('/powergrid', 'powergrid-demo');
