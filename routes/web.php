
<?php
use Illuminate\Support\Facades\Route; use App\Http\Controllers\ProfileController;
// Frontend Controllers 
use App\Http\Controllers\Frontend\HomeController; 
use App\Http\Controllers\Frontend\ProductController; 
use App\Http\Controllers\Frontend\GalleryController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Admin\DashboardController; 
use App\Http\Controllers\Admin\ContactController as AdminContactController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\Admin\GalleryController as AdminGalleryController;


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/products', [ProductController::class, 'index']) ->name('products.index');
Route::get('/products/{slug}', [ProductController::class, 'show']) ->name('products.show');

Route::get('/gallery', [GalleryController::class, 'index']) ->name('gallery.index');
Route::get('/gallery/{slug}', [GalleryController::class, 'show']) ->name('gallery.show');

Route::get('/contact', [ContactController::class, 'index']) ->name('contact.index');
Route::post('/contact', [ContactController::class, 'store']) ->name('contact.store');

Route::get('/dashboard', function () { return view('dashboard'); })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

Route::get('/profile', [ProfileController::class, 'edit'])
->name('profile.edit');
Route::patch('/profile', [ProfileController::class, 'update'])
->name('profile.update');
Route::delete('/profile', [ProfileController::class, 'destroy'])
->name('profile.destroy');
});

Route::middleware(['auth', 'admin']) ->prefix('admin') ->name('admin.') ->group(function () {
Route::get('/dashboard', [DashboardController::class, 'index'])
->name('dashboard');
// Contact Management
Route::get('/contacts', [AdminContactController::class, 'index'])
->name('contacts.index');
Route::get('/contacts/{contact}', [AdminContactController::class,
'show'])
->name('contacts.show');
Route::delete('/contacts/{contact}', [AdminContactController::class,
'destroy'])
->name('contacts.destroy');

Route::resource('categories', CategoryController::class);

Route::resource(
    'products',
    AdminProductController::class
);

Route::resource(
    'galleries',
    AdminGalleryController::class
);

});
Route::view('/about', 'frontend.about')
    ->name('about');

require __DIR__.'/auth.php';