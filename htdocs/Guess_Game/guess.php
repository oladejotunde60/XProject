<html>
<head>
<title>OLADEJO TUNDE OLUWATOSIN  DAVID</title>
</head>
<body>
<h1>Welcome to my guessing game</h1>
<p>
<form action="" method="GET">
Guess a Number:
<input type="text" name="guess" value=""> 

<input type = "submit" name = "Submit">
</form>
<?php
  if ( ! isset($_GET['guess']) ) { 
    echo("Missing guess parameter");
  } else if ( strlen($_GET['guess']) < 1 ) {
    echo("Your guess is too short");
  } else if ( ! is_numeric($_GET['guess']) ) {
    echo("Your guess is not a number");
  } else if ( $_GET['guess'] < 24 ) {
    echo("Your guess is too low");
  } else if ( $_GET['guess'] > 24 ) {
    echo("Your guess is too high");
  } else {
    echo("Congratulations - You are right");
  }
?>
</p>
</body>
</html>
  