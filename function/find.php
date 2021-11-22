<?php
echo "<pre>";
print_r(find('detail','2'));
echo "</pre>";

function find($table,$id){
    $dsn="mysql:host=localhost;charset=utf8;dbname=track_expenses";
    $pdo=new PDO($dsn,'root','');
    $sql="SELECT * FROM `$table` WHERE `id`='$id'";
    
    return $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);    
}

?>