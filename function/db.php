<?php
// $db="track_expenses";
// function pdo($db){
//     $dsn="mysql:host=localhost;charset=utf8;dbname=$db";
//     return new PDO($dsn,'root','');
// }

$dsn="mysql:host=localhost;charset=utf8;dbname=track_expenses";
$pdo=new PDO($dsn,'root','');

function find($table,$id){
    global $pdo;
    $sql="SELECT * FROM `$table` WHERE `id`='$id'";
    
    return $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);    
}
function all($table){
    global $pdo;
    $sql="SELECT * FROM `$table`";
    $rows=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
    //return $pdo->query($sql)->fetchAll();
}

?>