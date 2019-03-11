<?php $nigeria = array("abia" => "umahia <br>",
                     "adamawa" => "yola <br>",
                     "ondo" => "akure <br>",
                     "osun" => "osogbo <br>",
                     "kwara" => "ilorin <br>");
    foreach ($nigeria as $state => $capital) {
        echo $state." ".$capital. " ";
    }

    $stuff = array ("chuck", "SI665 ");
    foreach ($stuff as $k => $v) {
        echo "Key = ". $k." Val=".$v. " <br>";
    } 

    $stuff = array("chuck", "SI990 <br>");
    for ($i=0; $i < count($stuff); $i++) {
        echo "index = "." ".$i. "value = ". $stuff[$i];
    }

    $products = array(
     "paper" => array(
        "copier" => "Copier and Multipurpose",
        "inkjet" => "Inkjet Printer",
        "laser" => "Laser Printer",
        "photo" => "Photographic Paper"),

     "pens" => array(
         "ball" => "Ball Point",
         "hilite" => "Highlighters",
         "marker" => "Markers"),
     "misc" => array(
         "tape" => "Sticky Tape ",
         "glue" => "Adhesives",
         "clips" => "Paperclips"
     )

     );
        echo $products["misc"]["glue"];
        


     if (array_key_exists("name", $za)) {
         echo ("Course exists <br>");
     } else {
         echo ("Course does not exist <br>");
     }

     echo isset($za["name"]) ? "name is set" : "name is not set";
     echo isset($za["addr"]) ? "addr is set" : "addr is not set";

     $name = $za["name"] ?? "not found";
     $add = $za["add"] ?? "not found";

     echo "$name";
     echo "$add". "<br>";

    print "count:" .count($za) . "<br>"


    
   
































?>