<?php
if(isset($_SESSION['user'])){
?> 
<style>
    .del{
        background: grey;
        color: white;
        float:right;
    }
</style>   
<nav>
    <a href="index.php">回首頁</a>
    <a href="content.php?action=dashboard">會員中心</a>
    <a href="change_pw.php">修改密碼</a>
    <a href="content.php?action=edit_user">編輯會員資料</a>
    <a href="logout.php">登出</a>
    <a href="del_alert.php" class="del">刪除帳號</a>
</nav>
<?php }else{ ?>
    <nav>
    <a href="index.php">回首頁</a>
    <a href="content.php?action=forgot">忘記密碼</a>
    <a href="content.php?action=reg"><button>註冊新會員</button></a>
</nav>
<?php } ?>