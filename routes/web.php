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
    HowItWorksController,
    BlogController,
    HomeDataController,
    SettingController,
    Dashboard,
};

use App\Http\Controllers\Site\{
    ServicesController,
    AboutUss,
    HomeController,
    LegalInfo,
    BlogResources,
    FAQController,
    ContactUs,
    HowItWork,
};

use Illuminate\Support\Facades\Route;


// ================================= Site Routes ===============================

Route::get('/',[HomeController::class,'index'])->name('home');

Route::get('how-it-works',[HowItWork::class,'index'])->name('how-it-works');

Route::get('about',[AboutUss::class,'index'])->name('about');


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
    Route::get('blogs-details/{slug?}','blog_details')->name('blogs-resources.details');
});

Route::get('faq',[FAQController::class,'index'])->name('faq');
Route::get('contact-us',[ContactUs::class,'index'])->name('contact');



// ========================================= Admin Routes ===============================

Route::get('/dashboard', function () {
    return view('site.user-dashboard.dashboard');
})->middleware(['auth:web', 'verified'])->name('dashboard');

// Route::get('/admin/dashboard', function () {
//     return view('admin.dashboard');
// })->middleware(['auth:admin', 'verified'])->name('admin.dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth:admin', 'verified'])->group(function () {
    Route::prefix('admin')->group( function (){
        
        Route::get('dashboard',[Dashboard::class,'index'])->name('admin.dashboard');
        
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
        Route::resource('how-it-work',HowItWorksController::class);
        Route::resource('blogs',BlogController::class);
        Route::resource('services', ServiceController::class);
        Route::resource('settings', SettingController::class);

        Route::controller(HomeDataController::class)->group( function (){
            Route::get('home-data','index')->name('home-data.index');

            Route::post('home-data/why-choose-us-store','why_choose_us_store')->name('why-choose-us-store.store');
            Route::put('home-data/{id}/why-choose-us-update','why_choose_us_update')->name('why-choose-us-store.update');
            Route::delete('home-data/{id}/why-choose-us-destroy','why_choose_us_delete')->name('why-choose-us-store.destroy');
            
            Route::put('home-data/{id}/our-services-store','store_our_services')->name('our-services.store');

            Route::put('home-data/{id}/update-home-about','update_home_about')->name('home-about.update');


            Route::put('home-data/{id}/update-eligibility-assessment','update_eligibility_assessment')->name('update-eligibility-assessment.update');
            Route::delete('home-data/{id}/delete-eligibility-assessment-details','delete_eligibility_assessment_details')->name('delete-eligibility-assessment-details.destroy');
        });

    });
});

require __DIR__.'/auth.php';
