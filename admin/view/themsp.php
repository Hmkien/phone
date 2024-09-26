<?php 
    $title = "Trang danh mục";
    $pageTitle = "sản phẩm";
    include './header.php';
    include './menu.php';
    include '../modul/class.php';

    $sanphamclass = new Sanpham();
    if(isset($_POST['themsanpham'])){
        $themsanpham = $sanphamclass->them_sanpham($_POST);
    }

?>

<section class="main">
          <div class="df pdt">
            <div class="main-top">
                <h1>Thêm <?=$pageTitle?></h1>
            </div>
          </div>
          <form action="" method="POST" class="form" enctype="multipart/form-data" >
                <label for="">Tên <?=$pageTitle?></label>
                <input type="text" required placeholder="Thêm tên <?=$pageTitle?>" name="sanpham_name" >
                <label for="">Ảnh <?=$pageTitle?></label>
                <input type="file" required placeholder="Thêm ảnh <?=$pageTitle?>" name="sanpham_img" >
                <label for="">Giá <?=$pageTitle?></label>
                <input type="text" required placeholder="Thêm Giá <?=$pageTitle?>" name="sanpham_gia" >
                <button type="submit" class="btn" name="themsanpham">Thêm</button>
            </form>
</section>
</body>
</html>