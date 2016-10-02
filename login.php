<?php 
// start af session
session_start();
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<!-- link til simpel CSS -->
<link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
<link href="style.css" rel="stylesheet">
</head>

<body>
<h1>Welcome User!</h1>
<!-- link til det hemmelige site -->
<a href="secret.php">Enter Site</a>
<!-- form der linker til login-check.php -->
<form method="post" action="login-check.php">
<p>Name:</p>
<input type="text" name="name" required />
<p>Password:</p>
<input type="password" name="pw" required />
<br><br>
<input type="submit" value="Login" />
<br>
<p>Not registered yet?</p>
<!-- link til mulighed for at oprette bruger -->
<button><a href="create-user.php">Create New User</a></button>
</form>

</body>
</html>