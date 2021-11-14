<?php
//用來連接資料庫的方法
$dsn="mysql:host=localhost;charset=utf8;dbname=students";
$pdo=new PDO($dsn,'root','');

$range=(isset($_GET['id']))?$_GET['id']:20;

//實際上送出
$sql="SELECT * from `students` where `id` < $range";
$rows=$pdo->query($sql)->fetchAll();

// echo "<pre>";
// var_dump($rows);
// echo "</pre>";

// $pdo=new PDO('資料庫的連線資訊','帳號','密碼','[其他參數]');
?>
<style>
    table{
        border: 3px double;
        border-collapse: collapse;
    }
    td{
        border: 1px solid black;
        padding: 4px 10px;
    }
    tr:nth-child(odd){
        background-color: pink;
    }
</style>
<table >
    <tr class="tr1">
        <td>學號</td>
        <td>座號</td>
        <td>名字</td>
        <td>性別</td>
        <td>生日</td>
        <td>畢業國中</td>
    </tr>
    <?php

foreach($rows as $rows){
    echo "<tr>";
    echo "<td>".$rows['uni_id']   ."</td>";
    echo "<td>".$rows['seat_num'] ."</td>";
    echo "<td>".$rows['name']     ."</td>";
    if(mb_substr($rows['national_id'],1,1)==1){
        echo "<td>"."男生" ."</td>";
    }else{
        echo "<td>"."女生" ."</td>";

    }
    echo "<td>".$rows['birthday'] ."</td>";
    echo "<td>".$rows['secondary']."</td>";
    echo "</tr>";
}

?>
</table>