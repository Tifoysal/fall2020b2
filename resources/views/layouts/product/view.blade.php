@extends('master')

@section('content')

    <p>
        <label for=""><b>Product Name:</b> {{$single_product->name}}</label>
    </p>
    <p>
    <label for=""><b>Product Price:</b> {{$single_product->price}}</label>
    </p>

    <p>
        <label for=""><b>Product Image:</b> {{$single_product->image}}</label>
    </p>
    <p>
        <label for=""><b>Product Description:</b> {{$single_product->description}}</label>
    </p>

    @stop
