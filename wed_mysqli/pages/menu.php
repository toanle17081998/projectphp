<?php
    session_start();
    $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
    $query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
?>
<?php
    if(isset($_GET['dangxuat'])&& $_GET['dangxuat']==1){
        unset($_SESSION['dangky']);
    }   
?>
<div class="menu">
            <ul class="list_menu">
                <li><a href="index.php">Trang chủ</a></li>
                <li><a href="admincp/index.php">Kênh Người Bán</a></li>
                <li><a href="index.php?quanly=giohang">Giỏ hàng</a></li>
                <li><a href="index.php?quanly=tintuc">Tin tức</a></li>
                <li><a href="index.php?quanly=lienhe">Liên hệ</a></li>
                <?php
                if(isset($_SESSION['dangky'])){
                ?>
                <li><a href="index.php?dangxuat=1">Đăng Xuất</a></li>
                <?php
                }else{
                ?>
                <li><a href="index.php?quanly=dangnhap">Đăng nhập</a></li>
                <li><a href="index.php?quanly=dangky">Đăng ký</a></li>
                <?php
                }
                ?>
            </ul>
            <p class="timkiem">
                <form method="POST" action="index.php?quanly=timkiem">
                    <input  type="text" placeholder ="Tìm kiếm sản phẩm" name="tukhoa">
                    <input type="submit" name ="timkiem" value ="Tìm kiếm">
                </form>
            </p>

</div>