@extends('admin.master')


@section('title')
    Edit Cateogry
@endsection

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Category</h4>
                    </div>
                    <div class="card-body">
                        @if(Session::has('message'))
                            <h3 class="text-success text-center">{{ Session::get('message') }}</h3>
                        @endif
                        <form action="{{ route('update-category') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="category_id" value="{{ $category->id }}">
                            <div class="form-group row">
                                <label for="" class="col-md-4">Cateogory Name</label>
                                  <div class="col-md-8">
                                    <input type="text" name="category_name" class="form-control" value="{{ $category->category_name }}">
                                  </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4">Cateogory Image</label>
                                  <div class="col-md-8">
                                    <input type="file" name="category_image" class="form-control-file">
                                    <img src="{{ asset($category->category_image) }}" class="mt-2" alt="" width="110px" height="90px">
                                  </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4">Cateogory Status</label>                 
                                  <div class="col-md-8">
                                    <label> <input type="radio" name="status" {{ $category->status == 1 ? 'checked' : '' }} value="1"> Published </label>
                                    <label> <input type="radio" name="status" {{ $category->status == 0 ? 'checked' : '' }} value="0" > Unpublished </label>
                                  </div>
                            </div>
                            <div class="form-group ">
                                <input type="submit" class="btn btn-block btn-outline-success" value="Update Category">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection