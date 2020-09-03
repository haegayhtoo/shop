@extends('backend.master')
@section('content')
    <div class="container">
        <h2>Item Edit Form</h2>
        
        <form action="{{ route('items.update',$item->id) }}" method="post" enctype="multipart/form-data"> 
            @csrf
            @method('put')

            <input type="hidden" name="oldphoto" id="" value="{{ $item->photo }}">

            <div class="form-group row">
              <label for="" class="col-sm-2 col-form-label">Code No <Noscript></Noscript></label>
              <div class="col-sm-6">
                <input type="text" class="form-control" id="" name="codeno" value="{{ $item->codeno }}" readonly>
              </div>
            </div>

            <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">Name <Noscript></Noscript></label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="" name="name" value="{{ $item->name }}">
                </div>
              </div>

              <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">photo <Noscript></Noscript></label>
                <div class="col-sm-6">
                  <input type="file" class="form-control-file" id="" name="photo">
                  <img src="{{ asset($item->photo) }}" alt="photo" width="100" height="100">
                </div>
                
              </div>

              <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">Price <Noscript></Noscript></label>
                <div class="col-sm-6">
                  <input type="number" class="form-control" id="" name="price" value="{{ $item->price }}">
                </div>
              </div>

              <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">Discount <Noscript></Noscript></label>
                <div class="col-sm-6">
                  <input type="number" class="form-control" id="" name="discount" value="{{ $item->codeno }}">
                </div>
              </div>

              <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">Brands <Noscript></Noscript></label>
                <div class="col-sm-6">
                  <select  id="" class="form-control" name="brand">
                    @foreach($brands as $brand)
                   
                    <option value="{{ $brand->id }}">{{ $brand->name }}</option>

                    @endforeach
                  </select>
                </div>
              </div>

              <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">Sub Category <Noscript></Noscript></label>
                <div class="col-sm-6">
                  <select id="" class="form-control" name="subcategory">
                    @foreach($subcategories as $subcategory)
                   
                    <option value="{{ $subcategory->id }}">{{ $subcategory->name }}</option>

                    @endforeach
                  </select>
                </div>
              </div>

              <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">Description <Noscript></Noscript></label>
                <div class="col-sm-6">
                  <textarea name="description" id="" class="form-control">{{ $item->description }}</textarea>
                </div>
              </div>
            
            <div class="form-group row">
              <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Update</button>
              </div>
            </div>
          </form>
    </div>
@endsection