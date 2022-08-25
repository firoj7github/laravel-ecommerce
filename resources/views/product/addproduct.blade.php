@extends('layouts.admin')
@section('content')
<div class="card ">
    <div class="card-header">
        Add Product
    </div>
    <div class="card-body">
       <form action="{{route('add')}}" method="POST"
       enctype="multipart/form-data"
       >
        @csrf
        <div class="row">
            <div class="col-md-12">
            <select class="form-select" aria-label="Default select example" name="cate_id">
            <option value="">Select a Category</option>
            @foreach($category as $item)
            <option value="{{$item->id}}">{{$item->name}}</option>
            @endforeach
           
            
            </select>
            </div>
            <div class="col-md-6  mb-3 h-10">
                <label for="">Name</label>
                <input type="text" class="form-control border" name="name">
            </div>
            <div class="col-md-6 mb-3 ">
                <label for="">Slug</label>
                <input type="text" class="form-control border" name="slug">
            </div>
            <div class="col-md-12 mb-3">
            <label for="">Description</label>
            <textarea class="form-control border" name="description" id=""  rows="3"></textarea>
            </div>
            <div class="col-md-6 mb-3">
            <label for="">Orginal Price</label>
            <input type="number" name="orginal_price">
            </div>
            <div class="col-md-6 mb-3">
            <label for="">Selling Price</label>
            <input type="number" name="selling_price">
            </div>
            <div class="col-md-6 mb-3">
            <label for="">Tax</label>
            <input type="number" name="tax">
            </div>
            <div class="col-md-6 mb-3">
            <label for="">Quantity</label>
            <input type="number" name="quantity">
            </div>
            <div class="col-md-6 mb-3">
                <label for="">Status</label>
                <input type="checkbox"  name="status">
            </div>
            <div class="col-md-6">
                <label for="">Trending</label>
                <input type="checkbox"  name="trending">
            </div>
            <div class="col-md-12 mb-5">
                <input type="file" name="image" class="form-control ">
            </div>  
            <div class="col-md-12 ">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>  
        </div>
       </form>
    </div>
</div>
@endsection