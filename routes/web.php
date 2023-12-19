<?php
require __DIR__.'/auth.php';

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\NoteController;

// Define routes for CRUD operations on notes
Route::middleware(['auth'])->group(function () {
    // Display a list of notes
    Route::get('/notes', [NoteController::class, 'index'])->name('notes.index');

    


    // Display the form to create a new note
    Route::get('/notes/create', [NoteController::class, 'create'])->name('notes.create');

    // Store a new note
    Route::post('/notes', [NoteController::class, 'store'])->name('notes.store');

    // Display a specific note
    Route::get('/notes/{note}', [NoteController::class, 'show'])->name('notes.show');

    // Display the form to edit a note
    Route::get('/notes/{note}/edit', [NoteController::class, 'edit'])->name('notes.edit');

    // Update a note
    Route::put('/notes/{note}', [NoteController::class, 'update'])->name('notes.update');

    // Delete a note
    Route::delete('/notes/{note}', [NoteController::class, 'destroy'])->name('notes.destroy');
});







Route::post('/login',function(){
    return view('login');
});