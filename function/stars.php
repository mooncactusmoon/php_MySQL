<?php
//三角形星星函式
function stars($row){
    for($i=1;$i<=$row;$i++){
        for($j=0;$j<($row-$i);$j++){
            echo "&ensp;";
        }
        for($j=0;$j<(2*$i-1);$j++){
            echo "*";
        }
        echo "<br>";
    } 
    //執行結束
}
for($i=5;$i<12;$i=$i+2){
    stars($i);
}
?>