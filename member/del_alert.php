<?php
session_start();
$_SESSION['alert']=1;
//安全設置，讓沒登入的人無法看到這個頁面，並且回到首頁
// if(!isset($_SESSION['user'])){
//     header("location:index.php");
//     exit();
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 style="text-align:center;color:red;">您確定要刪除<?=$_SESSION['user'];?>的所有資料嗎?</h1>
<div style="width:200px;display:flex;justify-content:space-around;margin:auto;">
    <a href="./api/del_user.php"><button>確認刪除</button></a>
    <a href="dashboard.php"><button>取消</button></a>
</div>
</body>
</html>