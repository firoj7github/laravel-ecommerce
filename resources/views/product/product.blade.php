@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-header">
    <h4>Category Page</h4>
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach( $product as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->description}}</td>
                    <td>
                        <img class='img-control' src="{{asset('/'.$item->image)}}" alt="image here">
                    </td>
                    <td>
                    <button class='btn btn-primary'>Edit</button>
                    <button class='btn btn-danger'>Delete</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection