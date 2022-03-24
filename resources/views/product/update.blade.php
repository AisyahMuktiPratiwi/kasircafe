@extends('layouts.master')

@section('title')
<title>Cafe Ngopi | Edit Produk</title>
@endsection


@section('content-header')
<section class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="card-header"
                style="background-color:rgb(246, 244, 244);border-radius:20px;width:50%;color:rgb(160, 135, 135);text-align:center;box-shadow: rgb(160, 135, 135) 2px 3px 9px;">

                <h1 style=" font-family: 'Vast Shadow' , cursive; ">Update Data Menu</h1>
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
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card"
                    style="background-color:rgb(246, 244, 244);width:90%;border-radius:20px;color:rgb(160, 135, 135);box-shadow: rgb(160, 135, 135) 2px 3px 9px;">
                    <div class="card-body">

                        <form action="{{route('product.update', $product->id)}}" method="POST"
                            enctype="multipart/form-data">

                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                                    id="name" placeholder="Name" value="{{$product->name }}">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>


                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea name="description"
                                    class="form-control @error('description') is-invalid @enderror" id="description"
                                    placeholder="description">{{ old('description',$product->description ) }}</textarea>
                                @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Image</label>
                                <br>
                                <img src="{{ asset('gmbrproduct/'.$product->image)}}" width="40px">
                                <input type="file" class="form-control" name="image" id="image"
                                    bordered>{{ old('image',$product->image ) }}


                                @error('image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="barcode">Barcode</label>
                                <input type="text" name="barcode"
                                    class="form-control @error('barcode') is-invalid @enderror" id="barcode"
                                    value="{{ old('barcode',$product->barcode ) }}" placeholder="barcode">
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
                                    value="{{$product->price }}" placeholder="price" value="{{ old('price') }}">
                                @error('price')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="quantity">Quantity</label>
                                <input type="text" name="quantity"
                                    class="form-control @error('quantity') is-invalid @enderror" id="quantity"
                                    placeholder="Quantity" value="{{$product->quantity }}">
                                @error('quantity')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="status">Status</label>
                                <select name="status" class="form-control @error('status') is-invalid @enderror"
                                    id="status">
                                    <option value="1" {{ old('status', $product->status) === 1 ? 'selected' : '' }}>
                                        Active
                                    </option>
                                    <option value="0" {{ old('status', $product->status) === 0 ? 'selected' : '' }}>
                                        Inactive</option>
                                    {{ old('status', $product->status)}}
                                </select>
                                @error('status')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-outline"
                                style="background-color:rgb(104, 75, 64);color:gold">Save
                                changes</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection