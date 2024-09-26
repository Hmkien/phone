<?php
$title = "Trang thành viên";
include './header.php';
include './menu.php';
include '../modul/class.php';
$sanphamclass = new Sanpham();
$show_admin = $sanphamclass->show_admin();
?>

<section class="main">
  <div class="df pdt">
    <div class="main-top">
      <h1>Trang quản lí thành viên</h1>
    </div>
    <div class="wid">
      <a href="./themtv.php">
        <button type="button" class="btn btn-success">Thêm thành viên</button>
      </a>
    </div>
  </div>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Tên thành viên</th>
        <th scope="col">Ngày tạo</th>
        <th scope="col">Chức năng</th>
      </tr>
    </thead>
    <tbody>
      <?php
      if ($show_admin) {
        $num = 0;
        while ($kq = mysqli_fetch_array($show_admin)) {
          $num++;
          ?>
          <tr>
            <th scope="row">
              <?= $num ?>
            </th>
            <td>
              <?= $kq['admin_name'] ?>
            </td>
            <td>
              <?= date('d/m/Y', $kq['created_time']) ?>
            </td>
            <td class="df"><a style="width:0; padding: 0 5px;" href="./xoatv.php?admin_id=<?= $kq['admin_id'] ?>"><i
                  style="padding: 0 5px;" class="fa-sharp fa-solid fa-trash cBl"></i></a>
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