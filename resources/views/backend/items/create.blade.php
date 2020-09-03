@extends('backend.master')
@section('content')
    <div class="container">
        <h2>Item Create Form</h2>
        
        <form action="{{ route('items.store') }}" method="post" enctype="multipart/form-data"> 
            @csrf
            <div class="form-group row">
              <label for="" class="col-sm-2 col-form-label">Code No <Noscript></Noscript></label>
              <div class="col-sm-6">
                <input type="text" class="form-control" id="" name="codeno">
                @error('codeno')
                  <label class="text-danger">please enter codeno!</label>
                @enderror
              </div>
             
            </div>

            <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">Name <Noscript></Noscript></label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="" name="name">
                  @error('name')
                    <label class="text-danger">please enter name!</label>
                  @enderror
                </div>
              </div>

              <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">photo <Noscript></Noscript></label>
                <div class="col-sm-6">
                  <input type="file" class="form-control-file" id="" name="photo">
                  @error('photo')
                    <label class="text-danger">please select photo</label>
                  @enderror
                </div>
              </div>

              <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">Price <Noscript></Noscript></label>
                <div class="col-sm-6">
                  <input type="number" class="form-control" id="" name="price">
                  @error('price')
                    <label class="text-danger">please enter price</label>
                  @enderror
                </div>
              </div>

              <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">Discount <Noscript></Noscript></label>
                <div class="col-sm-6">
                  <input type="number" class="form-control" id="" name="discount" value="0">
                  @error('discount')
                    <label class="text-danger">please enter discount</label>
                   @enderror
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
                  <textarea name="description" id="" class="form-control"></textarea>
                  @error('description')
                  <label class="text-danger">please enter description</label>
                @enderror
                </div>
              </div>
            
            <div class="form-group row">
              <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Create</button>
              </div>
            </div>
          </form>
    </div>
@endsection