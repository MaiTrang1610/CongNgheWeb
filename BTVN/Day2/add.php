<?php include 'header.php'; ?>
<div style="margin-left: 40px">
    <div style="padding-top: 40px"><h2>THÊM MỚI SẢN PHẨM</h2></div>
    <form action="index.php" method="post">
        Tên sản phẩm: <input type="text" name="name" required>
        Giá sản phẩm: <input type="text" name="price" required><br>
        <input type="submit" value="Thêm mới"> 
    </form>
</div>

<?php include 'footer.php'; ?>
