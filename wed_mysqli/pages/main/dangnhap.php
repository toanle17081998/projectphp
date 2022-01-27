<?php
  
    if(isset($_POST['dangnhap'])){
        $email = $_POST['email'];
        $matkhau =($_POST['password']);
        $sql = "SELECT * FROM tbl_dangky WHERE email = '".$email."' AND matkhau = '".$matkhau."'  LIMIT 1";
        $row = mysqli_query($mysqli,$sql);
        $count = mysqli_num_rows($row);
        if($count>0){
            $row_data = mysqli_fetch_array($row);
            $_SESSION['dangky']= $row_data['tenkhachhang'];
            $_SESSION['id_khachhang']= $row_data['id_dangky'];
            header("Location: index.php?quanly=giohang");
        }else {
            echo "Tài khoản hoặc mật khẩu không đúng vui lòng nhập lại";
           

        }
    }

?>
<h3>Đăng nhập</h3>
<form method="POST" action="">
            <table  border="1" width="50%" class="table_login" style="border-collapse:collapse;">
                <tr>
                    <td colspan="2"><h3>Đăng nhập khách hàng</h3></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input size="50" name="email"type="email" placeholder="Nhập email của bạn"></td>
                </tr>
                <tr>
                    <td>Mật Khẩu</td>
                    <td><input size="50" name="password"type="password" placeholder="Nhập mật khẩu của bạn"></td>
                </tr>
                <tr>
                
                    <td colspan="2"><input size="50" name="dangnhap"type="submit" value="Đăng nhập"></td>
                </tr>
            </table>
        </form>