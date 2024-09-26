<?php
session_start();
if (isset($_POST['login'])) {
  // Kết nối đến cơ sở dữ liệu
  $db = new mysqli('localhost', 'root', '', 'shopdienthoai');

  // Kiểm tra kết nối
  if ($db->connect_error) {
    die("Kết nối thất bại: " . $db->connect_error);
  }

  // Lấy dữ liệu từ form đăng nhập
  $useremail = $_POST['useremail'];
  $password = $_POST['password'];

  // Truy vấn kiểm tra thông tin đăng nhập
  $sql = "SELECT * FROM user WHERE user_email = '$useremail' AND user_pass = '$password'";
  $result = $db->query($sql);

  if ($result->num_rows == 1) {
    $error = array();
    // Đăng nhập thành công, lưu thông tin người dùng vào session
    $user = $result->fetch_assoc();
    $_SESSION['user_name'] = $user['user_name'];
    $_SESSION['user_id'] = $user['user_id'];
    $_SESSION['role'] = $user['role'];
    if ($user['role'] === 'user') {
      $error['success'] = 'Đăng nhập thành công !';
      header('Location: ../view'); // Chuyển hướng đến trang dashboard sau khi đăng nhập
    } else {
      $error = "Tên đăng nhập hoặc mật khẩu không đúng.";
    }

  }



}
?>
<!DOCTYPE html>
<!-- Coding By CodingNepal - www.codingnepalweb.com -->
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hoàng Tử Gió Mobile</title>
    <link rel="icon" href="../assets/images/Space_Phone.png">
    <link rel="stylesheet" href="../assets/css/login.css">
</head>

<body>
    <div class="wrapper">
        <form action="#" method="POST">
            <h2>Đăng nhập</h2>
            <div class="input-field">
                <input type="text" required name="useremail">
                <label>Nhập email để đăng nhập</label>
            </div>
            <div class="input-field">
                <input type="password" required name="password">
                <label>Nhập mật khẩu</label>
            </div>
            <button type="submit" name="login">Đăng nhập</button>
            <div class="register">
                <p>Don't have an account? <a href="./dangki.php">Đăng kí</a></p>
            </div>
        </form>
    </div>
</body>

</html>