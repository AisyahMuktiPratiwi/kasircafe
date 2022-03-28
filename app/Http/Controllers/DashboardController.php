<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\TransaksiDetail;
use App\Models\TransaksiHeader;
use App\Models\User;
use Auth;


use Illuminate\Http\Request;


class DashboardController extends Controller
{
    //
    public function index(Request $request){

        $jumlahmenu = Product::count();
        $jumlahuser = User::count();
        $lprn=  TransaksiHeader::count();
        $laporan =TransaksiHeader::with('user')->where('user_id', Auth::user()->id)->count();

        return view('dashboard', compact('jumlahmenu','jumlahuser','lprn','laporan'));
    }
}
