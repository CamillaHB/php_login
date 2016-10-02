<?php 
// start af session på den hemmelige side 
session_start(); ?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Secret Page</title>
<!-- link til simpel CSS -->
<link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
<link href="style.css" rel="stylesheet">
</head>

<body>
<?php 
// koden herunder (som også er defineret/forklaret i log-secret.php) gør at indholdet kun vises hvis der er blevet logget ind. Er man ikke logget ind får man fejlmeddelelsen for neden.
if(isset($_SESSION['uid'])){
	
	echo '<h1>Welcome to the Super Secret Content!</h1><h2>For Users Only! Feel Special!</h2><br />';
	echo '<a href="logout.php"><button>Logout</button><a>';
} else {
	echo 'Access Denied!<br />Please Login or Register.<br /><a href="login.php">Return to Site</a>';	
} 
?>

</body>
</html>