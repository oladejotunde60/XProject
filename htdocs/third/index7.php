<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p> Guessing game...</P>
    <form>
    <p>
    <label for="guess"> Input Guess</label>
    <input type="text" name="guess" id="guess"/>
    </p>
    <input type="submit"/>
    </form>
    <pre>
    $_GET:
    <?php
        print_r($_GET);
    ?>
</body>
</html>