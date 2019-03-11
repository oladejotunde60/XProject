<?php
    $oldguess = '';
    $message = false;
    if (isset($_POST['guess'])) {
        //trick for integer / numeric parameters
        $oldguess = $_POST['guess'] + 0;
        if ($oldguess > 585700 ) {
            $message = "Wrong Parcel ID";
        } else if ($oldguess < 585700) {
            $message = "Wrong Parcel ID";
        } 
         else {
            $message = "Name: Adekeye Emmanuel <br>
            Loction: San Jose <br>
            Parcel Status: In Transit";
        }
    }


?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Guessing Game</title>
</head>
<body style="font-family: sans-serif";>
<p>Parcel Tracking</p>
<?php
    if ($message !== false) {
        echo("<p>$message</p>" );
    }
?>
<form method="post">
    <p><label for="guess">Enter Tracking Details:</label>
    <input type="text" name="guess" id="guess" size="30"
    value="<?= htmlentities($oldguess) ?>"/></p>
    <input type="submit"/>
</form>
    
</body>
</html>

