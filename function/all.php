<?php
// echo "<pre>";
// print_r(all('detail'));
// echo "</pre>";

$rows=all('detail');

foreach($rows as $row){
    echo $row['date'].
         $row['item'].":".
         $row['remark']."<br>";
}

function all($table){
    $dsn="mysql:host=localhost;charset=utf8;dbname=track_expenses";
    $pdo=new PDO($dsn,'root','');
    $sql="SELECT * FROM `$table`";
    $rows=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
    //return $pdo->query($sql)->fetchAll();
}

?>