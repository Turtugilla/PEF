<?php
$currency = '₹';
$db_username = 'rtbzonpplyyrpl';
$db_password = '52d15625e39e4b5b7526e803860d4c213665546b3b9c9daabd2fa0bc5a1cb520';
$db_name = 'd6hruvc6kfho1c';
$db_host = 'ec2-50-19-249-121.compute-1.amazonaws.com';
$db_port = '5432';
//$mysqli = new mysqli($db_host, $db_username, $db_password,$db_name);

$db_connection = pg_connect("host=".$db_host." dbname=".$db_name.
	" user=".$db_username." password=".$db_password);
?>
