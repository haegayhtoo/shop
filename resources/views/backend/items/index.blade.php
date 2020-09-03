@extends('backend.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6"><h2>Items</h2></div>
            <div class="col-6 text-right"><a href="{{ route('items.create') }}" class="btn btn-success">Add New</a></div>
        </div>
        
        
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Code</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    @php
                        $i=1;
                    @endphp
                    @foreach($items as $item)
                    
                    
                    <td>{{ $i++}}</td>
                    <td>{{ $item->codeno }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->price }}</td>
                    
                    <td>
                        <div class="btn-gorup">
                            <a href="#" class="btn btn-primary">Detail</a>
                            <a href="{{ route('items.edit', $item->id ) }}" class="btn btn-warning">Edit</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                        </div>
                    </td>
                </tr>
               
                @endforeach
            </tbody>
        </table>
        
    </div>
@endsection