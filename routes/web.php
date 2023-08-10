<?php

use Barryvdh\DomPDF\PDF;
use App\Http\Controllers\newsPDF;
use App\Http\Controllers\UsersPDF;
use App\Http\Livewire\HomeComponent;
use App\Http\Controllers\CategoryPDF;
use App\Http\Controllers\ContactsPDF;
use App\Http\Controllers\TaxonomyPDF;
use App\Http\Livewire\AboutComponent;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocumentsPDF;
use App\Http\Controllers\PDFController;
use App\Http\Livewire\ContactComponent;
use App\Http\Livewire\SpeciesComponent;
use App\Http\Controllers\NotificationPDF;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ChartJSController;
use App\Http\Controllers\ProfileController;
use App\Http\Livewire\NewsDetailsComponent;
use App\Http\Livewire\SpeciesDetailsComponent;
use App\Http\Livewire\Admin\AdminNewsComponent;
use App\Http\Livewire\User\UserContactComponent;
use App\Http\Livewire\Admin\AdminAddNewsComponent;
use App\Http\Livewire\Admin\AdminContactComponent;
use App\Http\Livewire\Admin\AdminSpeciesComponent;
use App\Http\Livewire\User\UserDashboardComponent;
use App\Http\Livewire\Admin\AdminCategoryComponent;
use App\Http\Livewire\Admin\AdminEditNewsComponent;
use App\Http\Livewire\Admin\AdminTaxonomyComponent;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Admin\AdminAddSpeciesComponent;
use App\Http\Livewire\Admin\AdminAddCategoryComponent;
use App\Http\Livewire\Admin\AdminAddTaxonomyComponent;
use App\Http\Livewire\Admin\AdminEditSpeciesComponent;
use App\Http\Livewire\Admin\AdminEditCategoryComponent;
use App\Http\Livewire\Admin\AdminEditTaxonomyComponent;
use App\Http\Livewire\Admin\AdminNotificationComponent;
use App\Http\Livewire\Admin\AdminRegisterUserComponent;
use App\Http\Livewire\Admin\AdminAddNotificationComponent;
use App\Http\Livewire\Admin\AdminAddRegisterUserComponent;
use App\Http\Livewire\Admin\AdminEditNotificationComponent;
use App\Http\Livewire\Admin\AdminEditRegisterUserComponent;

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
Route::get('/contact',ContactComponent::class)->name('contact');
Route::get('/species',SpeciesComponent::class)->name('species');
Route::get('/news/{title}',NewsDetailsComponent::class)->name('news.details');
Route::get('/species/{regularName}',SpeciesDetailsComponent::class)->name('species.details');
Route::get('/chart', [ChartJSController::class, 'index'])->name('statistics');
Route::get('/userDownload', [PagesController::class, 'userDownload'])->name('userDownload');
Route::post('/search_document',[PagesController::class,'searchDocumentUser'])->name('searchDocumentUser');
Route::get('/autocomplete-searchUser', [PagesController::class, 'autocompleteSearchUser'])->name('autocompleteSearchUser');
Route::get('/view/{id}', [PagesController::class, 'view']);

//For User 
Route::middleware(['auth:sanctum', 'verified'])->group(function (){
    Route::get('/user/dashboard',UserDashboardComponent::class)->name('user.dashboard');
    Route::get('/user/contact',UserContactComponent::class)->name('user.contact');
});

//For Admin
Route::middleware('auth')->group(function (){
    Route::get('/admin/dashboard',AdminDashboardComponent::class)->name('admin.dashboard');
    Route::get('/admin/contact',AdminContactComponent::class)->name('admin.contact');

    Route::get('/user/register',AdminRegisterUserComponent::class)->name('admin.register');
    Route::get('/user/register/add',AdminAddRegisterUserComponent::class)->name('admin.add.register');
    Route::get('/user/register/edit/{user_id}',AdminEditRegisterUserComponent::class)->name('admin.edit.register');

    Route::get('/user/taxonomy',AdminTaxonomyComponent::class)->name('admin.taxonomies');
    Route::get('/user/taxonomy/add',AdminAddTaxonomyComponent::class)->name('admin.add.taxonomy');
    Route::get('/user/taxonomy/edit/{taxonomy_id}',AdminEditTaxonomyComponent::class)->name('admin.edit.taxonomy');

    Route::get('/user/categories',AdminCategoryComponent::class)->name('admin.categories');
    Route::get('/user/category/add',AdminAddCategoryComponent::class)->name('admin.addcategory');
    Route::get('/user/category/edit/{category_slug}',AdminEditCategoryComponent::class)->name('admin.editcategory');

    Route::get('/user/species',AdminSpeciesComponent::class)->name('admin.species');
    Route::get('/user/species/add',AdminAddSpeciesComponent::class)->name('admin.addspecies');
    Route::get('/admin/species/edit/{specie_id}',AdminEditSpeciesComponent::class)->name('admin.editspecies');

    Route::get('/user/news',AdminNewsComponent::class)->name('admin.news');
    Route::get('/user/news/add',AdminAddNewsComponent::class)->name('admin.addnews');
    Route::get('/user/news/edit/{new_id}',AdminEditNewsComponent::class)->name('admin.editnews');
    
    Route::get('/user/notification',AdminNotificationComponent::class)->name('admin.notification');
    Route::get('/user/notification/add',AdminAddNotificationComponent::class)->name('admin.add.notification');
    Route::get('/user/notification/edit/{notification_id}',AdminEditNotificationComponent::class)->name('admin.edit.notification');

    Route::get('/user/generate-pdf', [PDFController::class, 'generatePDF'])->name('admin.exportPDF');
    Route::get('/user/generate-NewsPdf', [newsPDF::class, 'generateNewsPdf'])->name('admin.exportNewsPDF');
    Route::get('/user/category-pdf', [CategoryPDF::class, 'categoryPDF'])->name('admin.categoryPDF');
    Route::get('/user/contact-Pdf', [ContactsPDF::class, 'contactPdf'])->name('admin.contactsPDF');
    Route::get('/user/document-pdf', [DocumentsPDF::class, 'documentPDF'])->name('admin.documentPDF');
    Route::get('/user/notification-Pdf', [NotificationPDF::class, 'notificationPdf'])->name('admin.notificationsPDF');
    Route::get('/user/taxonomy-pdf', [TaxonomyPDF::class, 'taxonomyPDF'])->name('admin.taxonomyPDF');
    Route::get('/user/user-Pdf', [UsersPDF::class, 'usersPdf'])->name('admin.usersPDF');
});

Route::middleware('auth')->group(function () {
    Route::get('/uploadpage', [PagesController::class, 'uploadpage'])->name('uploadpage');

    Route::post('/uploadproduct', [PagesController::class, 'store']);

    Route::get('/delete/{id}', [PagesController::class, 'remove']);

    Route::get('/show', [PagesController::class, 'show'])->name('show');

    Route::get('/download/{file}', [PagesController::class, 'download']);

    Route::get('/autocomplete-search', [PagesController::class, 'autocompleteSearch'])->name('autocompleteSearch');
    Route::post('/search',[PagesController::class,'searchDocument'])->name('searchDocument');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
