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
    echo strrev(" .dlrow olleH ");
    echo "\n <br>";
    echo str_repeat(" Hip ", 2);
    echo strtoupper(" hooray! \n <br>");
    echo strlen("intro");
    echo "\n";

    function greet() {
        print "Hello!!"."DAAD"."<br>";
    }
    greet();

    function great() {
        return "Hello";
    }

    print great()." Glenn \n <br>";
    print great()." Tunde\n <br>";

    function test($para) {
        if ($para == "yor") return "Kilode";
        if ($para == "hau") return "Mia fa ru";
    }
    print test("yor"). " = Yoruba \n <br>";
    print test("hau"). " = Hausa \n <br>";

    function def($zang = "yor") {
        if ($zang == "yor") return "Ekaro";
        if ($zang == "hau") return "Inakwana";
        return "Hello";
    }
    print def(). " Olamide \n <br>";
    print def('hau'). " Fati  \n <br>";

    function triple($nick) {
        $nick *=3;
        return $nick;
    }
    $val = 20;
    $mval = triple($val);
    echo " value = ".$val." ". "triple = ".$mval."\n <br>";
    

    function multi(&$real) {
        $real = $real * 10;
    }
    $val = 5;
    multi($val);
    echo "multi = ".$val. "\n <br>"

    



?>
</body>
</html>