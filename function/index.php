<?php
add(3,5);
echo "<br>";
echo add(3,5)+10;
echo "<br>";

$result=add(3,5);
echo "2" . $result+5;
echo "<br>";
echo "result=".$result;

function add($a,$b){
    echo $a+$b;
    return $a+$b;
}


?>