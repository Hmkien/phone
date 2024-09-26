<?php
$title = "Trang quản trị";
include './header.php';
include './menu.php';
include '../modul/class.php';
$sanpham_class = new Sanpham();
$sanpham = $sanpham_class->show_thanhvien();

?>




<section class="main">
    <div class="main-top">
        <h1>Thống kê cửa hàng</h1>
        <i class="fas fa-user-cog"></i>
    </div>
    <div class="users">
        <div class="card">
            <h4>Sản phẩm</h4>
            <p>1500</p>
            <div class="per">
                <table>
                    <tr>
                        <td><span>85%</span></td>
                        <td><span>87%</span></td>
                    </tr>
                    <tr>
                        <td>Month</td>
                        <td>Year</td>
                    </tr>
                </table>
            </div>
            <button>Chi tiết</button>
        </div>
        <div class="card">
            <h4>Danh mục</h4>
            <p>3</p>
            <div class="per">
                <table>
                    <tr>
                        <td><span>82%</span></td>
                        <td><span>85%</span></td>
                    </tr>
                    <tr>
                        <td>Month</td>
                        <td>Year</td>
                    </tr>
                </table>
            </div>
            <button>Chi tiết</button>
        </div>
        <div class="card">
            <h4>Quảng cáo</h4>
            <p>click to page</p>
            <div class="per">
                <table>
                    <tr>
                        <td><span>94%</span></td>
                        <td><span>92%</span></td>
                    </tr>
                    <tr>
                        <td>Month</td>
                        <td>Year</td>
                    </tr>
                </table>
            </div>
            <button>Chi tiết</button>
        </div>
        <div class="card">
            <h4>Đơn hàng</h4>
            <p>1000</p>
            <div class="per">
                <table>
                    <tr>
                        <td><span>85%</span></td>
                        <td><span>82%</span></td>
                    </tr>
                    <tr>
                        <td>Month</td>
                        <td>Year</td>
                    </tr>
                </table>
            </div>
            <button>Chi tiết</button>
        </div>
    </div>
    <div class="container">
        <div class="users">
            <div class="card">
                <h4>Doanh thu hôm nay</h4>
                <p>56.000.000đ</p>
                <div class="per">
                    <table>
                        <tr>
                            <td><span>20%</span></td>
                            <td><span>10%</span></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                        </tr>
                    </table>
                </div>
                <button>Chi tiết</button>
            </div>
            <div class="card">
                <h4>Doanh thu Tháng 5</h4>
                <p>3</p>
                <div class="per">
                    <table>
                        <tr>
                            <td><span>-10%</span></td>
                            <td><span>-25%</span></td>
                        </tr>
                        <tr>
                            <td>Tháng 4</td>
                            <td>Tháng 3</td>
                        </tr>
                    </table>
                </div>
                <button>Chi tiết</button>
            </div>
            <div class="card">
                <h4>Lợi nhuận hôm nay</h4>
                <p>5.000.000đ</p>
                <div class="per">
                    <table>
                        <tr>
                            <td><span>10%</span></td>

                        </tr>
                        <tr>
                            <td></td>
                            <td>Hôm trước</td>
                        </tr>
                    </table>
                </div>
                <button>Chi tiết</button>
            </div>
            <div class="card">
                <h4>Lợi nhuận tháng 5</h4>
                <p>30.000.000d</p>
                <div class="per">
                    <table>
                        <tr>
                            <td><span>-5%</span></td>
                            <td><span>-15%</span></td>
                        </tr>
                        <tr>
                            <td>Tháng 4</td>
                            <td>Tháng 3</td>
                        </tr>
                    </table>
                </div>
                <button>Chi tiết</button>
            </div>
        </div>
    </div>
    <section class="attendance">
        <div class="attendance-list">
            <h1>Danh sách người dùng</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tên người dùng</th>
                        <th>Email</th>
                        <th>Ngày tạo</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
          if ($sanpham) {
            $num = 0;
            while ($kq = mysqli_fetch_array($sanpham)) {
              $num++;
              ?>
                    <tr>
                        <td>
                            <?= $num ?>
                        </td>
                        <td>
                            <?= $kq['user_name'] ?>
                        </td>
                        <td>
                            <?= $kq['user_email'] ?>
                        </td>
                        <td>
                            <?= date('d/m/Y', $kq['created_time']) ?>
                        </td>
                    </tr>
                    <?php }
          } ?>
                </tbody>
            </table>
        </div>
    </section>
</section>
</div>

</body>

</html>