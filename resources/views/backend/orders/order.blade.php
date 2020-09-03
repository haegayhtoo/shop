@extends('backend.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h2>Order List</h2>
        
    <div class="row">
        <div class="col-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>Voucher No</th>
                        <th>User</th>
                        <th>Total</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
        
                    @foreach($orders as $order)
                    <tr>
                        
                        <td>{{ $order->voucherno }}</td>
                        <td>{{ $order->user_id }}</td>
                        <td>{{ $order->total }}</td>
                        
                        <td>
                            <div class="btn-gorup">
                                <a href="{{route('orders.show',$order->id)}}" class="btn btn-success">Detail</a>
                               
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection