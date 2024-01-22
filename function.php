
<?php
/*function soma(){

    $s = 20+26;
    return $s;
}
echo soma() */



$a = 50;
function soma(){
global $a;
$x= $a + 40;
return $x;
}
echo soma()

?>