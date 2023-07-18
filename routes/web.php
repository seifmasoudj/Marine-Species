<?php

use App\Models\News;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\AboutComponent;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\SearchComponent;
use App\Http\Controllers\PDFController;
use App\Http\Livewire\ContactComponent;
use App\Http\Livewire\SpeciesComponent;
use App\Http\Livewire\DocumentComponent;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ProfileController;
use App\Http\Livewire\NewsDetailsComponent;
use App\Http\Livewire\SpeciesDetailsComponent;
use App\Http\Livewire\Admin\AdminNewsComponent;
use App\Http\Livewire\Admin\AdminAddNewsComponent;
use App\Http\Livewire\Admin\AdminSpeciesComponent;
use App\Http\Livewire\User\UserDashboardComponent;
use App\Http\Livewire\Admin\AdminEditNewsComponent;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Admin\AdminAddSpeciesComponent;
use App\Http\Livewire\Admin\AdminEditSpeciesComponent;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/',HomeComponent::class)->name('home.index');
Route::get('/about',AboutComponent::class)->name('about');
Route::get('/document',DocumentComponent::class)->name('document');
Route::get('/contact',ContactComponent::class)->name('contact');
Route::get('/species',SpeciesComponent::class)->name('species');
Route::get('/news/{title}',NewsDetailsComponent::class)->name('news.details');
Route::get('/species/{regularName}',SpeciesDetailsComponent::class)->name('species.details');
Route::get('/search',SearchComponent::class)->name('taxonomy.search');

Route::get('/autocomplete',[SearchController::class,'autocomplete'])->name('autocomplete');
Route::post('/search',[SearchController::class,'searchSpecies'])->name('searchSpecies');

//For User 
Route::middleware(['auth:sanctum', 'verified'])->group(function (){
    Route::get('/user/dashboard',UserDashboardComponent::class)->name('user.dashboard');
});

//For Admin
Route::middleware(['auth:sanctum', 'verified','authadmin'])->group(function (){
    Route::get('/admin/dashboard',AdminDashboardComponent::class)->name('admin.dashboard');

    Route::get('/admin/species',AdminSpeciesComponent::class)->name('admin.species');
    Route::get('/admin/species/add',AdminAddSpeciesComponent::class)->name('admin.addspecies');
    Route::get('/admin/species/edit/{species_id}',AdminEditSpeciesComponent::class)->name('admin.editspecies');

    Route::get('/admin/news',AdminNewsComponent::class)->name('admin.news');
    Route::get('/admin/news/add',AdminAddNewsComponent::class)->name('admin.addnews');
    Route::get('/admin/news/edit/{news_id}',AdminEditNewsComponent::class)->name('admin.editnews');

    Route::get('/admin/generate-pdf', [PDFController::class, 'generatePDF'])->name('admin.exportPDF');
});

// Route::get('generate-pdf', [PDFController::class, 'generatePDF']);
// Route::controller(PDFController::class)->group(function()
// {
//     Route::get('generate-pdf','generatePDF')->name('species-pdf');
// });

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
