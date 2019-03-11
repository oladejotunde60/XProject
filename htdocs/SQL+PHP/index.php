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
    date_default_timezone_set('Africa/Lagos');

    $nextWeek = time() + (7 * 24 * 60* 60);
    echo 'Now:     '.date('y-m-d'). "\n <br>";
    echo 'Next Week: '. date('y-m-d', $nextWeek). "\n <br>";

echo("==========================================================================\n <br>");

    $now = new DateTime();
    $nextWeek = new DateTime('today +1 week');
    echo 'Now:    '. $now -> format('y-m-d'). "\n <br>";
    echo 'Next Week:    '. $nextWeek -> format('y-m-d'). "\n <br>";
  
 echo("==========================================================================\n <br>");

    $olad = array(
    "fullname" => "Olad Tunde",
    "room" => "Loading..."
    );
    $nne = array(
    "familyname" => "Nnochiri",
    "givenname" => "Nnenna", 
    "room" => "@Nome"
    );

    function get_person_name($person) {
        if ( isset($person['fullname'])) {
            return $person['fullname'];
        }
        
        if ( isset($person['familyname'])&& isset($person['givenname'])) {
            return $person['givenname']. ' '. $person['familyname'];
        }
        return false;
    }
    
    echo get_person_name($olad). "\n <br>";
    print get_person_name($nne). "\n"

    ?>
</body>
</html>