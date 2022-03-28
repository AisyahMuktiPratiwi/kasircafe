@extends('layouts.master')

@section('title')
<title>Cafe Ngopi | Cart</title>
@endsection

@section('content-header')
<section class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="card-header"
                style="background-color:rgb(246, 244, 244);border-radius:20px;width:50%;color:rgb(160, 135, 135);text-align:center;box-shadow: rgb(160, 135, 135) 2px 3px 9px;">

                <h1 style=" font-family: 'Vast Shadow' , cursive; ">Cart</h1>
            </div>

            <div class=" col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/dashboard" style="color: rgb(160, 135, 135)">Home</a></li>
                    <li class="breadcrumb-item"><a href="#" style="color:rgb(160, 135, 135)">Cart</a></li>
                </ol>
            </div>
        </div>
    </div>
</section>
@endsection

@section('content')
<section class="content">
    <div class="container-fluid">

        <div class="row">

            <div class="col-4">
                <div class="card">
                    <div class="card-header" style="color:gold;background-color:rgb(160, 135, 135)">
                        <h3 class="card-title">Profil Kasir</h3>
                    </div>
                    <div class="card-body d-flex justify-content-between">

                        <div class="d-flex flex-column">
                            <p>Nama Kasir : {{ Auth::user()->name }}</b> </p>
                            <p class="ref"></p>
                            <p class="tgl">Tanggal : {{ date('Y-m-d') }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <div class="card-header" style="color:gold;background-color:rgb(160, 135, 135)">
                        <h3 class="card-title">Pilih Barang</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('cart.store') }}" method="post">
                            @csrf
                            @method('POST')
                            <div class="form-group">
                                <label for="">Pilih Produk</label>
                                <select name="product_id" class="form-control">

                                    @foreach ($products as $product)
                                    <option value="{{ $product->id }}">{{ $product->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Qty</label>
                                <input type="number" name="quantity" value="1" class="form-control">
                            </div>
                            <button type="submit" class="btn"
                                style="color:gold;background-color:rgb(160, 135, 135)">Tambah ke Keranjang</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <div class="card">
                        <div class="card-header" style="color:gold;background-color:rgb(160, 135, 135)">
                            <h3 class="card-title">Total Belanja</h3>
                        </div>
                        <div class="card-body d-flex align-items-center justify-content-center"
                            style="background-color:rgb(230, 219, 219);">
                            <h1 class=" text-bold totalnya" style="color:rgb(160, 135, 135)">Rp.
                                {{ number_format($total_belanja, 2, ',', '.') }}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header" style="color:gold;background-color:rgb(160, 135, 135)">
                        <h3 class="card-title">Keranjang Barang
                        </h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-hovered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama Barang</th>
                                    <th>Barcode</th>
                                    <th>Qty</th>
                                    <th>Harga (Rp.)</th>
                                    <th>Subtotal (Rp.)</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cart as $ct)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $ct->product->name }}</td>
                                    <td>@php
                                        echo DNS1D::getBarcodeSVG($ct->barcode, 'C39');
                                        @endphp</td>
                                    <td>{{ $ct->quantity }}</td>
                                    <td>{{ $ct->product->price }}</td>
                                    <td>{{ $ct->subTotal }}</td>
                                    <td>
                                        <a class="btn btn-outline-warning delete" data-id="{{$ct->id}}"
                                            data-nama="{{$ct->name}}"
                                            style="color:rgb(104, 75, 64) ; border-color:rgb(104, 75, 64);"><i class=" fas
                                                fa-trash"></i></button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer d-flex justify-content-end">
                        <a href="{{ route('order.index') }}" class="btn"
                            style="color:gold;background-color:rgb(160, 135, 135)">CheckOut</a>
                    </div>
                </div>
            </div>
        </div>
</section>
@endsection
