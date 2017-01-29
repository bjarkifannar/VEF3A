<?php
	/* Sýna villur */
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	
	/* Autoload fall */
	spl_autoload_register(function ($class_name) {
		include_once "Classes/$class_name.php";
	});

	/* Breytur */
	$numbers = [5, 2, 6, 3, 6];
	$calculator = new CalculatorBase();
	$advancedCalculator = new CalculatorAdvanced();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<title>VEF3A3U - Verkefni 2 - Bjarki Fannar Snorrason</title>
	</head>
	<body>
		<?php
			echo '<p>Addition: '.$calculator->add($numbers).'</p>';
			echo '<p>Subtraction: '.$calculator->subtract($numbers).'</p>';
			echo '<p>2 squared: '.$advancedCalculator->power(2, 2).'</p>';
		?>
	</body>
</html>