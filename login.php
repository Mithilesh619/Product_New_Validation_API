<!-- <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

Latest compiled and minified JavaScript
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body>

<form method="POST" action="login_action.php">
	<table align="center">
		
		<tr>
		<td>
		Email
		<input type="email" name="email">
		</td>
		</tr>
		
		<tr>
		<td>
		Password
		<input type="password" name="password">
		</td>
		</tr>

		<tr>
			<td>
				<input type="submit" value="LOGIN">
				<a href="register.php"><input type="button" value="SIGNUP"></a>

			</td>
		</tr>

	</table>
</form>

</body>
</html> -->
 
 



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="container my-5">

    
  <form action="login_action.php" method="POST">
    <h5>LOGIN</h5>
  <div class="mb-3">
    <label  class="form-label">Email address</label>
    <input type="email" class="form-control" placeholder="Enter your email" name="email" required="">
    </div>
  <div class="mb-3">
    <label  class="form-label">Password</label>
    <input type="password" class="form-control" placeholder="Enter your password" name="password" required="">
  </div>
  <button type="submit" class="btn btn-primary">Login</button>
  <a href="register.php"><input type="button" value="Sign Up" class="btn btn-primary"></button></a>
</form>
</div>
  </body>
</html>

