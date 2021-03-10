<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProjectController;
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
//Front-end
Route::get('/', [HomeController::class, 'index']);
Route::get('/trang-chu',[HomeController::class, 'index']);

//Back-end
Route::get('/admin',[AdminController::class, 'index']);
Route::get('/dashboard',[AdminController::class, 'show_dashboard']);
Route::get('/logout',[AdminController::class, 'logout']);
Route::post('/admin-dashboard',[AdminController::class, 'dashboard']);

//project
//Route::get('/all-project-jira', [ProjectController::class, 'all_project_jira']);
//Route::post('/all-project-jira/', [ProjectController::class, '']);

//import_excel
Route::get('/import-excel', [ProjectController::class, 'index']);
Route::post('/import-excel-file', [ProjectController::class, 'importExcelCSV']);
Route::post('/export-excel/{slug}', [ProjectController::class, 'exportExcelCSV']);
Route::get('/all-import-excel', [ProjectController::class, 'all_import_excel']);
