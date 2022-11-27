@extends('layout.app')

@section('content')
@if(Session::has('fail'))
<div class="alert alert-danger" role="alert">
 {{Session::get('fail')}}
</div>
@endif

<form action="{{route('loginUser')}}" method="post">
  @csrf
<div class="container">
<h1 align="center">Login</h1>

<div class="position-absolute top-50 start-50 translate-middle">
<div class="card border-success mb-3" style="max-width: 18rem;">
<div class="card-body">
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email address</label>
  <input type="email" class="form-control" name="email" placeholder="name@example.com">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Password</label>
  <input type="password" class="form-control" name="password" placeholder="Enter password">

</div>
<button type="submit" class="btn btn-primary">Login</button>
</div>
</div>
</div>
</div>
</form>

@endsection

