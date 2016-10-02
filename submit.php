<?php
// start af session
session_start();

// sikre at det er valide informationer der bliver intastet -- inklusivt php email validering
$name = filter_input(INPUT_POST, 'name') or die ('Not a valid name!');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL) or die ('Not a valid email!');
$pw = filter_input(INPUT_POST, 'pw') or die ('Not a valid password!');
// en form for kryptering, der gør password mere sikkert --> hashing
$phash = password_hash($pw, PASSWORD_DEFAULT);

// connect til database
require_once 'db-connect.php';
// de intastet informationer bliver gemt i databasen
$sql = 'INSERT INTO persons (name, email, pw) VALUES (?,?,?)'; 

// bind parameters to prepared statement --> yderligere sikring
$stmt = $connection->prepare($sql);
$stmt->bind_param('sss', $name, $email, $phash);

$stmt->execute();
// efter brugeren er oprettet, kan de gå til login siden
echo '<a href="login.php"><button>Return to Site</button></a>';
?>
<!-- simpel CSS -->
<link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
<link href="style.css" rel="stylesheet">