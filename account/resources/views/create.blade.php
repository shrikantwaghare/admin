@extends('layout')
@section('content')
<form action="createsubmit" method="post">
@csrf
<div class="form-group">
    <label for="email">Name:</label>
    <input type="text" class="form-control" placeholder="Enter Name" name="name">
  </div>
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="text" class="form-control" placeholder="Enter email" name="email">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" placeholder="Enter password" name="password">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection