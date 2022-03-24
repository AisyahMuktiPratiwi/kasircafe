@extends('layouts.master')
@section('title')



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

                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box" style="background-color:rgb(160, 135, 135);color:gold">
                    <div class="inner">
                        <h3>53</h3>

                        <p>Transaksi Seluruh Kasir </p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-file-invoice"></i>
                    </div>

                </div>
            </div>
            @endif
            @if(Auth::user()->level =='Kasir')
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box" style="background-color:rgb(160, 135, 135);color:gold">
                    <div class="inner">
                        <h3>53</h3>

                        <p>Jumlah Transaksi </p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-file-invoice"></i>
                    </div>

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
</section>
<br>
<br>


@endsection