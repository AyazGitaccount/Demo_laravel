@extends('index')
@section('content')
<section>
    <div class="container m-5 ">
    <h2 class="text-center mb-3">Signin</h2>
        <div class="d-flex justify-content-center">
            <form class="w-50 m-3" method="post" action="/signin">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">User Name</label>
                    <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <span style="color:red">@error('name'){{ $message }} @enderror</span>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    <span style="color:red">@error('email'){{ $message }} @enderror</span>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="exampleInputPassword1">
                    <span style="color:red">@error('password'){{ $message }} @enderror</span>
                </div>
                <button type="submit" class="btn btn-primary ">Sign in</button> 
                <a href="/signup" role="button" class="btn btn-outline-primary m-2">Register</a>
            </form>
        </div>
    </div>
</section>
@endsection