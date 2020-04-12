@extends('layout')
@section('content')
<h1>Userlist</h1>

<table class="table">
<tr>
<th>Name</th>
<th>Email</th>
<th>Password</th>
</tr>
@foreach($user as $u)
<tr>
<td>{{$u->name}}</td>
<td>{{$u->email}}</td>
<td>{{$u->password}}</td>
</tr>
@endforeach
</table>
@endsection