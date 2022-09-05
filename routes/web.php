<?php

use App\Http\Controllers\PagesController;
use App\Http\Livewire\Admin\Albums;
use App\Http\Livewire\Admin\AlbumView;
use App\Http\Livewire\Admin\Dashboard;
use App\Http\Livewire\Admin\Posts;
use App\Http\Livewire\Admin\Roles;
use App\Http\Livewire\Admin\Users;
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

Route::get('/', [PagesController::class, 'index'])->name('index');

Route::get('/testing', function () {
    return view('testing');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/services', function () {
    return view('services');
});

Route::get('/gallery', [PagesController::class, 'gallery'])->name('gallery');
Route::get('album/{album:slug}', [PagesController::class, 'singleview'])->name('singleview');
Route::get('/blog', [PagesController::class, 'blog'])->name('blog');
Route::get('post/{post:slug}', [PagesController::class, 'post'])->name('post');
Route::middleware(['auth',
// , 'role:Admin'
])->group(function () {
    Route::get('admin/dashboard', Dashboard::class)->name('admin.dashboard');
    Route::get('admin/users', Users::class)->name('admin.users');
    Route::get('admin/roles', Roles::class)->name('admin.roles');
    Route::get('admin/posts', Posts::class)->name('admin.posts');
    Route::get('admin/albums', Albums::class)->name('admin.albums');
    Route::get('admin/album/{album:slug}', AlbumView::class)->name('album.view');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
