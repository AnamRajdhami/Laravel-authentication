@extends('layout.app')

@section('content')
<h1 align="center">Register</h1>
<div class="position-absolute top-50 start-50 translate-middle">
<div class="card border-success mb-3" style="max-width: 18rem;">
<div class="card-body">
<div class="controller">
<form method="post" action="{{route('registerUser')}}">
    @csrf
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Name</label>
  <input type="name" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Enter your name">
  @error('name')
 <div class="invalid-feedback">
 {{$message}}
 </div>
  @enderror
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Email Address</label>
  <input type="name" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Enter your email">
  @error('email')
 <div class="invalid-feedback">
 {{$message}}
 </div>
  @enderror
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Password</label>
  <input type="name" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Enter password">
  @error('password')
 <div class="invalid-feedback">
 {{$message}}
 </div>
  @enderror
</div>
<button type="submit" class="btn btn-primary">Register</button>
</form>
</div>
<!-- <div class="card-body">
<a href="{{route('login')}}" class="btn btn-primary">Register</a>
</div> -->
</div>
</div>
</div>

@endsection

