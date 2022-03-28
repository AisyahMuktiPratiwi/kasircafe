@extends('layouts.master')

@section('title')
<title>Cafe Ngopi | Check Out</title>
@endsection

@section('content-header')
<section class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="card-header"
                style="background-color:rgb(246, 244, 244);border-radius:20px;width:50%;color:rgb(160, 135, 135);text-align:center;box-shadow: rgb(160, 135, 135) 2px 3px 9px;">

                <h1 style=" font-family: 'Vast Shadow' , cursive; ">Checkout</h1>
            </div>

            <div class=" col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/dashboard" style="color: rgb(160, 135, 135)">Home</a></li>
                    <li class="breadcrumb-item"><a href="#" style="color:rgb(160, 135, 135)">Checkout</a></li>
                </ol>
            </div>
        </div>
    </div>
</section>
@endsection

@section('content')
<section class="content">
    <div class="container-fluid">

        <div class="card">
            <div class="card-header" style="background-color: rgb(160, 135, 135);color:gold">
                <h3 class="card-title">CheckOut</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Barang</th>
                            <th>Barcode</th>
                            <th>Qty</th>
                            <th>Harga</th>
                            <th>SubTotal(Rp.)</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($checkout as $carts)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $carts->product->name }}</td>
                            <td> @php
                                echo DNS1D::getBarcodeSVG($carts->barcode, 'C39');
                                @endphp</td>
                            <td>{{ $carts->quantity }}</td>
                            <td>{{ number_format($carts->product->price, 2, ',', '.') }}</td>
                            <td>{{ number_format($carts->subTotal, 2, ',', '.') }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer text-right">
                <div class="form-group">
                    <label for="">SubTotal</label>
                    <p>Rp. {{ number_format($subTotal, 2, ',', '.') }}</p>
                </div>
                <div class="form-group">
                    <label for="">(PPN 10 %)</label>
                    <p>Rp. {{ number_format($subTotal / 10, 2, ',', '.') }}</p>
                </div>
                <div class="form-group">
                    <label for="">Total</label>
                    <p>Rp. {{ number_format($subTotal + $subTotal / 10, 2, ',', '.') }}</p>
                </div>
                <div class="form-group">
                    <label for="">Uang Cash</label>
                    @if ($cash = Session::get('cash'))
                    <p>Rp. {{ number_format($cash, 2, ',', '.') }}</p>
                    @else
                    <p>Rp. 0</p>
                    @endif
                </div>
                <div class="form-group">
                    <label for="">Kembali</label>
                    @if ($cash = Session::get('cash'))
                    <p>Rp. {{ number_format($cash - ($subTotal + $subTotal / 10), 2, ',', '.') }}</p>
                    @else
                    <p>Rp. 0</p>
                    @endif
                </div>
                <div class="form-group d-flex">
                    <button type="button" class="btn-payment btn btn-sm  ml-1" data-toggle="modal"
                        data-target="#modalPayment" style="background-color:grey;color:gold">
                        Pembayaran
                    </button>
                    &nbsp;
                    &nbsp;
                    <form action="{{ route('do_transaction.store') }}" method="post">
                        @csrf
                        @method('POST')
                        <input type="hidden" name="total" value="{{ $subTotal + $subTotal / 10 }}">
                        @if ($cash = Session::get('cash'))
                        <input type="hidden" name="dibayar" value="{{ $cash }}">
                        @else
                        <input type="hidden" name="dibayar" value="0">
                        @endif

                        <input type="hidden" class="form-control" name="username" value="{{Auth::user()->name}}">

                        <button type="submit" class="btn text-right"
                            style="background-color:rgb(104, 75, 64);color:gold"> Transaksi</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="modal fade" id="modalPayment" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style=" background-color:rgb(160, 135, 135);color:gold;opacity:0.9;">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    Pembayaran</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('order.store') }}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <input type="hidden" name="total" value="{{ $subTotal + $subTotal / 10 }}">

                            <div class="form-group">
                                <label for="">Total Harga</label>
                                <input type="text" value="{{ number_format($subTotal + $subTotal / 10, 2, ',', '.') }}"
                                    class="form-control " name="total_hargaa" disabled>
                            </div>
                            <div class="form-group">
                                <label for="">Nominal Uang : </label>
                                <input type="number" class="form-control" name="nominal">
                            </div>


                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn" style="background-color:rgb(104, 75, 64);color:gold">Pembayaran
                        via
                        Cash/Manual</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection