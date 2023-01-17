@extends('index')
@section('content')
<!-- in your view file -->
<!-- @if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif -->
<section>
    <div class="container m-5 ">
        <h2 class="text-center mb-3">Signup</h2>
        <div class="d-flex justify-content-center">
            <form method="post" action="/signup" class="w-50 m-3">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">User Name</label>
                    <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <span style="color:red">@error('name'){{ $message }} @enderror</span>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <span style="color:red">@error('email'){{ $message }} @enderror</span>
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="exampleInputPassword1">
                    <span style="color:red">@error('password'){{ $message }} @enderror</span>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" name="password_confirmation" id="exampleInputPassword1">
                    <span style="color:red">@error('password_confirmation'){{ $message }} @enderror</span>
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>
    </div>
</section>
@endsection