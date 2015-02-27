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
			<div class='footer_text'>
				<p class='prevention'>Peterbook &copy; Copyright <?php echo date('Y'); ?></p>
			</div>
		</div>
	</body>
</html>