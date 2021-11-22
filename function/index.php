<?php
add(3,5);
echo "<br>";
echo add(3,5)+10;
echo "<br>";

$result=add(3,5);
echo $result+5;
echo "<br>";
echo "2" . $result+5;
echo "<br>";
echo "result=".$result;

function add($a,$b){
    echo $a+$b;
    return $a+$b;
}
echo "<hr>";
// 寫一個函式 . 可以輸入名字 . 然後 echo "hello XXX"

hello("Moon");
function hello($name){
    echo "hello&nbsp;".$name;

}


?>