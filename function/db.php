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
   //取出指定資料表的所有資料
function all($table){
    global $pdo;
    $sql="SELECT * FROM `$table`";
    $rows=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
    //return $pdo->query($sql)->fetchAll();
}
/**
 * update 函式設計
 * 1.指定資料表 $table => 字串
 * 2.指定更新的欄位 $column => 陣列
 * 3.指定更新的條件
 */
$column=['date'=>'2021-11-22',
         'place'=>'職訓中心'];
$where=['payway'=>'現金',
        'item'=>'午餐'];
        
update('detail',$column,$where);
/*  $sql="";
foreach ($array as $key => $value) {
    echo '迴圈執行前=> '.$sql.'<br>';
    $sql=$sql . "`$key`='$value' AND ";
    echo '迴圈執行後=> '.$sql.'<br>';
}
echo "迴圈完成後=>".mb_substr($sql,0,mb_strlen($sql)-5); */
 function update($table,$column,$where){
    global $pdo;

    $sql_set='';
    foreach ($column as $key => $value) {
        $sql_set=$sql_set . "`$key`='$value',";
    }
    $sql_set=trim($sql_set,',');

    $sql_where='';
    foreach ($where as $key => $value) {
        $sql_where=$sql_where . "`$key`='$value' AND ";
    }
    $sql_where=mb_substr($sql_where,0,mb_strlen($sql_where)-5);;

    mb_substr($sql_where,0,mb_strlen($sql_where)-5);
    $sql="UPDATE `$table` SET $sql_set WHERE $sql_where ";
    "UPDATE `expenditure` 
        SET `date`='2021-11-22',`place`='職訓中心' 
         WHERE `payway`='現金' AND `item`='午餐'";
    //echo $sql;
    $pdo->exec($sql);

 }

 function insert($table,$array){
    global $pdo;
    $array=['id'=>'1',
            'subject'=>'今天要吃甚麼'];
    $sql="INSERT into $table(`id`,`subject`) value('1','今天要吃甚麼')";

    return $pdo->exec($sql);
}
 function del($table,$id){
     global $pdo;
     $sql="DELETE FROM `$table` WHERE `id`='$id'";

     return $pdo->exec($sql);
 }


?>