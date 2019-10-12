<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // ## -- 1. View Admin Page
    public function viewAdminLanding(){
        return view("admin.signin");
    }

    // ## -- 2. View Admin Dashboard
    public function viewAdminDashboard(){
        return view("admin.dashboardContents.landing");
    }
}
