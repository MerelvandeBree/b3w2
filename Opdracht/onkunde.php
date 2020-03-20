<?php

	$kunnen = "";
	$opschieten = "";
	$getal = "";
	$vakantie = "";
	$besteEigenschap = "";
	$slechtsteEigenschap = "";
	$overkomen = "";

	if (isset($_POST["kunnen"]) && isset($_POST["opschieten"]) && isset($_POST["getal"]) && isset($_POST["vakantie"]) && isset($_POST["besteEigenschap"]) && isset($_POST["slechtsteEigenschap"]) && isset($_POST["overkomen"])) {
	    $showForm = false;
	}
	else {
		$showForm = true;
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Mad libs - Onkunde</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<div id="container">
	<h1>Mad libs</h1>
		<ul>
			<li><a href="paniek.php">Er heerst paniek...</a></li>
			<li><a href="#">Onkunde</a></li>
		</ul>
		<div id="form">

			<?php if ($showForm == true) { ?>

			<h2>Onkunde</h2>

			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

				<label class="label" for="kunnen">Wat zou je graag willen kunnen?</label>
				<input class="input" type="text" name="kunnen" value="<?echo $kunnen?>"><br><br>

				<label class="label" for="opschieten">Met welk persoon kun je goed opschieten?</label>
				<input class="input" type="text" name="opschieten" value="<?echo $opschieten?>"><br><br>

				<label class="label" for="getal">Wat is je favoriete getal?</label>
				<input class="input" type="text" name="getal" value="<?echo $getal?>"><br><br>

				<label class="label" for="vakantie">Wat heb je altijd bij je als je op vakantie gaat?</label>
				<input class="input" type="text" name="vakantie" value="<?echo $vakantie?>"><br><br>

				<label class="label" for="besteEigenschap">Wat is je beste persoonlijke eigenschap?</label>
				<input class="input" type="text" name="besteEigenschap" value="<?echo $besteEigenschap?>"><br><br>

				<label class="label" for="slechtsteEigenschap">Wat is je slechtste persoonlijke eigenschap?</label>
				<input class="input" type="text" name="slechtsteEigenschap" value="<?echo $slechtsteEigenschap?>"><br><br>

				<label class="label" for="overkomen">Wat is het ergste wat je kan overkomen</label>
				<input class="input" type="text" name="overkomen" value="<?echo $overkomen?>"><br><br>

				<input id="button" type="submit" name="submit">

				<div id="footer">
					<span id="footer">© 2020 - Merel van de Bree</span>
				</div>

				<?php } ?>
			</form>
			
		</div>
	</div>

</body>
</html>

<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST" && $showForm == false){
?>

	<div id='form'>

	<h2>Onkunde</h2>

	<p>Er zijn veel mensen die niet kunnen <?= $_POST["kunnen"] ?>. Neem nou <?= $_POST["opschieten"] ?> zelfs met de hulp van een <?= $_POST["vakantie"] ?> of zelfs <?= $_POST["getal"] ?> kan <?= $_POST["opschieten"] ?> niet <?= $_POST["kunnen"] ?>. Dat heeft niet temaken met een gebrek aan <?= $_POST["besteEigenschap"] ?>, maar met een te veel <?= $_POST["slechtsteEigenschap"] ?>. Te veel <?= $_POST["slechtsteEigenschap"] ?> leidt tot <?= $_POST["overkomen"] ?> en dat is niet goed als je wil <?= $_POST["kunnen"] ?>. Helaas voor <?= $_POST["opschieten"] ?>. </p>

	<div id="footer">
		<span id="footer">© 2020 - Merel van de Bree</span>
	</div>

	</div>
	
<?php } ?>