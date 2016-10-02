<?php
// Connection to DB server!
define("HOSTNAME", "localhost");
define("MYSQLUSER", "login-user");
define("MYSQLPASS", "secret");
define("MYSQLDB", "login_test");

$connection = new MySQLi(HOSTNAME, MYSQLUSER, MYSQLPASS, MYSQLDB);

// for at sikre at alle specielle tegn kommer med (f.eks. danske bogstaver). vigtigt at man man også har sat utf8 i sin database
$connection->set_charset("utf8");

// virker det eller ej? (pil objekt har med programmering at gøre = adgang til alle metoder)
// Er der en forbindelsesfejl så skal forbindelsen "dø"
if($connection->connect_error){
	die($connection->connect_error);
}