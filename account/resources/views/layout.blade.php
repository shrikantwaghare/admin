<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="{{asset('css/custom.css')}}">
</head>
<body>

<div class="header">
@section('header')
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="userlist">UserList</a></li>
      <li><a href="/">Login</a></li>
      <li><a href="create">Create User</a></li>
    </ul>
  </div>
</nav>

@show
</div>

<div class="content">
@section('content')
@show
</div>

<div class="footer">
@section('footer')
<h1>Footer Part</h1>
@show
</div>

</body>
</html>