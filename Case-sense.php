<?php
$waarde = 3;
$Waarde = 8;
if($waarde == 3) {
    echo "Variable-names are case-sensitive";
} else if($waarde == 8) {
    echo "Variable-names are case-insensitive";
}
echo "<br>";
echo '$waarde';
echo "<br>";
echo "$waarde";
echo "<br>";
if($val == null) {
    echo "$val is not defined.";
}
// Print de string "De waarde van $waarde is 3." 
// door maar 1 keer gebruik te maken v.d. concatenatie-operator
// en de juiste soort quotes: single (') of double (").
// Je kan dit zelfs oplossen ZONDER de concatenatie-opeartor
// te gebruiken als je $ kan escapen.
?>
