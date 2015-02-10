<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo $titre; ?></title>
	<link rel="shortcut icon" type="image/x-icon" href="assets/img/icon.png" />
	<link rel="stylesheet" href="assets/css/styles.css">
</head>
	<body class="gradient">
		<div id="contenu">
			<?php echo $contenu; ?>
		</div>
		<div id="footer">
			<hr>
			<p>Peterbook &copy; Copyright <?php echo date('Y'); ?></p>
		</div>
	</body>
</html>