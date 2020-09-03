@extends('backend.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
        Voucherno : {{$order->voucherno}}<br>
        Orderdate : {{$order->orderdate}}
    <div class="row">
        
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>No</th>
                        <th>Item  Name</th>
                        <th>Price</th>
                        <th>Qty</th>
                        <th>Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    @php $i=1; $total=0; 
                    @endphp
                    @foreach($order->items as $item)
                    @php
                    $subtotal= $item->price * $item->pivot->qty;
                    $total+= $subtotal;
                    @endphp
                    <tr>
                    <td>{{ $i++ }}</td>
                        <td>{{ $item->name}}</td>
                        <td>{{ $item->price}}MMK</td>
                        <td>{{ $item->pivot->qty}}</td>
                        <td>{{$subtotal}}</td>
                     </tr>
                     @endforeach
                     <tr class="bg-dark text-light">
                        <td colspan="4">Total:</td>
                        <td>{{$total}}MMK</td>
                </tr>   
                </tbody>
                
            </table>
       
    </div>
</div>
@endsection