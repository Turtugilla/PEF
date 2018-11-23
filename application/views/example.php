<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<?php
	foreach($css_files as $file): ?>
		<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />

	<?php endforeach; ?>

</head>


<body>

		<div style="padding: 10px">
			<?php echo $output; ?>
		</div>
		<div style="text-align: center">
			<a href='<?php echo site_url('examples/users_management')?>'>Users</a> |
			<a href='<?php echo site_url('examples/orders_management')?>'>Orders</a> |
			<a href='<?php echo site_url('examples/products_management')?>'>Products</a> |
			<a href='<?php echo site_url('examples/multigrids')?>'>Multigrid [BETA]</a> |
			<a href='<?php echo site_url('https://pollitosenfuga.herokuapp.com/inicio.php')?>'>Inicio</a>
		</div>
		<?php foreach($js_files as $file): ?>
			<script src="<?php echo $file; ?>"></script>
		<?php endforeach; ?>


</body>
</html>
