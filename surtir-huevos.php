<?php

include('config.php');
header('Access-Control-Allow-Origin: *');
$valorHuevos=json_decode($_GET["huevos"],true);





$array = array();
foreach($valorHuevos as $huevo ) {
		$result = pg_query($db_connection, "SELECT  qty  FROM products WHERE product_name = '".$huevo["nombre_producto"]."'");
		$c = pg_fetch_row($result);

		if($c[0] >= $huevo["cantidad"]){
              array_push($array, 'success');
              $update = pg_query($db_connection, "UPDATE products SET qty=".($c[0]- $huevo["cantidad"])." WHERE product_name='".$huevo["nombre_producto"]."'");
		}else{
			  array_push($array, 'error');
		}

         }

  echo json_encode($array);


?>

