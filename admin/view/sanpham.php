<?php
$title = "Trang sản phẩm";
$pageTitle = "sản phẩm";
include './header.php';
include './menu.php';
include '../modul/class.php';
$sanphamclass = new Sanpham();
$show_sanpham = $sanphamclass->show_sanpham();
?>

<section class="main">
  <div class="df pdt">
    <div class="main-top">
      <h1>Trang quản lí
        <?= $pageTitle ?>
      </h1>
    </div>
    <div class="wid">
      <a href="./themsp.php">
        <button type="button" class="btn btn-success">Thêm
          <?= $pageTitle ?>
        </button>
      </a>
    </div>
  </div>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Tên
          <?= $pageTitle ?>
        </th>
        <th scope="col">Ảnh
          <?= $pageTitle ?>
        </th>
        <th scope="col">Giá
          <?= $pageTitle ?>
        </th>
        <th scope="col">Chức năng</th>
      </tr>
    </thead>
    <tbody>
      <?php
      if ($show_sanpham) {
        $num = 0;
        while ($kq = mysqli_fetch_array($show_sanpham)) {
          $num++;
          ?>
          <tr>
            <th scope="row">
              <?= $num ?>
            </th>
            <td>
              <?= $kq['sanpham_name'] ?>
            </td>
            <td><img style="width: 17%;" src="../uploading/<?= $kq['sanpham_img'] ?>" alt=""></td>
            <td>
              <?= number_format($kq['sanpham_gia'], 0, ",", ".") ?>.000đ
            </td>
            <td class="df"><a style="width:0;font-size: 19px; padding: 0 5px;"
                href="./xoasp.php?sanpham_id=<?= $kq['sanpham_id'] ?>"><i style="padding: 0 5px;"
                  class="fa-sharp fa-solid fa-trash cBl"></i></a><a style="width:0; padding: 0 5px;" href="#!"><i
                  style="padding: 0 5px;" class="fa-solid fa-pen-to-square cBr"></i></a></td>
          </tr>
        <?php }
      } ?>
    </tbody>
  </table>
  </div>
  </body>

  </html>