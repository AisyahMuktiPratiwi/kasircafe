@extends('layouts.master')

@section('title')
<title>Cafe Ngopi | Product</title>
@endsection

@section('content-header')
<section class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="card-header"
                style="background-color:rgb(246, 244, 244);border-radius:20px;width:50%;color:rgb(160, 135, 135);text-align:center;box-shadow: rgb(160, 135, 135) 2px 3px 9px;">

                <h1 style=" font-family: 'Vast Shadow' , cursive; ">List Data Menu</h1>
            </div>

            <div class=" col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/dashboard" style="color: rgb(160, 135, 135)">Home</a></li>
                    <li class="breadcrumb-item"><a href="/product" style="color:rgb(160, 135, 135)">Product</a></li>
                </ol>
            </div>
        </div>
    </div>
</section>
@endsection

@section('content')
<div class="card-body" style="background-color:rgb(246, 244, 244);">
    <table id="" class="table table-striped table-hover table-bordered table-responsive-lg">

        <thead>
            <tr>
                <th>#</th>
                <th>Nama Kasir</th>
                <th>Nama Product</th>
                <th>Quantity</th>
                <th>Jumlah harga</th>
                <th>Uang Yang Dibayar</th>
                <th>Kembalian</th>
                <th>Tipe Pembayaran</th>
                <th>Status</th>
                <th>Tanggal</th>


            </tr>
        </thead>
        <tbody>



            <tr>

                <td>{{ $laporan->username }}</td>
                <td>{{ $laporan->product->name }}</td>
                <td>{{ $laporan->qty }}</td>
                <td>Rp. {{ number_format($lprn->jumlah, 2, '.', ',') }}</lprnd>
                <td>Rp. {{ number_format($lprn->dibayar, 2, '.', ',') }}</td>

                <td>Rp. {{ number_format($lprn->dibayar - $lprn->jumlah, 2, '.', ',') }}</td>
                <td>{{$laporan->tipe_pembayaran}}</td>
                <td>{{$laporan->status}}</td>

                <td>{{$laporan->created_at}}
                </td>

            </tr>




        </tbody>
    </table>
</div>
@endsection