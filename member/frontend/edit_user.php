<h3>編輯會員資料</h3>
<!-- 傳送到的網址記得要user -->
<form action="./api/edit_user.php?user=<?=$_SESSION['user'];?>" method="post">
<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=member";
$pdo=new PDO($dsn,'root','');
$sql="SELECT * FROM `account`,`member` 
               WHERE `account`.`id`=`member`.`id` && 
               `account`.`account`='{$_SESSION['user']}'";
// $sql="SELECT `member`.`address`, 
//              `member`.`mobile`, 
//              `account`.`mail`, 
//              `member`.`birthday` 
//              FROM `account`,`member` 
//                WHERE `account`.`id`=`member`.`id` && 
//                `account`.`account`='{$_GET['user']}';";
$user=$pdo->query($sql)->fetch();
?>
    <table>
        <tr>
            <td>id : </td>
            <td><?=$user['id'];?><input type="hidden" name="id" id="id" value="<?=$user['id'];?>"></td>
        </tr>
        <tr>
            <td><label for="address">地址 : </label></td>
            <td> <input type="text" name="address" id="address" value="<?=$user['address'];?>"></td>
        </tr>
        <tr>
            <td><label for="mobile">電話 : </label></td>
            <td><input type="text" name="mobile" id="mobile" value="<?=$user['mobile'];?>"></td>
        </tr>
        <tr>
            <td><label for="mail">mail : </label></td>
            <td> <input type="email" name="mail" id="mail" value="<?=$user['mail'];?>"></td>
        </tr>
        <tr>
            <td><label for="birthday">生日 : </label></td>
            <td> <input type="date" name="birthday" id="birthday" value="<?=$user['birthday'];?>"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="修改"></td>
        </tr>
    </table>
</form>