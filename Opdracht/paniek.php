<!DOCTYPE html>
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
			<h2>Er heerst paniek...</h2>
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
				<label class="label" for="huisdier">Welk dier zou je nooit als huisdier willen hebben?</label>
				<input class="input" type="text" name="huisdier"><br><br>

				<label class="label" for="persoon">Wie is de belangrijkste persoon in je leven?</label>
				<input class="input" type="text" name="persoon"><br><br>

				<label class="label" for="land">In welk land zou je graag willen wonen?</label>
				<input class="input" type="text" name="land"><br><br>

				<label class="label" for="vervelen">Wat doe je als je je verveelt?</label>
				<input class="input" type="text" name="vervelen"><br><br>

				<label class="label" for="speelgoed">Met welk speelgoed speelde je als kind het meest?</label>
				<input class="input" type="text" name="speelgoed"><br><br>

				<label class="label" for="spijbel">Bij welke docent spijbel je het liefst?</label>
				<input class="input" type="text" name="spijbel"><br><br>

				<label class="label" for="kopen">Als je &euro; 100.000,- had, wat zou je dan kopen?</label>
				<input class="input" type="text" name="kopen"><br><br>

				<label class="label" for="bezigheid">Wat is je favoriete bezigheid?</label>
				<input class="input" type="text" name="bezigheid"><br><br>

				<input id="button" type="submit" name="submit">
			</form>
			<div id="footer">
				<span id="footer">© 2020 - Merel van de Bree</span>
			</div>
		</div>
	</div>

</body>
</html>