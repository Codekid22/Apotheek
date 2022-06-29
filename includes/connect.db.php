<?php
define("db_name", "apotheek"); //CPANEL DATABASE NAAM hier
define("db_host", "localhost");
define("db_username", "root"); //CPANEL USER GEBERUIKERSNAAM hier
define("db_password", "MyN3wP4ssw0rd"); //CPANEL USER GEBRUIKERS WACHTWOORD hier
define("db_port", "3306"); //PORT

$conn = new mysqli(db_host, db_username, db_password, db_name, db_port);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

