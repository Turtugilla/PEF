<?php
header('Access-Control-Allow-Origin: *');
$valorPasteles=json_decode($_GET["pasteles"],true);

function pg_connection_string_from_database_url() {
  extract(parse_url($_ENV["DATABASE_URL"]));
  return "user=$user password=$pass host=$host dbname=" . substr($path, 1); # <- you may want to add sslmode=require there too
}

$pg_conn = pg_connect($conn.pg_connection_string_from_database_url());


foreach( $valorPasteles as $pastel ) {
	
		$result = pg_query($pg_conn, "SELECT cantidad FROM pastel WHERE codigo_pastel = ".$pastel["codigo_pastel"]);
		$c = pg_fetch_row($result);
		$act = $c[0] + $pastel["cantidad"];
		$upt = "UPDATE pastel SET cantidad=".$act." WHERE codigo_pastel=".$pastel["codigo_pastel"];

         $result2 = pg_query($pg_conn, "UPDATE pastel SET cantidad=".$act." WHERE codigo_pastel=".$pastel["codigo_pastel"]);
         echo $upt;
         }


echo "Pollos en fuga";
?>
