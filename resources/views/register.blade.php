@extends('sections.html')

@section('title')
register
@endsection

@section('content')



<form class='mt-5 mb-5 container' action="{{ route('register-request') }}" method='post'>

@if($errors->any())
<div class="alert alert-danger">
  <ul>
  @foreach($errors->all() as $error)
     <li>{{ $error }}</li>
  @endforeach
  </ul>
</div>
@endif

@csrf
  <div class="form-group ">
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" name='name' id="password">
  </div>
  <div class="form-group">
    <label for="lastname">Lastname</label>
    <input type="text" class="form-control" name='lastname' id="password">
  </div>
    <label for="name">Email address</label>
    <input type="email" class="form-control" name='email' id="name" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" name='password' id="password">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection

    