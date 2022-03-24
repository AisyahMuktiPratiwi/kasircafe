@extends('layouts.master')

@section('title')
<title>Cafe Ngopi | User</title>
@endsection

@section('content-header')
<section class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="card-header"
                style="background-color:rgb(246, 244, 244);border-radius:20px;width:50%;color:rgb(160, 135, 135);text-align:center;box-shadow: rgb(160, 135, 135) 2px 3px 9px;">

                <h1 style=" font-family: 'Vast Shadow' , cursive; ">List Data User</h1>
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
                        <!-- Button trigger modal -->
                        <a href="{{route('user.create')}}" class="btn"
                            style="float: right; background-color:rgb(160, 135, 135);color:gold;border-radius:10%">
                            + User
                        </a>



                        <div class="card-body" style="background-color:rgb(246, 244, 244);">
                            <h5>
                            </h5>
                            <table id="" class="table table-striped table-hover table-bordered table-responsive">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                        <th>Status</th>

                                        <th colspan="2">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($user as $users)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $users->name }}</td>
                                        <td> {{ $users->email }}
                                        </td>
                                        <td>{{$users->password}}</td>

                                        <td>{{ $users->level }}</td>

                                        <td colspan="2"> <a href="{{route('user.edit', $users->id)}}"
                                                class=" btn btn-outline-warning editbtn"
                                                style=" border-color:rgb(160, 135, 135);color:rgb(160, 135, 135)">
                                                <i class="fas fa-edit"></i></a>
                                            <a href="{{route('user.destroy', $users->id)}}" class="btn"
                                                data-id="{{$users->id}}"
                                                style="background-color: rgb(160, 135, 135);color:gold"><i
                                                    class="fas fa-trash"></i></a>

                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="9" class="text-center">Belum Ada Data</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>




                    </div>
                </div>
            </div>
        </div>

</section>




























@endsection