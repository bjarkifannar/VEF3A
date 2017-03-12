<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Verkefni 5</title>
	</head>
	<body>
		<?php
			require_once 'ReadJSON.php';
			require_once 'WriteJSON.php';

			$fileName = 'myndir.json';

			if (isset($_POST['add_movie'])) {
				if (isset($_POST['movie_name'], $_POST['movie_url'])) {
					$data = array($_POST['movie_name'], $_POST['movie_url']);

					$writer = new WriteJSON($fileName, $data);
				}
			}

			$reader = new ReadJSON($fileName);

			$jsonData = $reader->getJSON();

			foreach ($jsonData as $key => $value) {
				echo '<p>';

				foreach ($value as $key2 => $value2) {
					echo $key2.': '.$value2.'<br>';
				}

				echo '</p>';
			}
		?>
		<form action="" method="POST">
			<label>Movie name:</label><br>
			<input type="text" name="movie_name" required><br><br>
			<label>Movie URL:</label><br>
			<input type="text" name="movie_url" required><br><br>
			<input type="submit" name="add_movie" value="Add Movie">
		</form>
	</body>
</html>