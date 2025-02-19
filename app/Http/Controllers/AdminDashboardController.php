<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
        public function loadAdminDAshboard()
    {
        return view('Admin.admin_dashboard');
    }
}
