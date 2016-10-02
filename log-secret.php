<?php

// session start
session_start();
// definering af session
$_SESSION['uid'] = $id;
// fortæller hvornår/hvordan sessionen skal starte --> (login.php bliver brugt som forsiden)
// forneden: hvis der ikke er nogen tomme/ugyldige felter, må man gerne bevæge sig videre
if(!isset($_SESSION['uid'])){
	header('Location: login.php');
}
exit();
session_destroy();
session_start();

session_unset();

session_destroy();

header("location: login.php");

?>