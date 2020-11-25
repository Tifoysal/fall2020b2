@extends('master')

@section('content')
    <h1>Edit product</h1>



    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <p class="alert alert-danger">{{ $error }}</p>
        @endforeach
    @endif

    @if(session()->has('msg'))
        <p class="alert alert-success">{{session()->get('msg')}}</p>
    @endif


    <form method="post" action="{{route('product.update',$product->id)}}">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="product_name">Product Name</label>
            <input value="{{$product->name}}" name="product_name" required placeholder="Enter product Name" type="text" class="form-control"
                   id="product_name" aria-describedby="emailHelp">

        </div>
        <div class="form-group">
            <label for="price">Product Price</label>
            <input value="{{$product->price}}" name="product_price" required placeholder="Enter Product Price" type="number" class="form-control"
                   id="price">
        </div>

        <div class="form-group">
            <label for="price">Product Description</label>
            <textarea name="description" id="" class="form-control">{{$product->description}}</textarea>
        </div>

        <div class="form-group">
            <label for="">Select Status</label>
            <select class="form-control" name="status" id="">
                <option value="">--select status--</option>
                <option @if($product->status=='active') selected @endif value="active">Active</option>
                <option @if($product->status=='inactive') selected @endif value="inactive">Inactive</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@stop
