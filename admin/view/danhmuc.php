<?php 
     $title = "Trang danh mục";
    include './header.php';
    include './menu.php';
    include '../modul/class.php';
    $sanphamclass = new Sanpham();
    $showdanhmuc = $sanphamclass->show_danhmuc();
?>

<section class="main">
          <div class="df pdt">
            <div class="main-top">
                <h1>Trang quản lí danh mục</h1>
            </div>
            <div class="wid">
                <a href="./themdm.php">
                    <button type="button" class="btn btn-success">Thêm danh mục</button>
                </a>
            </div>
          </div>
          <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Tên danh mục</th>
      <th scope="col">Ngày tạo</th>
      <th scope="col">Chức năng</th>
    </tr>
  </thead>
  <tbody>
    <?php
        if($showdanhmuc){
            $num = 0;
            while($kq = mysqli_fetch_array($showdanhmuc)){
                $num++;
    ?>
    <tr>
      <th scope="row"><?=$num?></th>
      <td><?=$kq['danhmuc_name']?></td>
      <td><?=date('d/m/Y' ,   $kq['created_time'])?></td>
      <td class="df"><a style="width:0; padding: 0 5px;" href="./xoadm.php?danhmuc_id=<?= $kq['danhmuc_id']?>"><i style="padding: 0 5px;" class="fa-sharp fa-solid fa-trash cBl"></i></a> | <a style="width:0; padding: 0 5px;" href="./suadm.php?danhmuc_id=<?= $kq['danhmuc_id']?>"><i style="padding: 0 5px;" class="fa-solid fa-pen-to-square cBr"></i></a></td>
    </tr>
    <?php } }?>
  </tbody>
</table>
</div>
</body>
</html>