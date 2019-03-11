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
    
//echo("==========================================================================\n <br>");

class Person {
    public $fullname = false;
    public $givenname = false;
    public $familyname = false;
    public $room = false;
   /* public $unimich = false;
    public $college = false; */

    function get_name() {
        if ($this->fullname !== false) {
            return $this->fullname;
        }
        if ($this->familyname !== false && $this->givenname !== false) {
            return $this->givenname. ' '. $this->familyname;
        }
        if ($this->unimich !== false && $this->college !== false) {
            return $this->unimich. ' '. $this->college;
        } 
        return false;
    }
}

$olad = new Person();
$olad->fullname = "Tunde Olad";
$olad->room = "oza room";

$nne = new Person();
$nne->familyname = "Nnochiri";
$nne->givenname = "Nnenna";
$nne->room = "@Nome";

$school = new person();
$school->unimich = "University of Michigan";
$school->college ="School of Information";

print $olad->get_name(). "\n <br>";
echo $nne->get_name(). "\n <br>";
echo $school->get_name(). "\n <br>"; 
    ?>
</body>
</html>