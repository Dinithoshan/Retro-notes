<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AdminAuthentication;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('auth.login');
})->name('home'); 

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware('auth')->group(function () {
    Route::resource('note', NoteController::class);
});

Route::get('/logout', [App\Http\Controllers\Auth\AuthenticatedSessionController::class, 'destroy'])
->middleware('auth')
->name('custom.logout');

#Routes for stripe
// Route::get('/payment', [ProductController::class,'show'])->name('payment.show');
// Route::post('products/{id}/purchase',[ProductController::class, 'purchase'])->name('payment.checkout');


#Route for editing category
Route::resource('category', CategoryController::class)->middleware(AdminAuthentication::class);

Route::get('/payment', function (Request $request) {
    return $request->user()->checkoutCharge(1200, 'T-Shirt', 5);
})->name('payment.show');




#CRUD Routes for the notes
// Route::get('/note', [NoteController::class,'index'])->name('note.index');
// Route::get('/note/create', [NoteController::class,'create'])->name('note.create');
// Route::get('note/{id}', [NoteController::class, 'show'])->name('note.show');
// Route::post('/note/{id}', [NoteController::class, 'store'])->name('note.store');
// Route::put ('note/{id}', [NoteController::class,'update'])->name('note.update');
// Route::delete ('note/delete/{id}', [NoteController::class, 'destroy'])->name('note.delete');

//This single comment replaces all the lines in the above comments
// Route::resource('note', NoteController::class);


require __DIR__.'/auth.php';
