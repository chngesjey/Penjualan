<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Kategori;
use App\Models\Supplier;
use Illuminate\Routing\Controller;

class DashboardController extends Controller
{
    public function index(){
        $barang = Barang::all();
        $kategori = Kategori::all();
        $supplier = Supplier::all();
        return view('home', compact('barang', 'supplier', 'kategori'));
    }
}