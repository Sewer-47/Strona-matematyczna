<!DOCTYPE html>
<html>
<head>
	<title>POTEGOWANIE</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<header>
		<a href="index.html"><img src="baner.jpg"></a>
	</header>

	<navigation>
		<p>Menu</p><!-- Nie wiem, czy to nie powinna być lista-->
		<p><a href="mathSimple.html">- proste działania</a></p>
		<p><a href="mathPowers.php">- potęgowanie</a></p>
	</navigation>

	<section>
		<h1>POTĘGOWANIE</h1>

		<form method="post">
			  <label for="foundation">Podaj podstawe potęgi:</label>
			  <input type="text" id="foundation" name="foundation"><br><br>

			  <label for="exponent">podaj dodatni, całkowity wykładnik potęgi:</label>
			  <input type="text" id="exponent" name="exponent"><br><br>

			  <input type="submit" value="POTĘGOWANIE">
		</form>

		<?php

			if (!isset($_POST['foundation']) || !isset($_POST['exponent'])) {
				echo "Wpisz podstawę i wykładnik potęgi.";
				exit();
			}

			$foundation = $_POST['foundation'];
			$exponent = $_POST['exponent'];

			if ($foundation == "" || $exponent == "") {
				echo "Wpisz podstawę i wykładnik potęgi.";
				exit();
			}

			if ((int) $foundation < 0) {
				echo "Wykładnik potęgi musi być dodatni.";
				exit();
			}

			echo "Twoj wynik: ".pow((int) $foundation, (int) $exponent);
		?>
	</section>
</body>
</html>