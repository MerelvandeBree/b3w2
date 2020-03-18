<?php
$nameErr = $emailErr = "";
$name = $email = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Lab 3 - html formulier</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="container">
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
		  <label id="name" for="name">Naam:</label><br>
		  <span class="error">* <?php echo $nameErr;?></span>
		  <input id="input1" type="text" name="name" value="<?echo $name?>"><br>
		  

		  <label id="email" for="email">Email: <br></label>
		  <span class="error">* <?php echo $emailErr;?></span>
		  <input id="input2" type="text" name="email" value="<?echo $email?>">
		  <input id="button" type="submit">
		</form>
	</div>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
	echo "De ingevulde gegevens zijn <br><br>";
	echo "Naam: " . $name . "<br>";
	echo "Emailadres: " . $email . "<br>";
}

?>

