<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoctorDashboardController extends Controller
{
        public function loadDoctorDashboard()
    {

        return view('Doctor.doctor_dashboard');
    }
}
