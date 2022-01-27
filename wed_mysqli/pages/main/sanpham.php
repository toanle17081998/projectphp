<p>Chi tiết sản phẩm</p>
<?php
    $sql_chitiet = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc = tbl_danhmuc.id_danhmuc 
    AND tbl_sanpham.id_sanpham = '$_GET[id]' LIMIT 1";
    $query_chitiet = mysqli_query($mysqli,$sql_chitiet);
    while($row_chitiet = mysqli_fetch_array($query_chitiet)){
?>
<div class="wrapper_chitiet">
    <div class="hinhanh_sanpham">
        <img width="100%" src="admincp/modules/quanlysanpham/uploads/<?php echo $row_chitiet['hinhanh'] ?>" alt=""> 
    </div>
    <form method="POST" action="pages/main/themgiohang.php?idsanpham=<?php echo $row_chitiet['id_sanpham']?>">
        <div class="chitiet_sanpham">
                <h3><?php echo $row_chitiet['tensanpham'] ?></h3>
                <p>Mã: <?php echo $row_chitiet['masp'] ?></p>
                <p>GIá: <?php echo number_format($row_chitiet['giasp'],0,',',',').'VNĐ' ?></p>
                <p>Số lượng: <?php echo $row_chitiet['soluong'] ?></p>
                <p>Danh mục: <?php echo $row_chitiet['tendanhmuc'] ?></p>
                <p><input class= "themgiohang" name= "themgiohang"value = "Thêm giỏ hàng"type="submit"></p>
        </div>
    </form>
</div>
<?php
    }
?>