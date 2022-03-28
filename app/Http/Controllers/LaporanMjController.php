<?php

namespace App\Http\Controllers;

use App\Exports\LaporanExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;

use App\Models\Product;
use App\Models\TransaksiDetail;
use App\Models\TransaksiHeader;
use App\Models\User;
use TransaksiHeader as GlobalTransaksiHeader;

class LaporanMjController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
$data= Product::all();

$data = TransaksiDetail::all();

$laporan = TransaksiHeader::all
();

        return view('laporan.manager', compact('laporan','data'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function laporanexport()
    {
        //
        return Excel::download(new LaporanExport,'laporan.xlsx');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function tgl(Request $request)
    {
        //

        if (request()->start_date || request()->end_date) {
            $start_date = Carbon::parse(request()->start_date)->toDateTimeString();
            $end_date = Carbon::parse(request()->end_date)->toDateTimeString();
            $laporan = TransaksiHeader::whereBetween('created_at',[$start_date,$end_date])->get();
        } else {
            $laporan = TransaksiHeader::latest()->get();
        }

        return view('laporan.manager', compact('laporan'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {

        $keyword = $request->search;

        $laporan = TransaksiHeader::where('username', 'like', "%" . $keyword . "%")->paginate(5);
        return view('laporan.manager', compact('laporan'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
