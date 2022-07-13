@extends('layouts.admin')
@section('content')
<div class="card ">
    <div class="card-header">
        Add Category
    </div>
    <div class="card-body">
       <form action="" method="POST">
        <div class="row">
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
                <label for="">Status</label>
                <input type="checkbox"  name="status">
            </div>
            <div class="col-md-6">
                <label for="">Popular</label>
                <input type="checkbox"  name="popular">
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