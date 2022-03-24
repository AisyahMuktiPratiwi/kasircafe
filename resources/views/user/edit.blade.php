@extends('layouts.master')

@section('title')
<title>Cafe Ngopi |Edit User</title>
@endsection


@section('content-header')
<section class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="card-header"
                style="background-color:rgb(246, 244, 244);border-radius:20px;width:50%;color:rgb(160, 135, 135);text-align:center;box-shadow: rgb(160, 135, 135) 2px 3px 9px;">

                <h1 style=" font-family: 'Vast Shadow' , cursive; ">Update Data User</h1>
            </div>

            <div class=" col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/dashboard" style="color: rgb(160, 135, 135)">Home</a></li>
                    <li class="breadcrumb-item"><a href="/user" style="color:rgb(160, 135, 135)">Product</a></li>
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
                <div class="card"
                    style="background-color:rgb(246, 244, 244);width:90%;border-radius:20px;color:rgb(160, 135, 135);box-shadow: rgb(160, 135, 135) 2px 3px 9px;">
                    <div class="card-body">
                        <form method="POST" action="{{ route('user.update', $validateData->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{$validateData->name }}" autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{$validateData->email }}" autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        value="{{$validateData->password }}" autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{$validateData->password }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                        value="{{$validateData->password }}" name="password_confirmation"
                                        autocomplete="new-password">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-end">Status</label>

                                <div class="col-md-6">

                                    <select name="level" class="form-control @error('level') is-invalid @enderror"
                                        id="status">
                                        <option value="Manager">Manager
                                        </option>
                                        <option value="Admin">
                                            Admin</option>
                                        <option value="Kasir">
                                            Kasir</option>
                                    </select>
                                    @error('level')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>




                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-outline"
                                        style="background-color:rgb(104, 75, 64);color:gold;float:right">Save
                                        changes</button>
                                </div>

                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection