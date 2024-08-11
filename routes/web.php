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

Route::get('/', [\App\Http\Controllers\MainController::class, 'index'])->name('home');
Route::get('/books/{id}', [\App\Http\Controllers\BookController::class, 'show'])->name("books.show");
Route::get('/books', [\App\Http\Controllers\MainController::class, 'search'])->name("search");
Route::get('/books/{id}/download', [\App\Http\Controllers\BookController::class, 'download'])->name("books.download");
Route::get('/books/category/{id}', [\App\Http\Controllers\MainController::class, 'category'])->name("category");

Route::middleware("guest")->group(function (){
    Route::get('/login', [\App\Http\Controllers\AuthController::class, 'login'])->name("login");
    Route::get('/register', [\App\Http\Controllers\AuthController::class, 'register'])->name("register");

    Route::post("/auth", [\App\Http\Controllers\AuthController::class, "authentication"])->name("login.post");
    Route::post("/register", [\App\Http\Controllers\UserController::class, 'create'])->name("register.post");
});


Route::prefix("/dashboard")->middleware(['completeAccount', 'auth'])->group(function (){
    Route::get("/", [\App\Http\Controllers\DashboardController::class, 'index'])->name("dashboard");
    Route::get("/profile", [\App\Http\Controllers\DashboardController::class, 'profile'])->name("dashboard.profile");
    Route::get("/books/edit/{id}", [\App\Http\Controllers\BookController::class, 'edit'])->name("dashboard.books.edit")->middleware("updateBook");
    Route::get("/complete/account", [\App\Http\Controllers\AuthController::class, 'completeAccount'])->name("completeAccount")->withoutMiddleware("completeAccount");
    Route::get("/logout", [\App\Http\Controllers\AuthController::class, 'logout'])->name("logout")->withoutMiddleware("completeAccount");
    Route::get("books/delete/{id}", [\App\Http\Controllers\BookController::class, 'delete'])->name('dashboard.books.delete');

    Route::post("/complete/account", [\App\Http\Controllers\UserController::class, 'completeAccount'])->name("completeAccount.post")->withoutMiddleware("completeAccount");
    Route::post("/profile", [\App\Http\Controllers\UserController::class, "update"])->name("dashboard.profile.update");
    Route::post("/books", [\App\Http\Controllers\BookController::class, "store"])->name("dashboard.books.store");
    Route::post("/books/update/{id}", [\App\Http\Controllers\BookController::class, "update"])->name("dashboard.books.update")->middleware("updateBook");


    Route::prefix("/admin")->middleware(['admin'])->group(function (){
        Route::get("/", [\App\Http\Controllers\DashboardController::class, 'admin'])->name("dashboard.admin");
        Route::get("books/category/{id}", [\App\Http\Controllers\BookCategoryController::class, "delete"])->name("dashboard.bookCategory.delete");

        Route::post("books/category", [\App\Http\Controllers\BookCategoryController::class, 'store'])->name("dashboard.bookCategory.store");
    });
});
