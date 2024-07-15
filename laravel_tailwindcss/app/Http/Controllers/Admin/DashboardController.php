<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    //menu dashboard
    public function index()
    {
        $title = "Dashboard";
        return view('admin.dashboard.index', ['title' => $title]);
    }
}
