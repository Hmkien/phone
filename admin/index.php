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
    $admin_email = $_POST['admin_email'];
    $password = $_POST['password'];

    // Truy vấn kiểm tra thông tin đăng nhập
    $sql = "SELECT * FROM admin WHERE admin_email= '$admin_email' AND admin_pass = '$password'";
    $result = $db->query($sql);

    if ($result->num_rows == 1 ) {
        $error = array();
        // Đăng nhập thành công, lưu thông tin người dùng vào session
        $user = $result->fetch_assoc();
        $_SESSION['admin_name'] = $user['admin_name'];
        $_SESSION['admin_id'] = $user['admin_id'];
        $_SESSION['admin_img'] = $user['admin_img'];
        $_SESSION['role'] = $user['role'];
        if($user['role'] === 'admin' || $user['role'] === 'writer') {
            header('Location: ./view/quantri.php'); // Chuyển hướng đến trang dành cho quản trị viên
        }
        else {
            $error = "Tên đăng nhập hoặc mật khẩu không đúng.";
        }
           
        }
}
?>

<!DOCTYPE html>
<!-- Coding By CodingNepal - www.codingnepalweb.com -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập vào trang quản trị</title>
    <!-- Google Fonts Link For Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0">
    <link rel="stylesheet" href="./public/css/login.css">
    <link rel="icon" href="./public/img/logo.jpg" />
    <script src="script.js" defer></script>
</head>
<body>
    <header>
        <nav class="navbar">
            <span class="hamburger-btn material-symbols-rounded">menu</span>
            <a href="#" class="logo">
                <img src="./public/img/logo.jpg" alt="logo">
                <h2>ShopPhone</h2>
            </a>
            <ul class="links">
                <span class="close-btn material-symbols-rounded">close</span>
            </ul>
            <button class="login-btn">LOG IN</button>
        </nav>
    </header>

    <div class="blur-bg-overlay"></div>
    <div class="form-popup">
        <span class="close-btn material-symbols-rounded">close</span>
        <div class="form-box login">
            <div class="form-details">
                <h2>Trang quản trị</h2>
                <p>Vui lòng đăng nhập bằng thông tin cá nhân của bạn để duy trì kết nối với chúng tôi.</p>
            </div>
            <div class="form-content">
                <h2>LOGIN</h2>
                <?php if(isset($error)){ ?>
                    <p><?=$error?></p>
                <?php } ?>
                <form action="#" method="POST">
                    <div class="input-field">
                        <input type="text" required name="admin_email">
                        <label>Email</label>
                    </div>
                    <div class="input-field">
                        <input type="password" required name="password">
                        <label>Password</label>
                    </div>
                    <button type="submit" name="login">Log In</button>
                </form>
            </div>
        </div>
    </div>
</body>
<script>
    const navbarMenu = document.querySelector(".navbar .links");
const hamburgerBtn = document.querySelector(".hamburger-btn");
const hideMenuBtn = navbarMenu.querySelector(".close-btn");
const showPopupBtn = document.querySelector(".login-btn");
const formPopup = document.querySelector(".form-popup");
const hidePopupBtn = formPopup.querySelector(".close-btn");
const signupLoginLink = formPopup.querySelectorAll(".bottom-link a");

// Show mobile menu
hamburgerBtn.addEventListener("click", () => {
    navbarMenu.classList.toggle("show-menu");
});

// Hide mobile menu
hideMenuBtn.addEventListener("click", () =>  hamburgerBtn.click());

// Show login popup
showPopupBtn.addEventListener("click", () => {
    document.body.classList.toggle("show-popup");
});

// Hide login popup
hidePopupBtn.addEventListener("click", () => showPopupBtn.click());

// Show or hide signup form
signupLoginLink.forEach(link => {
    link.addEventListener("click", (e) => {
        e.preventDefault();
        formPopup.classList[link.id === 'signup-link' ? 'add' : 'remove']("show-signup");
    });
});
</script>
</html>