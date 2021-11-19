<?php

$account=$_POST['account'];
$password=$_POST['password'];
// $password=md5($_POST['password']); 
//正常要用這個md5編碼(無法復原)讓密碼不被看到。但我們在練習階段可以先用明碼就好

$mail=$_POST['mail'];
$name=$_POST['name'];
$address=$_POST['address'];
$mobile=$_POST['mobile'];
$birthday=$_POST['birthday'];

$sql_account="insert into `account`(`account`,`password`,`mail`) values('$account','$password','$mail')";
$sql_member="insert into `member`(`name`,`address`,`mobile`,`birthday`) values('$name','$address','$mobile','$birthday')";

$dsn="mysql:host=localhost;charset=utf8;dbname=member";
$pdo=new PDO($dsn,'root','');

$pdo->exec($sql_account);
$pdo->exec($sql_member);

header("location:../index.php");

?>