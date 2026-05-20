    <?php

    use App\Http\Controllers\ProfileController;
    use App\Http\Controllers\ProjectController;
    use Illuminate\Support\Facades\Route;

    /*
    |--------------------------------------------------------------------------
    | HALAMAN UTAMA (PORTOFOLIO)
    |--------------------------------------------------------------------------
    */
    Route::get('/', [ProjectController::class, 'index'])->name('home');

    /*
    |--------------------------------------------------------------------------
    | SEMUA FITUR SETELAH LOGIN
    |--------------------------------------------------------------------------
    */
    Route::middleware(['auth', 'verified'])->group(function () {

        // Dashboard
        Route::get('/dashboard', [ProjectController::class, 'dashboard'])
            ->name('dashboard');

        // Simpan Project (INI YANG TADI HILANG)
        Route::post('/projects', [ProjectController::class, 'store'])
            ->name('projects.store');

        // Edit
        Route::get('/projects/{project}/edit', [ProjectController::class, 'edit'])
            ->name('projects.edit');

        // Update
        Route::put('/projects/{project}', [ProjectController::class, 'update'])
            ->name('projects.update');

        // Delete
        Route::delete('/projects/{project}', [ProjectController::class, 'destroy'])
            ->name('projects.destroy');
    });

    /*
    |--------------------------------------------------------------------------
    | PROFILE (BREEZE)
    |--------------------------------------------------------------------------
    */
    Route::middleware('auth')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])
            ->name('profile.edit');

        Route::patch('/profile', [ProfileController::class, 'update'])
            ->name('profile.update');

        Route::delete('/profile', [ProfileController::class, 'destroy'])
            ->name('profile.destroy');
    });

    require __DIR__.'/auth.php';