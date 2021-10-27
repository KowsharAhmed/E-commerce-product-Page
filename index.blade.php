@extends('admin.layouts.master')
  
@section('main-content')  
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Products | <a href="{{ route('products.create') }}">Add New</a></h1>
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
                        <h5 class="m-0">Products List</h5>
                    </div>
                    <div class="card-body">
                    @if(session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                    @if(session('error'))
                            <div class="alert alert-danger">{{ session('error') }}</div>
                        @endif
                        <table class="table table-bordered">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Qty</th>
                                <th>Category</th>
                                <th>Action</th>
                            </tr>
                          <tbody>
                            @foreach ($products as $singleProduct)
                               <tr>
                                   <td> {{ $singleProduct->id }} </td>
                                   <td> {{ $singleProduct->name }} </td>
                                   <td> {{ $singleProduct->price }} </td>
                                   <td> {{ $singleProduct->quantity }} </td>
                                   <td> {{ $singleProduct->category_id }} </td>
                                   <td>
                                       <a class="btn btn-sm btn-info" href="{{ route('products.edit',$singleProduct->id) }}">Edit</a> | 
                                      <form action="{{ route('products.destroy',$singleProduct->id) }}" method="POST" class="d-inline">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>

                                      </form>
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
   </div>
</div>
@endsection
  

