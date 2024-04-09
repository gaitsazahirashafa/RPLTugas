use App\Http\Controllers\ProfileController;

Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
Route::get('/profile/create', [ProfileController::class, 'create'])->name('profile.create');
Route::post('/profile/store', [ProfileController::class, 'store'])->name('profile.store');
Route::get('/profile/{id}', [ProfileController::class, 'show'])->name('profile.show');
Route::get('/profile/{id}/edit', [ProfileController::class, 'edit'])->name('profile.edit');
Route::put('/profile/{id}/update', [ProfileController::class, 'update'])->name('profile.update');
Route::delete('/profile/{id}/delete', [ProfileController::class, 'destroy'])->name('profile.destroy');
