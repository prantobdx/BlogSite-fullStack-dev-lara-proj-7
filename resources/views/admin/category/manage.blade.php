@extends('admin.master')

@section('title')
    Manage-Category
@endsection

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Manage Category</h4>
                    </div>
                    @if(Session::has('message'))
                            <h3 class="text-success text-center">{{ Session::get('message') }}</h3>
                        @endif
                    <div class="card-body">
                        <table class="table" id="dataTable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                    <tr>
                                        <td>{{  $category->iteration}}</td>
                                        <td>{{  $category->category_name}}</td>
                                        <td>
                                            <img src="{{ asset($category->category_image) }}" alt="" width="140px" height="100px">
                                        </td>
                                        <td>{{ $category->status == 1 ? 'publish' :'Unpublished' }}</td>
                                        <td> 
                                            <a class="btn btn-info" href="{{ route('edit-category',['categoryId'=>$category->id]) }}">Edit</a>
                                            <a class="btn btn-danger" href="{{ route('delete-category',['categoryId'=>$category->id]) }}" onclick="confirm(' Are you sure to delete this?')">Delete</a>
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
@endsection