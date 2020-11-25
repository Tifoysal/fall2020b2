@extends('master')

@section('content')
    <h1>Create New product</h1>

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <p class="alert alert-danger">{{ $error }}</p>
        @endforeach
    @endif

    @if(session()->has('msg'))
        <p class="alert alert-success">{{session()->get('msg')}}</p>
    @endif


    <form method="post" action="{{route('product.store')}}">
        @csrf
        <div class="form-group">
            <label for="product_name">Product Name</label>
            <input name="product_name" required placeholder="Enter product Name" type="text" class="form-control"
                   id="product_name" aria-describedby="emailHelp">

        </div>

        <div class="form-group">
            <select class="form-control" name="category_id" id="">
                @foreach ($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="price">Product Price</label>
            <input name="product_price" required placeholder="Enter Product Price" type="number" class="form-control"
                   id="price">
        </div>

        <div class="form-group">
            <label for="price">Product Description</label>
            <textarea name="description" id="" class="form-control"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@stop
