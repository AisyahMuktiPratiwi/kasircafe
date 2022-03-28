@extends('layouts.master')

@section('title')
<title>Cafe Ngopi | Activitas Log</title>
@endsection

@section('content-header')
<section class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="card-header"
                style="background-color:rgb(246, 244, 244);border-radius:20px;width:50%;color:rgb(160, 135, 135);text-align:center;box-shadow: rgb(160, 135, 135) 2px 3px 9px;">

                <h1 style=" font-family: 'Vast Shadow' , cursive; ">Log Activitas</h1>
            </div>

            <div class=" col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/dashboard" style="color: rgb(160, 135, 135)">Home</a></li>
                    <li class="breadcrumb-item"><a href="#" style="color:rgb(160, 135, 135)">User</a></li>
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
                <div class="card" style="box-shadow: rgb(160, 135, 135) 7px 8px 14px;width:100%;">
                    <div class="card-header" style="background-color:rgb(246, 244, 244);">




                        <div class="card-body" style="background-color:rgb(246, 244, 244);">
                            <h5>
                            </h5>
                            <table id="" class="table table-striped table-hover table-bordered table-responsive-lg">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama</th>
                                        <th>Aktivitas</th>
                                        <th>Waktu</th>



                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($activity_log as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td class="font-w600 text-center" style="width: 100px"><span class="badge"
                                                style="background-color:rgb(160, 135, 135) ;">{{ $item->user->name }}</span>
                                        </td>
                                        <td> <span class="badge"
                                                style="background-color:rgb(160, 135, 135) ;">{{ $item->description }}</span>
                                        </td>
                                        <td><span class="badge"
                                                style="background-color:brown ;">{{ Carbon\Carbon::parse($item->created_at)->diffForHumans() }}</span>
                                        </td>
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