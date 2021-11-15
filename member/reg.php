<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>註冊新會員</title>
    <style>
        *{
            text-align: center;
            font-family: fantasy;
            font-size: 18px;
        }
        table {
            width: 300px;
            margin: auto;
            border-collapse: collapse;
            background-color: #CCFFFF;
        }
        div{
            text-align: center;
            margin: auto;
            width: 300px;
            height: 250px;
            background-color: #99CCFF;
            box-shadow:3px 3px 5px 6px #cccccc;   
        }
        input{
            width: 150px;
        }
        .btn{
            width: 70px;
            background-color: #CCFFFF;
        }
    </style>
</head>

<body>
<?php include "header.php"; ?>
    <?php include "nav.php"; ?>
    <?php include "sider_bar.php"; ?>
    <h1>會員註冊</h1>
    <p>請填入以下資訊</p>
    <div>
        <form action="">
            <table>
                <tr>
                    <td><label for="account">註冊帳號</label></td>
                    <td><input type="text" name="acc" id="account"></td>
                </tr>
                <tr>
                    <td><label for="password">設定密碼</label></td>
                    <td><input type="text" name="pw" id="password"></td>
                </tr>
                <tr>
                    <td><label for="name">姓名/稱呼</label></td>
                    <td><input type="text" name="id" id="name"></td>
                </tr>
                <tr>
                    <td><label for="email">聯絡信箱</label></td>
                    <td><input type="text" name="email" id="email"></td>
                </tr>
                <tr>
                    <td><label for="birthday">生日</label></td>
                    <td><input type="date" name="btd" id="birthday"></td>
                </tr>
            </table>
            <br><br><br>
            <input type="submit" value="Sumbit" class="btn">
            <!-- <input type="reset" value="Cancel" class="btn"> -->
        </form>
    </div>
    <?php include "footer.php"; ?>
</body>

</html>