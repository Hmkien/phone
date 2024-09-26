<?php 
    $title = "Trang danh mục";
    include './header.php';
    include './menu.php';
    include '../modul/class.php';

    $sanphamclass = new Sanpham();
    if(isset($_POST['themdanhmuc'])){
        $themdanhmuc = $sanphamclass->them_danhmuc($_POST);
    }

?>

<section class="main">
          <div class="df pdt">
            <div class="main-top">
                <h1>Thêm danh mục</h1>
            </div>
          </div>
          <form action="" method="POST" class="form">
                <label for="">Tên danh mục</label>
                <input type="text" required placeholder="Thêm tên danh mục" name="danhmuc_name" >
                <button type="submit" class="btn" name="themdanhmuc">Thêm</button>
            </form>
</section>
</body>
</html>