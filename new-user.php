<?php 
// check om POST-array findes + at knappen er blevet aktiveret
if(isset($_POST['newUser'])){
// opret forbindelse >> sørg for alt er sat indenfor if { og }
$connection = new MySQLi(HOSTNAME, MYSQLUSER, MYSQLPASS, MYSQLDB);

$connection->set_charset("utf8");

if($connection->connect_error){
	die($connection->connect_error);
} else {
	echo '<h1>Succesful connection to MySQL server!</h1>';
}
// En ny query som skal gøre det muligt at uploade
$sqlUpdate = "INSERT INTO persons (name, email, pw) VALUES ('$name', '$email', '$pw')";

// Execute query + user feedback!
// Hvis man får fejlmeddelselsen, er det 99% af tiden stavefejl indenfor for if-betingelsen!
if(mysqli_query($connection, $sqlUpdate)){
	echo 'Welcome!';
} else {
	echo 'Something went wrong!';
}
///// Forbindelsen lukkes!!!
mysqli_close($connection);
//////////////////////
// end if isset condition:
}
?>