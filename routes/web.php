<?php
use App\Http\Controllers\AuthManager;
use App\Http\Controllers\TaskManager;
use Illuminate\Support\Facades\Route;

Route::get("login", [\App\Http\Controllers\AuthManager::class, "login"])->name("login");
Route::post("login", [\App\Http\Controllers\AuthManager::class, "loginPost"])->name("login.post");

Route::get("logout", [\App\Http\Controllers\AuthManager::class, "logout"])->name("logout");


Route::get("register", [\App\Http\Controllers\AuthManager::class, "register"])->name("register");
Route::post("register", [\App\Http\Controllers\AuthManager::class, "registerPost"])->name("register.post");

Route::middleware("auth")->group(function(){
    Route::get('/',[TaskManager::class,"listTask"])->name("home");

    Route::get("tasks/add",[TaskManager::class,"addTask"])->name("tasks.add");
    Route::post("tasks/add",[TaskManager::class,"addTaskPost"])->name("tasks.add.post");
    
    Route::get("tasks/status/{id}",[TaskManager::class,"updateTaskStatus"])->name("tasks.status.update");
    
    Route::get("tasks/delete/{id}",[TaskManager::class,"deleteTask"])->name("tasks.delete");
    
    Route::get("tasks/edit/{id}", [TaskManager::class, "editTask"])->name("tasks.edit");
    Route::post("tasks/update/{id}", [TaskManager::class, "updateTask"])->name("tasks.update");

});