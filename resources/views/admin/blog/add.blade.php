@extends('admin.master')


@section('title')
    Add Cateogry
@endsection

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h4>Add Blog</h4>
                    </div>
                    <div class="card-body">
                        @if(Session::has('message'))
                            <h3 class="text-success text-center">{{ Session::get('message') }}</h3>
                        @endif
                        <form action="{{ route('new-blog') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label for="" class="col-md-4">Blog Title</label>
                                  <div class="col-md-8">
                                    <input type="text" name="blog_title" class="form-control">
                                  </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4">Blog Category Name</label>
                                  <div class="col-md-8">
                                    <select name="category_id" class="form-control">
                                        <option value="disabled selected"><----Slect a category -----></option>
                                        @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                        @endforeach
                                    </select>
                                  </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4">Blog Main Image</label>
                                  <div class="col-md-8">
                                    <input type="file" name="blog_image" class="form-control-file">
                                  </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4">Blog Content</label>
                                  <div class="col-md-8">
                                    <textarea name="blog_content" id="editor" class="form-control" cols="30" rows="2"></textarea>
                                  </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4">Blog Status</label>                 
                                  <div class="col-md-8">
                                    <label> <input type="radio" name="status" value="1" checked> Published </label>
                                    <label> <input type="radio" name="status" value="0"> Unpublished </label>
                                  </div>
                            </div>
                            <div class="form-group ">
                                <input type="submit" class="btn btn-block btn-outline-info" value="Add Blog">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection