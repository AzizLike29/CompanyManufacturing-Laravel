<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class AppController extends Controller
{
    //menu dashboard
    public function app()
    {
        $title = "Company Manufacturing";
        return view('layouts.app', ['title' => $title]);
    }
}
