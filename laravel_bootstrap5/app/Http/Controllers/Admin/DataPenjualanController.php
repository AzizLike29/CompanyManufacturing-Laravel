<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class DataPenjualanController extends Controller
{
    //menu data penjualan
    public function index()
    {
        $title = "DataPenjualan";
        return view('admin.DataPenjualan.index', ['title' => $title]);
    }
}
