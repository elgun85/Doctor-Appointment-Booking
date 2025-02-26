<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctorDashboardController;
use App\Http\Controllers\PatientDashboardController;
use App\Http\Controllers\AdminDashboardController;
Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified','patient'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');



    Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    Route::get('admin_dashboard', [AdminDashboardController::class, 'loadAdminDAshboard'])->name('admin.dashboard');

    Route::get('doctor_listings', [AdminDashboardController::class, 'loadDoctorListings'])->name('admin.doctor_listings');
    Route::get('/create/doctor', [AdminDashboardController::class, 'loadDoctorForm'])->name('admin.create.doctor');

                                                /* Speciality */
    Route::get('/speciality', [AdminDashboardController::class, 'loadSpecialityListing'])->name('admin.speciality');
    Route::get('/create/speciality', [AdminDashboardController::class, 'loadSpecialityForm'])->name('admin.create.speciality');

});


Route::prefix('doctor')->middleware(['auth', 'doctor'])->group(function () {
    Route::get('doctor_dashboard', [DoctorDashboardController::class, 'loadDoctorDashboard'])->name('doctor.dashboard');
});


require __DIR__.'/auth.php';
