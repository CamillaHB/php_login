<?php 
// starter session
session_start();
// connect til database
require_once('db-connect.php'); 
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Create User</title>
<!-- simpel CSS styling -->
<link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
<link href="style.css" rel="stylesheet">
</head>

<body>
<h1>Create New User</h1>
<p>Return to <a href="login.php">Login</a>...</p>
<!-- Form der linker til submit.php fil -->
<form method="post" action="submit.php">
<p>Name:</p>
<input type="text" name="name" required />
<p>E-mail:</p>
<input type="email" name="email" required />
<p>Password:</p>
<input type="password" name="pw" required />
<br>
<p>Please fill in all fields!</p>
<input type="submit" name="newUser" />
</form>

</body>
</html>