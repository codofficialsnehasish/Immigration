<?php

use App\Http\Controllers\{
    ProfileController,
    ServiceController,
    ContactUsController,
    TeamController,
    BannerController,
    TestimonialsController,
    LegalInformationController,
    FaqControllers,
    AboutUsController,
};

use App\Http\Controllers\Site\{
    ServicesController,
    AboutUs,
    HomeController,
    LegalInfo,
    BlogResources,
    FAQController,
    ContactUs,
};

use Illuminate\Support\Facades\Route;

Route::get('/',[HomeController::class,'index'])->name('home');

Route::get('/how-it-works', function () {
    return view('site.how-it-works');
})->name('how-it-works');


Route::get('about',[AboutUs::class,'index'])->name('about');


Route::get('service',[ServicesController::class,'index'])->name('service');
Route::get('service/{id}/details',[ServicesController::class,'details'])->name('service.details');

Route::post('save-contact-us',[ContactUsController::class,'store'])->name('contact.store');

Route::controller(LegalInfo::class)->group( function() {
    Route::get('privacy-policy','privacy_policy')->name('privacy-policy');
    Route::get('data-security-measures','data_security_measures')->name('data-security-measures');
    Route::get('terms-conditions','terms_conditions')->name('terms-conditions');
});

Route::controller(BlogResources::class)->group( function() {
    Route::get('blogs-resources','index')->name('blogs-resources.index');
    Route::get('blogs-details','blog_details')->name('blogs-resources.details');
});

Route::get('faq',[FAQController::class,'index'])->name('faq');
Route::get('contact-us',[ContactUs::class,'index'])->name('contact');

Route::get('/dashboard', function () {
    return view('site.user-dashboard.dashboard');
})->middleware(['auth:web', 'verified'])->name('dashboard');

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth:admin', 'verified'])->name('admin.dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('services', ServiceController::class);
});

Route::middleware(['auth:admin', 'verified'])->group(function () {
    Route::get('contacts/contact-us-index',[ContactUsController::class,'contact_us_index'])->name('contact.contact-us-index');
    Route::put('contacts/contact-us-index/create',[ContactUsController::class,'create'])->name('contact.contact-us-index.create');
    Route::get('contacts/index',[ContactUsController::class,'index'])->name('contact.index');
    Route::delete('contacts/{id}/destroy',[ContactUsController::class,'destroy'])->name('contact.destroy');

    Route::resource('team',TeamController::class);
    Route::resource('banner',BannerController::class);
    Route::resource('testimonials',TestimonialsController::class);
    Route::resource('legal-information',LegalInformationController::class);
    Route::resource('faqs',FaqControllers::class);
    Route::resource('about-us',AboutUsController::class);
});

require __DIR__.'/auth.php';
