<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
        public function loadAdminDAshboard()
    {
        return view('Admin.admin_dashboard');
    }

    public function loadDoctorListings()
    {
        return view('Admin.doctor_listing');
    }

    public function loadDoctorForm()
    {
        return view('Admin.doctor_form');
    }

    public function loadSpecialityListing()
    {
        return view('Admin.speciality');
    }
    public function loadSpecialityForm()
    {
        return view('Admin.speciality_form');
    }
}
