@extends('layouts.front')

@extends('layouts.inc.frontnavbar')


@section('content-1')

<div class="container">
    <div class="row mt-5">
        <div class="col-md-12">
        <div class="card">
           <div class="card-header">
            <h4>My Order</h4>
           </div>

            <div class="card-body">
            
            
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Tracking Number</th>
                        <th>Country</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $item)
                    <tr>
                        <td>{{$item->tracking_no}}</td>
                        <td>{{$item->country}}</td>
                        <td>{{$item->status=='0'? 'pending':'completed'}}</td>
                        <td>
                            <a href="" class="btn btn-primary">View</a>
                        </td>
                        
                    </tr>
                    @endforeach
                </tbody>

            </table>
          
           
            </div>
        </div>
        </div>
    </div>
</div>



@endsection