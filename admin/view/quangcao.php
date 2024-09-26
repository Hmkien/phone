<?php
$title = "Trang quảng cáo";
$pageTitle = "quảng cáo";
include './header.php';
include './menu.php';
include '../modul/class.php';
$sanphamclass = new Sanpham();
$show_slide = $sanphamclass->show_slide();
?>

<section class="main">
  <div class="df pdt">
    <div class="main-top">
      <h1>Trang quản lí
        <?= $pageTitle ?>
      </h1>
    </div>
    <div class="wid">
      <a href="./themqc.php">
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
        <th scope="col">Ảnh
          <?= $pageTitle ?>
        </th>
        <th scope="col">Ngày tạo</th>
        <th scope="col">Chức năng</th>
      </tr>
    </thead>
    <tbody>
      <?php
      if ($show_slide) {
        $num = 0;
        while ($kq = mysqli_fetch_array($show_slide)) {
          $num++;
          ?>
          <tr>
            <th scope="row">
              <?= $num ?>
            </th>
            <td><img style="width: 17%;" src="../uploading/<?= $kq['slide_img'] ?>" alt=""></td>
            <td>
              <?= date('d/m/Y', $kq['created_time']) ?>
            </td>
            <td class="df"><a style="width:0;font-size: 19px; padding: 0 5px;"
                href="./xoaqc.php?slide_id=<?= $kq['slide_id'] ?>"><i style="padding: 0 5px;"
                  class="fa-sharp fa-solid fa-trash cBl"></i></a>
              <a style="width:0; padding: 0 5px;" href="#!"><i style="padding: 0 5px;"
                  class="fa-solid fa-pen-to-square cBr"></i></a>

            </td>
          </tr>
        <?php }
      } ?>
    </tbody>
  </table>
  </div>
  </body>

  </html>