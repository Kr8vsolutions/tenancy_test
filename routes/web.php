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

Route::get('/', function () {
    return view('welcome');
});

Route::get('new_tenant/{name}', function ($name) {
    $tenant = \App\Models\Tenant::create(['id'=>$name]);
    $tenant->domains()->create(['domain'=>$name]);
    return response(['success'=>true]);
});
