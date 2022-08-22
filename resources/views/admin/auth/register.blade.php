@extends('admin.master')

@section('title')
    Register
@endsection

@section('body')
<div class="container mr-5">
    <div class="row">
        <div class="col-md-7 mx-auto">
            <div class="card">
                <div class="card-header text-center ">
                    <h2>Register</h2> 
                </div>
                <div class="card-body">
                    <form class="form-horizontal" action="{{ route('register') }}" method="post">
                        @csrf
        
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter username">
                        </div>
        
        
                        <div class="form-group">
                            <label for="useremail">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Enter email">        
                        </div>
                
                        <div class="form-group">
                            <label for="userpassword">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Enter password">        
                        </div>
                        
                        <div class="form-group">
                            <label for="confirmpassword">Confirm Password</label>
                            <input type="password" class="form-control" name="password_confirmation" placeholder="Enter password">        
                        </div>
                
                        <div class="mt-4">
                            <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Register</button>
                        </div>
                
                
                        <div class="mt-4 text-center">
                            <p class="mb-0">have an existing account <a href="{{ route('login') }}" class="text-primary">Login here</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection