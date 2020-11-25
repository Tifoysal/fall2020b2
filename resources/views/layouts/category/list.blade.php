@extends('master')

@section('content')
<h1>Category List</h1>


    <div class="row">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Category Name</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
@foreach($categories as $key=>$category)

            <tr>
                <th scope="row">{{$key+1}}</th>
                <td>{{$category->name}}</td>
                <td>{{$category->status}}</td>

                <td>
                    <a class="btn btn-primary" href="">Edit</a>
                    <a class="btn btn-danger" href="">Delete</a>
                    <a class="btn btn-warning" href="">View</a>

                </td>
            </tr>
@endforeach
            </tbody>



        </table>
        {{$categories->links()}}
    </div>

    @stop
