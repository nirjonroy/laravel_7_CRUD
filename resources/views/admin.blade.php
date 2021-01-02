<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href={{asset("public/css/bootstrap.min.css")}}>
	<link rel="stylesheet" type="text/css" href={{asset("public/css/bootstrap-theme.min.css")}}>
	<link rel="stylesheet" type="text/css" href={{asset("public/css/bootstrap.css")}}>
	<link rel="stylesheet" type="text/css" href={{asset("public/css/custom_style.css")}}>
</head>
<body>

<div class="page-header head1" >
	<h2>Login to open CRUD Page</h2>
	<form action="{{url('admin-dashboard')}}" method="post">
	@
	<input type="email" name="email" class="form-control" placeholder="youremail@email.com" required="@"> <br>
	<input type="password" name="password" class="form-control" placeholder="secret" required=""><br>
	<input type="submit" name="submit" class="btn btn-danger">
	</form>
</div>

<script type="text/javascript" src={{("public/js/bootstrap.js")}}></script>
<script type="text/javascript" src={{("public/js/bootstrap.min.js")}}></script>
<script type="text/javascript" src={{("public/js/npm.js")}}></script>
</body>
</html>