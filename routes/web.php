<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IdeaController;

Route::get('/ideas', function () {
    return view('welcome');
});

Route::get('/', [IdeaController::class, 'showFeed'])->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('/idea', [IdeaController::class, 'shareIdea'])->name('idea.share');
Route::post('/unlikeidea/{id}', [IdeaController::class, 'likeIdea'])->name('idea.like');
Route::post('/likeidea/{id}', [IdeaController::class, 'unlikeIdea'])->name('idea.unlike');

Route::get('/comments/{id}', [IdeaController::class, 'viewComments'])->name('idea.view.comment');
Route::post('/sendComments/{id}', [IdeaController::class, 'sendComment'])->name('idea.send.comment');



require __DIR__.'/auth.php';

