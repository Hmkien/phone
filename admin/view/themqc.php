<?php 
    $title = "Trang quảng cáo";
    $pageTitle = "quảng cáo";
    include './header.php';
    include './menu.php';
    include '../modul/class.php';

    $sanphamclass = new Sanpham();
    if(isset($_POST['themquangcao'])){
        $slide_img = $_FILES['slide_img']['name'];
        $slide_img_tmp = $_FILES['slide_img']['tmp_name'];
        move_uploaded_file($slide_img_tmp,"../uploading/".$slide_img);
        $them_slide = $sanphamclass->them_slide($slide_img);
    }

?>

<section class="main">
          <div class="df pdt">
            <div class="main-top">
                <h1>Thêm <?=$pageTitle?></h1>
            </div>
          </div>
          <form action="" method="POST" class="form" enctype="multipart/form-data" >
                <label for="">Ảnh <?=$pageTitle?></label>
                <input type="file" required placeholder="Thêm ảnh <?=$pageTitle?>" name="slide_img" >
                <button type="submit" class="btn" name="themquangcao">Thêm</button>
            </form>
</section>
</body>
</html>