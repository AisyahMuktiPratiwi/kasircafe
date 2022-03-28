@extends('layouts.master')

@section('title')
<title>Cafe Ngopi | Laporan</title>
@endsection

@section('content-header')
<section class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="card-header"
                style="background-color:rgb(246, 244, 244);border-radius:20px;width:50%;color:rgb(160, 135, 135);text-align:center;box-shadow: rgb(160, 135, 135) 2px 3px 9px;">

                <h1 style=" font-family: 'Vast Shadow' , cursive; ">List Transaksi</h1>
            </div>

            <div class=" col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/dashboard" style="color: rgb(160, 135, 135)">Home</a></li>
                    <li class="breadcrumb-item"><a href="/laporan" style="color:rgb(160, 135, 135)">Laporan</a></li>
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
            <div class="col-12">
                <div class="card" style="box-shadow: rgb(160, 135, 135) 7px 8px 14px;">
                    <div class="card-header" style="background-color:rgb(246, 244, 244);">
                        <div class="row">
                            <div class="col-md-6 mt-4">
                                <form action="/tanggal" method="GET">
                                    <div class="input-group mb-3">
                                        <input type="date" class="form-control" name="start_date" required>
                                        <input type="date" class="form-control" name="end_date" required>
                                        <button class="btn" type="submit"
                                            style="color:gold;background-color:rgb(160, 135, 135)">GET</button>
                                        <a href="/laporan" class="btn" type="submit"
                                            style="color:gold;background-color:rgb(104, 75, 64);margin-left:10px">Refresh</a>
                                    </div>

                                </form>
                            </div>


                            <div class="col-md-2 mt-4">

                                <a href="{{route('exportlaporan')}}" class="btn"
                                    style="background-color: grey;color:gold"><i class="fas fa-download"></i>
                                    export</a>

                            </div>



                        </div>

                    </div>


                    <div class="card-body" style="background-color:rgb(246, 244, 244);">
                        <table id="" class="table table-striped table-hover table-bordered table-responsive-lg">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama Product</th>
                                    <th>Quantity</th>
                                    <th>Jumlah harga</th>
                                    <th>Uang Yang Dibayar</th>
                                    <th>Tipe Pembayaran</th>
                                    <th>Status</th>
                                    <th>Tanggal</th>


                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($laporan as $lprn)
                                @if ($lprn->user->id == Auth::user()->id)

                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $lprn->product->name }}</td>
                                    <td>{{ $lprn->qty }}</td>
                                    <td>{{$lprn->jumlah}}</td>
                                    <td>{{$lprn->dibayar}}</td>
                                    <td>{{$lprn->tipe_pembayaran}}</td>
                                    <td>{{$lprn->status}}</td>

                                    <td>{{$lprn->created_at}}</td>

                                </tr>


                                @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>




                </div>
            </div>
        </div>
    </div>

</section>






























@endsection