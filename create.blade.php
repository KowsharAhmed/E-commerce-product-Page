@extends('admin.layouts.master')
  
@section('main-content')  
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Add Product</h1>
                </div>
                <div class="col-sm-6">
                   
                </div>
            </div>
        </div>
    </div>

   <div class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h5 class="m-0">Create Product</h5>
                    </div>
                    <div class="card-body">
                    @if(session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                    @if(session('error'))
                            <div class="alert alert-danger">{{ session('error') }}</div>
                        @endif
                        <div class="row">
                            <div class="col-md-6">
                                <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="">Name:</label>
                                        <input type="text" name="name" class="form-control">
                                        @error('name')
                                        <div class="alert alert-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="">Categary:</label>
                                         <select name="category_id" class="form-control">
                                             <option value="">--Choose Category--</option>
                                             @foreach ($categories as $category)
                                             <option value="{{ $category->id }}">{{ $category->name }}</option>

                                             @endforeach
                                             
                                         </select>
                                        @error('category_id')
                                        <div class="alert alert-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="">Price:</label>
                                        <input type="text" name="price" class="form-control">
                                        @error('price')
                                        <div class="alert alert-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="">Quantity:</label>
                                        <input type="text" name="quantity" class="form-control">
                                        @error('quantity')
                                        <div class="alert alert-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="">Image:</label>
                                        <input type="file" name="image" class="form-control">
                                        @error('image')
                                        <div class="alert alert-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="">description:</label>
                                        <textarea name="description" class="form-control"></textarea>
                                        @error('description')
                                        <div class="alert alert-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="">Status:</label>
                                         <select name="status" class="form-control">
                                             <option value="1">Active</option>
                                             <option value="0">In Active</option>
                                         </select>
                                        @error('status')
                                        <div class="alert alert-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                <div class="form-group">
                                    <input class="btn btn-primary" type="submit" value="Save">
                                </div>
                                </form>                               
                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
   </div>
</div>
@endsection
  

