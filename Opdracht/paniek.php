<?php

	$huisdier = "";
	$persoon = "";
	$land = "";
	$vervelen = "";
	$speelgoed = "";
	$docent = "";
	$kopen = "";
	$bezigheid = "";

	$showForm = true;

	if (isset($_POST["huisdier"]) && isset($_POST["persoon"]) && isset($_POST["land"]) && isset($_POST["vervelen"]) && isset($_POST["speelgoed"]) && isset($_POST["docent"]) && isset($_POST["kopen"]) && isset($_POST["bezigheid"])) {
	    $showForm = false;
	}
	else {
		$showForm = true;
	}

?>

<!DOCTYPE HMTL>
<html>
<head>
	<title>Mad libs - Er heerst paniek</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<div id="container">
	<h1>Mad libs</h1>
		<ul>
			<li><a href="#">Er heerst paniek...</a></li>
			<li><a href="onkunde.php">Onkunde</a></li>
		</ul>
		<div id="form">

			<?php if ($showForm == true) { ?>

			<h2>Er heerst paniek...</h2>
				
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
				<label class="label" for="huisdier">Welk dier zou je nooit als huisdier willen hebben?</label>
				<input class="input" type="text" name="huisdier" value="<?= $huisdier?>"><br><br>

				<label class="label" for="persoon">Wie is de belangrijkste persoon in je leven?</label>
				<input class="input" type="text" name="persoon" value="<?= $persoon?>"><br><br>

				<label class="label" for="land">In welk land zou je graag willen wonen?</label>
				<input class="input" type="text" name="land" value="<?= $land?>"><br><br>

				<label class="label" for="vervelen">Wat doe je als je je verveelt?</label>
				<input class="input" type="text" name="vervelen" value="<?= $vervelen?>"><br><br>

				<label class="label" for="speelgoed">Met welk speelgoed speelde je als kind het meest?</label>
				<input class="input" type="text" name="speelgoed" value="<?= $speelgoed?>"><br><br>

				<label class="label" for="docent">Bij welke docent spijbel je het liefst?</label>
				<input class="input" type="text" name="docent" value="<?= $docent?>"><br><br>

				<label class="label" for="kopen">Als je &euro; 100.000,- had, wat zou je dan kopen?</label>
				<input class="input" type="text" name="kopen" value="<?= $kopen?>"><br><br>

				<label class="label" for="bezigheid">Wat is je favoriete bezigheid?</label>
				<input class="input" type="text" name="bezigheid" value="<?= $bezigheid?>"><br><br>

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

	<h2>Er heerst paniek...</h2>

	<p>Er heerst paniek in het koningkrijk. <?= $_POST["land"] ?> Koning <?= $_POST["docent"] ?> is ten einde raad en als koning <?= $_POST["docent"] ?> ten einde raad is, dan roept hij zijn ten-einde-raadsheer <?= $_POST["persoon"] ?>.</p> 

	<p>"<?= $_POST["persoon"] ?>! Het is een ramp! Het is een schande!"</p>

	<p>"Sire, Majestijd, Uwe Luidruchtigheid, wat is er aan de hand?"</p>

	<p>"Mijn <?= $_POST["huisdier"] ?> is verdwenen! Zomaar, zonder waarschuwing. En ik had net <?= $_POST["speelgoed"] ?> voor hem gekocht!"</p>

	<p>"Majestijd, uw <?= $_POST["huisdier"] ?> komt vast weet terug?"</p>

	<p>"Ja, da's leuk en aardig, maar hoe moet ik in de tussentijd <?= $_POST["bezigheid"] ?> leren?"</p>

	<p>"Maar Sire, daar kunt u toch <?= $_POST["kopen"] ?> voor gebruiken?"</p>

	<p>"<?= $_POST["persoon"] ?>, je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had?"</p>

	<p>"<?= $_POST["vervelen"] ?>, Sire."</p>

	<div id="footer">
		<span id="footer">© 2020 - Merel van de Bree</span>
	</div>

	</div>

<?php } ?>