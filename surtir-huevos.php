<?php
header('Access-Control-Allow-Origin: *');
$valorPasteles=json_decode($_GET["huevos"],true);

function pg_connection_string_from_database_url() {
  extract(parse_url($_ENV["DATABASE_URL"]));
  return "user=$user password=$pass host=$host dbname=" . substr($path, 1); # <- you may want to add sslmode=require there too
}

$pg_conn = pg_connect($conn.pg_connection_string_from_database_url());


foreach( $valorHuevos as $huevo ) {
	
		$result = pg_query($pg_conn, "SELECT  qty  FROM products WHERE product_name = ".$huevo["nombre_producto"]);
		$c = pg_fetch_row($result);
		$array = array();
		if($c[0] >= $huevo["cantidad"]){
              array_push($array, 'success');
			  $upt = "UPDATE products SET qty=".($c[0]- $huevo["cantidad"])." WHERE product_name=".$huevo["nombre_producto"];
		}else{
			  array_push($array, 'error');
		}

		echo json_encode($array);

         }



?>









//$act =  + $huevo["cantidad"];
//
//$result2 = pg_query($pg_conn, "UPDATE pastel SET cantidad=".$act." WHERE codigo_pastel=".$pastel["codigo_pastel"]);
