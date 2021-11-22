<?php
// function add($name,...$a){
//     echo $name;
//     print_r($a);
// }

// add(1,2);
// echo "<hr>";
// add(1,2,3,4);
// echo "<hr>";
// add(1,2,0,"mmm",['A','B']);
// echo "<hr>";
// add('泰山職訓場');
// echo "<hr>";
// add();

function add(...$arg){
    $sum=0;
    foreach($arg as $num){
        if(is_numeric($num)){
            $sum+=$num;
        }
    }
    return $sum;
}
echo add(1,2);
echo "<hr>";
echo add(1,2,3,4);
echo "<hr>";
echo add(1,2,0,"mmm",['A','B']);
echo "<hr>";
echo add('泰山職訓場');
echo "<hr>";
echo add();
?>