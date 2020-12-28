@extends('backend_master')

@section('content')
  <main class="app-content">
    <div class="app-title">
      <div>
        <h1><i class="fa fa-dashboard"></i> Brands</h1>
      </div>
      <ul class="app-breadcrumb breadcrumb">
        <a href="{{route('brands.index')}}" class="btn btn-outline-primary float-right">
            Previous
        </a>
      </ul>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <div class="tile-body">
            <h4>Brand Create Form</h4>
            <form method="post" action="{{route('brands.store')}}" enctype="multipart/form-data" class="mt-3">
              @csrf
              <div class="form-group">
                <label for="nameInput">Name:</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="nameInput" value="{{old('name')}}">
                @error('name')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
              <div class="form-group">
                <label for="fileInput">Photo:</label>
                <input type="file" name="photo" class="form-control-file @error('photo') is-invalid @enderror" id="fileInput">
                @error('photo')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
              <div class="form-group">
                <input type="submit" name="btn-submit" value="Save" class="btn btn-primary">
              </div>
            </form>
          </div>
        </div>
      </div>   
    </div>    
  </main>
@endsection

@section('script')
  
@endsection