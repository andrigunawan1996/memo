<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Memo</title>
  <link rel="stylesheet" href="css/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
</head>
<body>
<div class="container">
	<section id="content">
	<form method="post" action="process/login-user.php">
		<h1>Login To Memo</h1>
		<div class="form-group">
			<input type="text" placeholder="Username" required="" id="Username" name="Username" />
		</div>
		<div class="form-group">
			<input type="password" placeholder="Password" required="" id="Password" name="Password" />
		</div>
		<div>
			<input type="submit" value="Log in" />
		</div>
	</form>
		<div class="button">
			<a href="register.php">Register</a>
		</div>
	</section>
</div>
</body>
</html>
