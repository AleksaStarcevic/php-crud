<?php
$host = "localhost";
$user = "root";
$pw = "";
$db = "prodajem_kupujem";

$mysqli = new mysqli($host, $user, $pw, $db);
if ($mysqli->connect_errno) {
    printf("Konekcija nije uspela: %s\n", $mysqli->connect_error);
    exit();
}

?>
