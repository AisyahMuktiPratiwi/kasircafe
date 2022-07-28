@extends('layouts.master')
@section('title')

<style>
.blink {
    animation: blink-animation 1s steps(5, start) infinite;
    -webkit-animation: blink-animation 1s steps(5, start) infinite;
}

@keyframes blink-animation {
    to {
        visibility: hidden;
    }
}

@-webkit-keyframes blink-animation {
    to {
        visibility: hidden;
    }
}
</style>

<title>
    Cafe Ngopi | Dashboard
</title>
@endsection


@section('content-header')
<section class="content-header">
    <div class="container-fluid">
        <div class="row">
            @if(Auth::user()->level =='Manager')
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box" style="background-color:rgb(160, 135, 135);color:gold">
                    <div class="inner">
                        <h3>{{$jumlahmenu}}</h3>

                        <p>Jumlah Menu</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-mug-hot"></i>
                    </div>
                    <a href="/product" class="small-box-footer" style="color:gold">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box" style="background-color:rgb(160, 135, 135);color:gold">
                    <div class="inner">
                        <h3> {{ $lprn }}</h3>

                        <p>Transaksi Seluruh Kasir </p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-file-invoice"></i>
                    </div>
                    <a href="/laporanMj" class="small-box-footer" style="color:gold">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            @endif
            @if(Auth::user()->level =='Kasir')
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box" style="background-color:rgb(160, 135, 135);color:gold">
                    <div class="inner">
                        <h3>
                            {{ $laporan }}


                        </h3>

                        <p>Jumlah Transaksi </p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-file-invoice"></i>
                    </div>
                    <a href="/laporan" class="small-box-footer" style="color:gold">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            @endif
            <!-- ./col -->
            @if(Auth::user()->level =='Admin')
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box" style="background-color:rgb(160, 135, 135);color:gold">
                    <div class=" inner">
                        <h3>{{$jumlahuser}}</h3>

                        <p>Jumlah Pengguna</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-user-edit"></i>
                    </div>
                    <a href="/user" class="small-box-footer" style="color:gold">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            @endif
            <!-- ./col -->

            <!-- ./col -->
        </div>
    </div>
</section>
@endsection
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="card"
                style="box-shadow: rgb(224, 210, 210) 7px 8px 14px;width:80%;margin:0 auto;color:rgb(160, 135, 135) ;text-align:center;padding:50px;border:10px dashed rgb(224, 210, 210);background-color:rgb(246, 244, 244)">
                <div class="blink">
                    <h1 style="font-family: 'Sail', cursive;font-size:35px;">Selamat Datang di Dashboard
                        {{Auth::user()->level}}</h1>

                    <br>

                    <h6 style="font-family: 'Vast Shadow' , cursive; font-size: 15px;">Silahkan lakukan aktivitas sesuai
                        hak
                        ases yang telah diberikan !
                    </h6>
                </div>
            </div>
        </div>

    </div>
    <!-- @if(Auth::user()->level == 'Kasir')
    <div class="card-body" style="background-color:rgb(246, 244, 244);">
        <table id="" class="table table-striped table-hover table-bordered table-responsive-lg">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Barcode</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Status</th>

                </tr>
            </thead>
            <tbody>
                @forelse ($product as $pr)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $pr->name }}</td>
                    <td> <img src="{{ asset('gmbrproduct/'.$pr->image)}}" alt="" style="width:100px;">
                    </td>
                    <td> @php
                        echo DNS1D::getBarcodeSVG($pr->barcode, 'C128');
                        @endphp</td>
                    <td>{{ $pr->description }}</td>
                    <td>{{ $pr->price }}</td>
                    <td>{{ $pr->quantity }}</td>
                    @if ($pr->status == 1)
                    <td><a href="#" class="btn btn-success">Active</a></td>
                    @else
                    <td><a href="#" class="btn btn-danger">Inactive</a></td>
                    @endif

                </tr>
                @empty
                <tr>
                    <td colspan="9" class="text-center">Belum Ada Data</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    @endif -->

</section>
<br>
<br>




@endsection