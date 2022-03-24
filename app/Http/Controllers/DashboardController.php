<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\User;



use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index(){
        $jumlahmenu = Product::count();
        $jumlahuser = User::count();

        return view('dashboard', compact('jumlahmenu','jumlahuser'));
    }
}