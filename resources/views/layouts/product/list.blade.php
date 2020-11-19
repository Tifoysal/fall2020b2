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
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
@foreach($products as $key=>$product)

            <tr>
                <th scope="row">{{$key+1}}</th>
                <td>{{$product->name}}</td>
                <td>{{$product->price}}</td>

                <td>
                    <a class="btn btn-primary" href="">Edit</a>
                    <a class="btn btn-success" href="">Delete</a>
                    <a class="btn btn-warning" href="">View</a>

                </td>
            </tr>
@endforeach
            </tbody>
        </table>
    </div>

    @stop
