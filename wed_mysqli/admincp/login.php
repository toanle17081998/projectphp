<?php
    session_start();
    include('config/config.php');
    if(isset($_POST['dangnhap'])){
        $taikhoan = $_POST['username'];
        $matkhau =md5($_POST['password']);
        $sql = "SELECT * FROM tbl_admin WHERE username = '".$taikhoan."' AND password = '".$matkhau."'  LIMIT 1";
        $row = mysqli_query($mysqli,$sql);
        $count = mysqli_num_rows($row);
        if($count>0){
            $_SESSION['dangnhap']= $taikhoan;
            header("Location: index.php");
        }else {
            echo '<script>alert("Tài khoản hoặc mật khẩu không đúng vui lòng nhập lại")</script>';
            header("Location: login.php");

        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <style>
        body{
            background: #f1f1f1;
        }
        .wrapper_login{
            width: 20%;
            margin: auto;
        }
        .table_login{
            width: 100%;
            text-align: center;
            border-collapse: collapse;
        }
        table.table_login tr td{
            padding: 5px;
        }
    </style>
</head>
<body>
    <div class="wrapper_login">
        <form method="POST" action="">
            <table  border="1"; class="table_login">
                <tr>
                    <td colspan="2"><h3>Đăng nhập người bán</h3></td>
                </tr>
                <tr>
                    <td>Tài Khoản</td>
                    <td><input name="username"type="text" placeholder="Nhập tài khoản của bạn"></td>
                </tr>
                <tr>
                    <td>Mật Khẩu</td>
                    <td><input name="password"type="password" placeholder="Nhập mật khẩu của bạn"></td>
                </tr>
                <tr>
                
                    <td colspan="2"><input name="dangnhap"type="submit" value="Đăng nhập"></td>
                </tr>
            </table>
        </form>
    </div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>   
</body>
</html>