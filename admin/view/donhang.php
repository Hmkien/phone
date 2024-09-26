<?php
$title = "Trang đơn hàng";
include './header.php';
include './menu.php';
include '../modul/class.php';

$sanpham_class = new Sanpham();
$show_donhang = $sanpham_class->show_donhang();
?>

<section class="main">
    <div class="df pdt">
        <div class="main-top">
            <h1>Trang quản lí đơn hàng</h1>
        </div>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Tên người đặt</th>
                <th scope="col">Số điện thoại người đặt</th>
                <th scope="col">Địa chỉ người đặt</th>
                <th scope="col">Ghi chú</th>
                <th scope="col">Ngày đặt</th>
                <th scope="col">Chức năng</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($show_donhang) {
                $num = 0;
                while ($kq = $show_donhang->fetch_assoc()) {
                    $num++;
                    ?>
                    <tr>
                        <td scope="row">
                            <?php echo $num ?>
                        </td>
                        <td>
                            <?php echo $kq['order_name'] ?>
                        </td>
                        <td>
                            <?php echo $kq['order_phone'] ?>
                        </td>
                        <td>
                            <?php echo $kq['order_address'] ?>
                        </td>
                        <td>
                            <?php echo $kq['order_note'] ?>
                        </td>
                        <td>
                            <?= date('d/m/Y', $kq['created_time']) ?>
                        </td>
                        <td><a class="a_btn" href="./xemdonhang.php?order_id=<?php echo $kq['order_id'] ?>"><i
                                    class="fa-solid fa-eye"></i></a></td>
                    </tr>
                    <?php
                }
            }
            ?>
        </tbody>
    </table>
    </div>
    </body>

    </html>