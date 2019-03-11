<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
        $oldguess = isset($_POST['guess']) ? $_POST['guess'] : '';
    ?>
    
<p>Guessing game...</p>
    <form method="post">
        <p><label for="guess">Input Guess</label>
        <input type="text" name="guess" id="guess"
        size="40" value="<?= htmlentities($oldguess) ?>" /></p>
        <input type="submit" />
    </form>

<pre> 
$_POST:
    <?php
        print_r($_POST)
    ?>
</pre> 
</body>
</html>