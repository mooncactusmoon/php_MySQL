<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=member";
$pdo=new PDO($dsn,'root','');

$id=$_POST['id'];
$address=$_POST['address'];
$mobile=$_POST['mobile'];
$mail=$_POST['mail'];
$birthday=$_POST['birthday'];

//更新的sql語法 
$sql_account="UPDATE `account` SET `mail`='$mail' WHERE `id`='$id'";
$sql_member="UPDATE `member` SET `address`='$address',`mobile`='$mobile',`birthday`='$birthday' WHERE `id`='$id'";

//執行更新(不需要用fetch拿回來)
$pdo->exec($sql_account);
$pdo->exec($sql_member);

echo $sql_account;
echo $sql_member;
header("location:../dashboard.php?user={$_GET['user']}");

?>