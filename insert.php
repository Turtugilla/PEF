<?php

include 'config.php';

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$address = $_POST["address"];
$city = $_POST["city"];
$pin = $_POST["pin"];
$email = $_POST["email"];
$pwd = $_POST["password"];
$query = "INSERT INTO users (fname, lname, address, city, pin, email , password)
           VALUES('$fname', '$lname', '$address', '$city', $pin, '$email', '$pwd')";


if(pg_query($db_connection, $query)){
echo 'Data inserted';
echo '<br/>';
}

header ("location:login.php");

?>
