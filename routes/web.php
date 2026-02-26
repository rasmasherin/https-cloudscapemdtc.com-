<?php

use Illuminate\Support\Facades\Route;

// =====================
// Frontend Controllers
// =====================
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServController;
use App\Http\Controllers\CareerfrontendController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\CareerApplicationController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ConsultationController;
// =====================
// Admin Controllers
// =====================
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\CareerController;
use App\Http\Controllers\Admin\CareerApplicationController as AdminCareerApplicationController;
use App\Http\Controllers\Admin\ContactMessageController;
use App\Http\Controllers\Admin\AppointmentController as AdminAppointmentController;
use App\Http\Controllers\Admin\GalleryController as AdminGalleryController;
use App\Http\Controllers\Admin\BlogController as AdminBlogController;
use App\Http\Controllers\Admin\ConsultationController as AdminConsultationController;
use App\Http\Controllers\AdminForgotPasswordController;

/*
|--------------------------------------------------------------------------
| Frontend Pages
|--------------------------------------------------------------------------
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

// Services
Route::get('/services', [ServController::class, 'index'])->name('services.index');
Route::get('/services/{service}', [ServController::class, 'show'])->name('services.show');

// Static Pages
Route::get('/about', fn () => view('about'))->name('about');
Route::get('/contact', fn () => view('contact'))->name('contact');
Route::get('/careers', [CareerfrontendController::class, 'index'])->name('careers');
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');

/*
|--------------------------------------------------------------------------
| Blog Routes (Frontend)
|--------------------------------------------------------------------------
*/

Route::prefix('blogs')->name('blogs.')->group(function () {
    Route::get('/', [BlogController::class, 'index'])->name('index');
    Route::get('/{slug}', [BlogController::class, 'show'])->name('show');
});

/*
|--------------------------------------------------------------------------
| Frontend POST Routes
|--------------------------------------------------------------------------
*/

// Contact Form
Route::post('/contact-submit', [ContactMessageController::class, 'store'])
    ->name('contact.submit');

// Appointments
Route::post('/appointments/store', [AppointmentController::class, 'store'])
    ->name('appointments.store');

// Career Application
Route::post('/career/apply', [CareerApplicationController::class, 'store'])
    ->name('career.apply');


Route::post('/consultation/store', [ConsultationController::class, 'store'])
    ->name('consultation.store');

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

Route::prefix('admin')->name('admin.')->group(function () {

    // ---------- Auth ----------
    Route::get('login', [AuthController::class, 'loginForm'])->name('login');
    Route::post('login', [AuthController::class, 'login']);

    // ---------- Forgot Password ----------
    Route::get('forgot-password', [AdminForgotPasswordController::class, 'showEmailForm'])
        ->name('forgot');

    Route::post('forgot-password', [AdminForgotPasswordController::class, 'checkEmail'])
        ->name('check.email');

    Route::post('reset-password', [AdminForgotPasswordController::class, 'resetPassword'])
        ->name('reset.password');

    // ---------- Protected Admin Routes ----------
    Route::middleware('auth:admin')->group(function () {

        // Dashboard
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::post('logout', [AuthController::class, 'logout'])->name('logout');

        // Services
        Route::resource('services', ServiceController::class);

        // Careers
        Route::resource('careers', CareerController::class);
        Route::patch('careers/{career}/toggle-status', [CareerController::class, 'toggleStatus'])
            ->name('careers.toggleStatus');

        // Career Applications
        Route::get('career-applications', [AdminCareerApplicationController::class, 'index'])
            ->name('career_applications.index');
        Route::get('career-applications/{id}', [AdminCareerApplicationController::class, 'show'])
            ->name('career_applications.show');
        Route::get('career-applications/download/{id}', [AdminCareerApplicationController::class, 'downloadResume'])
            ->name('career_applications.download');
        Route::delete('career-applications/{id}', [AdminCareerApplicationController::class, 'destroy'])
            ->name('career_applications.destroy');

        // Contact Messages
        Route::get('contact-messages', [ContactMessageController::class, 'index'])
            ->name('contact_messages.index');
        Route::get('contact-messages/{contactMessage}', [ContactMessageController::class, 'show'])
            ->name('contact_messages.show');
        Route::delete('contact-messages/{contactMessage}', [ContactMessageController::class, 'destroy'])
            ->name('contact_messages.destroy');

        // Appointments
        Route::get('appointments', [AdminAppointmentController::class, 'index'])
            ->name('appointments.index');
        Route::get('appointments/{appointment}', [AdminAppointmentController::class, 'show'])
            ->name('appointments.show');
        Route::post('appointments/{appointment}/status', [AdminAppointmentController::class, 'updateStatus'])
            ->name('appointments.updateStatus');

        // Consultations ✅ FIXED
        Route::get('consultations', [AdminConsultationController::class, 'index'])
            ->name('consultations.index');

        // Gallery
        Route::get('gallery', [AdminGalleryController::class, 'index'])->name('gallery.index');
        Route::post('gallery', [AdminGalleryController::class, 'store'])->name('gallery.store');
        Route::delete('gallery/{gallery}', [AdminGalleryController::class, 'destroy'])->name('gallery.destroy');

        // Blogs
        Route::resource('blogs', AdminBlogController::class);
        Route::patch('blogs/{id}/toggle-status', [AdminBlogController::class, 'toggleStatus'])
            ->name('blogs.toggleStatus');
    });
});
