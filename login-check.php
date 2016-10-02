<?php
// start af session
session_start();
// connect til database
include('db-connect.php');

// da vi kun skal bruge navn og kodeord (og IKKE email), er det kun disse to vi beder om på login siden. Informationerne bliver hentet fra databasen, og vil blive sammenlignet med det brugeren indtaster. Vi beder her kun om "pw" og ikke "phash", da "pw" er det som brugeren selv indtaster, mens "phash" er den krypterede version
$name = filter_input(INPUT_POST, 'name') or die('Wrong Username!');
$pw = filter_input(INPUT_POST, 'pw') or die('Wrong Password!');

$sql = "SELECT id, name, pw FROM persons WHERE name=?";

$stmt = $connection->prepare($sql);
$stmt->bind_param('s', $name);
$stmt->execute();
$stmt->bind_result($id, $name, $phash);
if($stmt->fetch()){
// hvis brugeren har indtastet de forkerte oplysning, vil de få en fejlmeddelelse. Hvis oplysningerne er korrekte, vil brugeren få den mulighed at besøge den hemmelige side (ved at trykke på en knap) -- sikkerhed: hashing (vi sørger for at verify både "pw" og "phash")
	if(password_verify($pw, $phash)){
		echo 'Login Successful!<br /><br />';
		$_SESSION['uid'] = $id;
		echo '<button><a href="secret.php">Enter Site</a></button>';
	} else {
		echo 'Login Failed!';
	}
}
else { 
		echo 'Login Failed... Again!';
}

?>
<!-- simpel CSS -->
<link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
<link href="style.css" rel="stylesheet">