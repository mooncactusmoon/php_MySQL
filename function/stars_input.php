<!-- action="?"表示回到當前頁面，在此等同於stars_input.php -->
<form action="?" method="post">
    <input type="number" name="stars">
    <input type="submit" value="送出">
</form>
<?php
if(isset($_POST['stars'])){
    stars($_POST['stars']);
}
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
}
?>