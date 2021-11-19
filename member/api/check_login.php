<?php
// $account=$_POST['account'];
// $password=$_POST['password'];
// $password=md5($_POST['password']); 編碼後的密碼

$sql="SELECT count(*) FROM `account` WHERE `account`='{$_POST['account']}' && `password`='{$_POST['password']}'";

// SELECT * FROM `account` WHERE `account`='$_POST['account']' && `password`='$_POST['password']';

$dsn="mysql:host=localhost;charset=utf8;dbname=member";
$pdo=new PDO($dsn,'root','');

// $result=$pdo->query($sql);
// var_dump($result);
// echo "<br>";
$result=$pdo->query($sql)->fetchColumn();

if($result>0){
    // header("location:../dashboard.php"); 原本的
    header("location:../dashboard.php?user=".$_POST['account']);
}else{
    header('location:../index.php?err=1');
}
?>