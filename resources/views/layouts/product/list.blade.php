@extends('master')

@section('content')
<h1>Product List</h1>


    <div class="row">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Product Name</th>
                <th scope="col">Price</th>
                <th scope="col">Category Name</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
@foreach($products as $key=>$product)

            <tr>
                <th scope="row">{{$key+1}}</th>
                <td>{{$product->name}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->category->name}}</td>
                <td>{{$product->status}}</td>

                <td>
                    <a class="btn btn-primary" href="{{route('product.edit',$product->id)}}">Edit</a>
                    <a class="btn btn-danger" href="{{route('product.delete',$product->id)}}">Delete</a>
                    <a class="btn btn-warning" href="{{route('product.view',$product->id)}}">View</a>

                </td>
            </tr>
@endforeach
            </tbody>



        </table>
        {{$products->links()}}
    </div>

    @stop
