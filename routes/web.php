<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClaseController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PostController;



// Route::get('categories', [CategoryController::class, 'index'])->name('category.index');
// Route::get('category/create', [CategoryController::class, 'create'])->name('category.create');
// Route::post('category/store', [CategoryController::class, 'store'])->name('category.store');
// Route::get('category/{category}', [CategoryController::class, 'show'])->name('category.show');
// Route::put('category/{category}',[CategoryController::class,'update'])->name('category.update');
// Route::delete('category/{category}',[CategoryController::class,'destroy'])->name('category.destroy');
// Route::get('categorycurso/{category}/editar',[CategoryController::class,'edit'])->name('category.edit');

Route::resource('category',CategoryController::class);



Route::get('posts', [PostController::class, 'index'])->name('post.index');
Route::get('post/create', [PostController::class, 'create'])->name('post.create');
Route::post('post/store', [PostController::class, 'store'])->name('post.store');




Route::get('roles', [RoleController::class, 'index'])->name('role.index');
Route::get('role/create', [RoleController::class, 'create'])->name('role.create');
Route::post('role/store', [RoleController::class, 'store'])->name('role.store');