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
                    <li class="breadcrumb-item"><a href="#" style="color:rgb(160, 135, 135)">Product</a></li>
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
                        <!-- Button trigger modal -->
                        <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#tambah"
                            style="float: right; background-color:rgb(160, 135, 135);color:gold;border-radius:10%">
                            + Product
                        </button>

                        <!-- Modal create -->
                        <div class="modal fade" id="tambah" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class=" modal-dialog">
                                <div class="modal-content"
                                    style=" background-color:rgb(160, 135, 135);color:gold;opacity:0.9;">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel"
                                            style="font-family: 'Sail', cursive;">Tambah Data Menu</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{route('product.store')}}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf

                                            <div class="form-group">
                                                <label for="name">Name</label>
                                                <input type="text" name="name"
                                                    class="form-control @error('name') is-invalid @enderror" id="name"
                                                    placeholder="Name" value="{{ old('name') }}" required>
                                                @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>


                                            <div class="form-group">
                                                <label for="description">Description</label>
                                                <textarea name="description"
                                                    class="form-control @error('description') is-invalid @enderror"
                                                    id="description" placeholder="description"
                                                    required>{{ old('description') }}</textarea>
                                                @error('description')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label>Image</label>

                                                <input type="file" class="form-control" name="image" id="image" bordered
                                                    required>


                                                @error('image')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="barcode">Barcode</label>
                                                <input type="text" name="barcode"
                                                    class="form-control @error('barcode') is-invalid @enderror"
                                                    id="barcode" placeholder="barcode" value="{{ old('barcode') }}"
                                                    required>
                                                @error('barcode')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="price">Price</label>
                                                <input type="text" name="price"
                                                    class="form-control @error('price') is-invalid @enderror" id="price"
                                                    placeholder="price" value="{{ old('price') }}" required>
                                                @error('price')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="quantity">Quantity</label>
                                                <input type="text" name="quantity"
                                                    class="form-control @error('quantity') is-invalid @enderror"
                                                    id="quantity" placeholder="Quantity"
                                                    value="{{ old('quantity', 1) }}" required>
                                                @error('quantity')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="status">Status</label>
                                                <select name="status"
                                                    class="form-control @error('status') is-invalid @enderror"
                                                    id="status" required>
                                                    <option value="1" {{ old('status') === 1 ? 'selected' : '' }}>Active
                                                    </option>
                                                    <option value="0" {{ old('status') === 0 ? 'selected' : '' }}>
                                                        Inactive</option>
                                                </select>
                                                @error('status')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>



                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                                            style="color:gold">Close</button>
                                        <button type="submit" class="btn btn-outline"
                                            style="background-color:rgb(104, 75, 64);color:gold">Save
                                            changes</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


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
                                    <th colspan="2">Action</th>
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
                                    <td colspan="2"> <a href="{{route('product.edit', $pr->id)}}"
                                            class=" btn btn-outline-warning editbtn"
                                            style=" border-color:rgb(160, 135, 135);color:rgb(160, 135, 135)">
                                            <i class="fas fa-edit"></i></a>
                                        <a href="{{route('product.destroy', $pr->id)}}" class="btn"
                                            data-id="{{$pr->id}}"
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