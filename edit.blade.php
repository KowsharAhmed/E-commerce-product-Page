@extends('admin.layouts.master')
  
@section('main-content')  
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Product</h1>
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
                        <h5 class="m-0">Edit Product</h5>
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
                                <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                                    @method('PUT')
                                    @csrf
                                    <div class="form-group">
                                        <label for="">Name:</label>
                                        <input type="text" name="name" value="{{ $product->name }}" class="form-control">
                                        @error('name')
                                        <div class="alert alert-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="">Categary:</label>
                                        <select name="category_id" class="form-control">
                                            @foreach ($categories as $category)
                                            <option value="{{ $category->id }}" {{ $category->id == $product->category_id ? 'selected':'' }}>{{ $category->name }}</option>

                                            @endforeach
                                            
                                        </select>
                                        @error('category_id')
                                        <div class="alert alert-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="">Price:</label>
                                        <input type="text" name="price" value="{{ $product->price }}" class="form-control">
                                        @error('price')
                                        <div class="alert alert-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="">Quantity:</label>
                                        <input type="text" name="quantity" value="{{ $product->quantity }}" class="form-control">
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
                                        <img width="100" src="{{ asset($product->image) }}" alt="">
                                    </div>
                                    <div class="form-group">
                                        <label for="">description:</label>
                                        <textarea name="description" class="form-control">{{ $product->description }}</textarea>
                                        @error('description')
                                        <div class="alert alert-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="">Status:</label>
                                         <select name="status" class="form-control">
                                             <option value="1" {{ $product->status == 1 ? 'selected':'' }} >Active</option>
                                             <option value="0" {{ $product->status == 0 ? 'selected':'' }} >In Active</option>
                                         </select>
                                        @error('status')
                                        <div class="alert alert-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                <div class="form-group">
                                    <input class="btn btn-primary" type="submit" value="Update">
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
  

