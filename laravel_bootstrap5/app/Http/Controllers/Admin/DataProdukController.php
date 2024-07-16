<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class DataProdukController extends Controller
{
    //menu data produk
    public function index()
    {
        $title = "DataProduk";
        return view("admin.DataProduk.index", ['title' => $title]);
    }
}
