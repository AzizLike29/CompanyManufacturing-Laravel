<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class LogoutController extends Controller
{
    //menu logout
    public function index()
    {
        $title = "Logout";
        return view("admin.logout.index", ['title' => $title]);
    }
}
