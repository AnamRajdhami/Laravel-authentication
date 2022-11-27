@extends('layout.app')

@section('content')
<div class="container">
<h1>dashboard</h1>
<form action="{{route('logout')}}" method="post">
    @csrf
<button type="submit" class="btn btn-primary">Logout</button>
</form>
</div>


@endsection
