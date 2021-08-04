<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\StudentController;
//Note:By default all admin.php routes have a prefix of /admin
//Note:By default all admin.php routes have a middleware of admin

Route::view('/', 'admin.home')->name('admin.home');
Route::resource('students', StudentController::class);