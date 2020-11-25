@extends('master')

@section('content')
    <h1>Create New Category</h1>

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <p class="alert alert-danger">{{ $error }}</p>
        @endforeach
    @endif

    @if(session()->has('msg'))
        <p class="alert alert-success">{{session()->get('msg')}}</p>
    @endif


    <form method="post" action="{{route('category.store')}}">
        @csrf
        <div class="form-group">
            <label for="category_name">Category Name</label>
            <input name="category_name" required placeholder="Enter Category Name" type="text" class="form-control"
                   id="category_name">

        </div>


        <div class="form-group">
            <label for="price">Category Description</label>
            <textarea name="description" id="" class="form-control"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@stop
