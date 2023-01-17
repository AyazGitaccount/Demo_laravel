@extends('index')
@section('content')
<nav class="navbar bg-dark navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand">Dashboard</a>
    <form class="d-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
      <a class="btn btn-primary mx-1" href="/logout" role="button">Logout</a>
    </form>
  </div>
</nav>
@endsection