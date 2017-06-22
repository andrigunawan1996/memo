<?php
require 'config/db-config.php';
session_start();
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Memo</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>  
<div class="container">
	<section id="content">
	<form action="process/register-user.php" method="post">
		<h1>Register</h1>
		<div>
			<input type="text" placeholder="Username" required="" id="Username" name="Username" />
		</div>
		<div>
			<input type="text" placeholder="email" required="" id="email" name="email" />
		</div>
		<div>
			<input type="password" placeholder="Password" required="" id="Password" name="Password" />
		</div>
		<div>
			<input type="submit" value="Register">
			<a href="index.php"><text type="submit" class="btn btn-danger" />Back</a>
		</div>
		</form>
	</section>
</div>
</body>
</html>
