@extends('master')

@section('content')
<h1>Product List of Category: {{$category->name}}</h1>


    <div class="row">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">SL/NO</th>
                <th scope="col">Product Name</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>

            @foreach ($products as $key=>$data)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$data->name}}</td>
                <td>{{$data->status}}</td>
                <td>
                    <a href="" class="btn btn-success">View</a>
                </td>
            </tr>
            @endforeach
            </tbody>



        </table>

    </div>

    @stop
