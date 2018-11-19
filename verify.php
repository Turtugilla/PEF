<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

include 'config.php';

$email = $_POST["email"];
$password = $_POST["pwd"];
$flag = 'true';
//$query = $mysqli->query("SELECT email, password from users");



$result = pg_query($db_connection ,
	'SELECT id,email,password,fname,type from users order by id asc');

if($result === FALSE){
  die(mysql_error());
}


$resultArr = pg_fetch_all($result);


foreach($resultArr as $array){
	if($array['email'] === $email && $array['password'] === $password){
		$_SESSION['email'] = $email;
		$_SESSION['type'] = $array['type'];
		$_SESSION['id'] = $array['id'];
		$_SESSION['fname'] = $array['fname'];
		header("location:inicio.php");
	}else{
		if($flag === 'true'){
			redirect();
			$flag = 'false';
		}
	}
}

/*
if($result){
  while($obj = $result->fetch_object()){
    if($obj->email === $username && $obj->password === $password) {
      $_SESSION['username'] = $username;
      $_SESSION['type'] = $obj->type;
      $_SESSION['id'] = $obj->id;
      $_SESSION['fname'] = $obj->fname;
      header("location:inicio.php");
    } else {

        if($flag === 'true'){
          redirect();
          $flag = 'false';
        }
    }
  }
}
*/
function redirect() {
  echo '<h1>Invalid Login! Redirecting...</h1>';
  header("Refresh: 3; url=inicio.php");
}


?>
