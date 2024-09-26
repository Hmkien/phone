<?php 
    $title = "Trang thành viên";
    include './header.php';
    include './menu.php';
    include '../modul/class.php';

    $sanphamclass = new Sanpham();
    if(isset($_POST['them_thanhvien'])){
        $admin_name = $_POST['admin_name'];
        $admin_email= $_POST['admin_email'];
        $admin_pass = $_POST['admin_pass'];
        $them_thanhvien = $sanphamclass->them_thanhvien($admin_name,$admin_email,$admin_pass,$admin_img);
    }

?>

<section class="main">
          <div class="df pdt">
            <div class="main-top">
                <h1>Thêm thành viên</h1>
            </div>
          </div>
          <form action="" method="POST" class="form">
                <label for="">Tên thành viên</label>
                <input type="text" required placeholder="Thêm tên thành viên" name="admin_name" >
                <label for="">Email thành viên</label>
                <input type="email" required placeholder="Thêm email thành viên" name="admin_email" >
                <label for="">Mật khẩu thành viên</label>
                <input type="password" required placeholder="Thêm mật khẩu thành viên" name="admin_pass" >
                <button type="submit" class="btn" name="them_thanhvien">Thêm</button>
            </form>
</section>
</body>
</html>