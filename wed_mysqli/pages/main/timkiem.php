<?php
    if(isset($_POST['timkiem'])){
        $tukhoa = $_POST['tukhoa'];
    
    }
    $sql_pro = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc AND tbl_sanpham.tensanpham LIKE '%".$tukhoa."%'";
    $query_pro = mysqli_query($mysqli,$sql_pro);
    
?>
<h3>Từ khóa tìm kiếm : <?php echo $_POST['tukhoa'] ?></h3>
                <ul class="product_list">
                    <?php
                    while($row = mysqli_fetch_array($query_pro)){
                    ?>
                    <li>
                        <a href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>">
                            <img src="admincp/modules/quanlysanpham/uploads/<?php echo $row['hinhanh'] ?>" alt="">
                            <p class="title_product"><?php echo $row['tensanpham'] ?></p>
                            <p class="price_product">Giá: <?php echo number_format($row['giasp'],0,',',',') ?> VNĐ </p>
                            <p style = "text-align: center;color: black;"><?php echo $row['tendanhmuc'] ?></p>
                        </a>    
                    </li>
                    <?php
                    }
                    ?>
                    
                    
                </ul>