<?php
session_start();

if (isset($_POST['register'])) {
  // Kết nối đến cơ sở dữ liệu
  $db = new mysqli('localhost', 'root', '', 'shopdienthoai');

  // Kiểm tra kết nối
  if ($db->connect_error) {
    die("Kết nối thất bại: " . $db->connect_error);
  }

  // Lấy dữ liệu từ form đăng ký
  $userName = $_POST['userName'];
  $password = $_POST['password'];
  $userEmail = $_POST['userEmail'];
  $role = 'user'; // Mặc định, bạn có thể thay đổi tùy theo yêu cầu của bạn

  // Kiểm tra xem tên người dùng đã tồn tại hay chưa
  $checkQuery = "SELECT * FROM user WHERE user_name = '$userName'";
  $checkResult = $db->query($checkQuery);

  if ($checkResult->num_rows > 0) {
    $error = "Tên đăng nhập đã tồn tại.";
  } else {
    // Thêm người dùng mới vào cơ sở dữ liệu
    $insertQuery = "INSERT INTO user (user_name,user_email, user_pass, role,created_time) 
        VALUES ('$userName',
        '$userEmail', 
        '$password',
         '$role',
         '" . time() . "')";
    if ($db->query($insertQuery) === TRUE) {
      $_SESSION['user_id'] = $db->insert_id;
      $_SESSION['role'] = $role;
      header('Location:./login.php'); // Chuyển hướng đến trang dashboard sau khi đăng ký thành công
    } else {
      $error = "Đã xảy ra lỗi trong quá trình đăng ký: " . $db->error;
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
      <h2>Đăng kí</h2>
      <div class="input-field">
        <input type="text" required name="userEmail">
        <label>Nhập email để đăng kí</label>
      </div>
      <div class="input-field">
        <input type="text" required name="userName">
        <label>Nhập tên</label>
      </div>
      <div class="input-field">
        <input type="password" required name="password">
        <label>Nhập mật khẩu</label>
      </div>
      <button type="submit" name="register">Đăng kí</button>
      <div class="register">
        <p>Bạn đã có tài khoản <a href="./login.php">Đăng nhập</a></p>
      </div>
    </form>
  </div>
</body>

</html>