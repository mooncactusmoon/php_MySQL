<?php
session_start();

//安全設置，讓沒登入的人無法看到這個頁面，並且回到首頁
if(!isset($_SESSION['user'])){
    header("location:index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會員中心</title>
    <?php include "./include/head.php"; ?>
</head>

<body>
    <?php include "./include/header.php"; ?>
    <?php include "./include/nav.php"; ?>
    <?php include "./include/side_bar.php"; ?>
    <div class="content">
        <h3>會員中心</h3>
    <?php 
    // 因為網址有user=使用者帳號，所以用get可以的到其值
    echo $_SESSION['user']; 
    echo "歡迎你<br>";
    // 顯示個人資料
    
    $dsn="mysql:host=localhost;charset=utf8;dbname=member";
    $pdo=new PDO($dsn,'root','');
    $sql="SELECT * FROM `account`,`member` WHERE `account`.`id`=`member`.`id` && `account`.`account`='{$_SESSION['user']}'";
    $user=$pdo->query($sql)->fetch();
    ?>
    個人資料:
    <li>帳號 : <?=$user['account'];?></li>
    <li>地址 : <?=$user['address'];?></li>
    <li>電話 : <?=$user['mobile'];?></li>
    <li>mail : <?=$user['mail'];?></li>
    <li>生日 : <?=$user['birthday'];?></li>
    </div>  
    <?php include "./include/footer.php"; ?>
</body>

</html>