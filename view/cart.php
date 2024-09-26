<?php
include './header.php';
if(!isset($_SESSION["user_name"]) || empty($_SESSION["user_name"])){
    echo '<script>
    alert("Bạn chưa đăng nhập. Vui lòng đăng nhập");
    window.location.href = "../user/login.php"; 
    </script>';
}
include '../admin/modul/config2.php';
if (empty($_SESSION["cart"])) {
    $_SESSION["cart"] = array("");
}
if (isset($_GET['action']) && isset($_SESSION['cart'])) {
    $error = false;
    function update_cart($add = false)
    {
        foreach ($_POST['quantity'] as $sanpham_id => $quantity) {
            if ($quantity == 0) {
                unset($_SESSION["cart"][$sanpham_id]);
            } else {
                if ($add) {
                    $_SESSION["cart"][$sanpham_id] += $quantity;
                } else {
                    $_SESSION["cart"][$sanpham_id] = $quantity;
                }
            }


        }

    }
    switch ($_GET['action']) {
        case 'add':
            update_cart(true);
            echo '<script> alert("Thêm sản phẩm thành công!") </script>';
            echo '<script>
                    // Mã JavaScript ở đây
                   
                    window.location.href = "cart.php"; // Ví dụ về chuyển hướng trang bằng JavaScript
                </script>';
            break;
        case 'delete':
            if (isset($_GET['sanpham_id'])) {
                unset($_SESSION['cart'][$_GET['sanpham_id']]);
            }

            echo '<script>
                    // Mã JavaScript ở đây
                    window.location.href = "cart.php"; // Ví dụ về chuyển hướng trang bằng JavaScript
                </script>';
            break;
        case 'submit':
            if (isset($_POST['order_submit'])) {
                if (empty($_POST['Name'])) {
                    $error = 'Bạn chưa nhập đủ thông tin';
                } elseif (empty($_POST['Phone'])) {
                    $error = 'Bạn chưa nhập số điện thoại';
                } elseif (empty($_POST['Address'])) {
                    $error = 'Bạn chưa nhập địa chỉ giao hàng';
                }
                if ($error == false && !empty($_POST['quantity'])) {
                    $product = mysqli_query($conn, "SELECT * FROM `sanpham` WHERE `sanpham_id` IN (" . implode(",", array_keys($_POST["quantity"])) . ")");
                    $total = 0;
                    $orderProduct = array();
                    while ($row = mysqli_fetch_assoc($product)) {
                        $orderProduct[] = $row;

                    }
                    $total = $_POST['totleCuoi'];
                    $inserOrder = mysqli_query($conn, " 
                    INSERT INTO `orders` (`order_id`, `order_name`, `order_phone`, `order_address`, `order_note`, `order_total`,`created_time`)
                     VALUES (NULL, '" . $_POST['Name'] . "', '" . $_POST['Phone'] . "', '" . $_POST['Address'] . "', '" . $_POST['note'] . "', '" . $total . "', '" . time() . "')
                    ");
                    $orderId = $conn->insert_id;
                    $insertString = "";
                    foreach ($orderProduct as $key => $product) {
                        $insertString .= "( NULL, '" . $orderId . "', '" . $product['sanpham_id'] . "', '" . $_POST['quantity'][$product['sanpham_id']] . "', '" . $product['sanpham_gia'] . "')";
                        if ($key != count($orderProduct) - 1) {
                            $insertString .= ",";
                        }
                    }
                    $insertOrderId = mysqli_query($conn, " 
                    INSERT INTO `order_detail` (`order_detail_id`, `order_id`, `sanpham_id`, `order_detai_quantity`, `order_detai_price`)
                     VALUES " . $insertString . "
                    ");
                    unset($_SESSION["cart"]);
                    echo '<script> alert("Thanh toán thành công!") </script>';
                    echo '<script>
                    // Mã JavaScript ở đây
                        window.location.href = "index.php"; // Ví dụ về chuyển hướng trang bằng JavaScript
                    </script>';
                }
            }
            break;
        default:
            // Xử lý mặc định (nếu cần)
            break;
    }
}
if (!empty($_SESSION["cart"])) {
    $product = mysqli_query($conn, "SELECT * FROM `sanpham` WHERE `sanpham_id` IN (" . implode(",", array_keys($_SESSION["cart"])) . ")");
    $cartItemCount = count($_SESSION["cart"]) - 1;
} else {
    // Nếu không có giỏ hàng, số lượng mục là 0
    $cartItemCount = 0;
}

?>
<form action="./cart.php?action=submit" method="POST" class="checkout-form">
    <div class="page-banner-section section bg-gray">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="page-banner text-center">
                        <h1>Giỏ hàng</h1>
                        <ul class="page-breadcrumb">
                            <li><a href="index.html">Trang chủ</a></li>
                            <li>Giỏ hàng</li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--Cart section start-->
    <div
        class="cart-section section pt-30 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50  pb-70 pb-lg-50 pb-md-40 pb-sm-30 pb-xs-20">
        <div class="container-fluid">
            <div class="row">

                <div class="col-9">
                    <!-- Cart Table -->
                    <div class="cart-table table-responsive mb-30">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="pro-thumbnail">Ảnh</th>
                                    <th class="pro-title">Tên máy</th>
                                    <th class="pro-price">Giá</th>
                                    <th class="pro-quantity">Số lượng</th>
                                    <th class="pro-subtotal">Thành tiền</th>
                                    <th class="pro-remove">Xóa</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if (!empty($product)) {
                                    $tong = 0;
                                    $thanhtien = 0;
                                    while ($kq = mysqli_fetch_array($product)) {
                                        $tong = $kq['sanpham_gia'] * $_SESSION["cart"][$kq["sanpham_id"]];
                                        $thanhtien += $tong;
                                        ?>
                                <tr>
                                    <td class="pro-thumbnail"><a href="#"><img
                                                src="../admin/uploading/<?= $kq['sanpham_img'] ?>" alt="Product"></a>
                                    </td>
                                    <td class="pro-title"><a
                                            href="./single-product.php?sanpham_id=<?= $kq['sanpham_id'] ?>">
                                            <?= $kq['sanpham_name'] ?>
                                        </a></td>
                                    <td class="pro-price"><span>
                                            <?= number_format($kq['sanpham_gia'], 0, ",", ".") ?>.000đ
                                        </span></td>
                                    <td class="pro-quantity">
                                        <div class="pro-qty">
                                            <input type="text" value="<?= $_SESSION["cart"][$kq["sanpham_id"]] ?>"
                                                name="quantity[<?= $kq['sanpham_id'] ?>]">
                                        </div>
                                    </td>
                                    <td class="pro-subtotal"><span>
                                            <?= number_format($tong, 0, ",", ".") ?>.000đ
                                        </span></td>
                                    <td class="pro-remove">
                                        <a href="./cart.php?action=delete&sanpham_id=<?= $kq['sanpham_id'] ?>">
                                            <i class="fa fa-trash-o"></i>
                                        </a>
                                    </td>
                                </tr>
                                <?php }
                                } ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="4" class="text-right">
                                        <h4 style="line-height: 45px;">Tổng:</h4>
                                    </td>
                                    <td class="text-center">
                                        <input name="totleCuoi"
                                            style="line-height: 45px;border: none;font-size: 16px;font-weight: 700;padding:0;"
                                            value="<?= number_format($thanhtien, 0, ",", ".") ?>.000đ">
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>

                    <div class="col-lg-5">
                        <div class="row">

                            <!-- Cart Total -->
                            <div class="col-12 mb-60">

                                <h4 class="checkout-title">Tổng số giỏ hàng</h4>

                                <div class="checkout-cart-total">

                                    <h4>Sản phẩm <span>Tổng cộng</span></h4>

                                    <ul>
                                        <li> <span> </span></li>
                                        <li> <span> </span></li>
                                        <li> <span> </span></li>
                                        <li> <span> </span></li>
                                    </ul>

                                    <p>Tổng phụ <span>$</span></p>
                                    <p>Phí vận chuyển <span>$</span></p>

                                    <h4>Tổng cộng <span>$</span></h4>

                                </div>

                            </div>
                        </div>
                    </div>


                </div>
                <div class="col-3">
                    <!-- Checkout Form Start-->
                    <div class="row row-40">
                        <div class="col-12">

                            <!-- Billing Address -->
                            <div id="billing-form" class="mb-10">
                                <h4 class="checkout-title">Địa chỉ thanh toán</h4>
                                <?php if (isset($error)) { ?>
                                <p>
                                    <?= $error ?>
                                </p>
                                <?php } ?>
                                <div class="row">
                                    <div class="col-md-12 col-12 mb-5">
                                        <label>Họ và tên*</label>
                                        <input type="text" name="Name" value="<?= $_SESSION['user_name'] ?>"
                                            placeholder="Họ và tên">
                                    </div>
                                    <div class="col-md-12 col-12 mb-5">
                                        <label>Số điện thoại*</label>
                                        <input type="text" name="Phone" placeholder="Số điện thoại">
                                    </div>
                                    <div class="col-12 mb-5">
                                        <label>Địa chỉ*</label>
                                        <input type="text" name="Address" placeholder="Nhập địa chỉ">
                                    </div>
                                    <div class="col-12 mb-5">
                                        <label>Ghi chus*</label>
                                        <textarea style="width:70%;" name="note" id="note" placeholder="Ghi chú"
                                            class="field__input" data-bind="note"></textarea>
                                    </div>
                                    <div class="col-12 mb-5">
                                        <div class="check-box">
                                            <input type="checkbox" id="shiping_address" data-shipping>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cart-summary-button">
                                <button type="submit" style="color: #fff;" name="order_submit" class="btn">Thanh
                                    toán</button>
                            </div>
                        </div>
                    </div>
</form>
</div>
</div>
</div>
</div>
<!--Cart section end-->

<!--Brand section start-->
<div class="brand-section section pt-90 pt-lg-70 pt-md-65 pt-sm-55 pt-xs-40 pb-100 pb-lg-80 pb-md-70 pb-sm-60 pb-xs-50">
    <div class="container">
        <div class="row">
            <!--Brand Slider start-->
            <div class="tf-element-carousel section" data-slick-options='{
                    "slidesToShow": 5,
                    "slidesToScroll": 1,
                    "infinite": true,
                    "arrows": false,
                    "autoplay": true
                    }' data-slick-responsive='[
                    {"breakpoint":1199, "settings": {
                    "slidesToShow": 4
                    }},
                    {"breakpoint":992, "settings": {
                    "slidesToShow": 4
                    }},
                    {"breakpoint":768, "settings": {
                    "slidesToShow": 3
                    }},
                    {"breakpoint":576, "settings": {
                    "slidesToShow": 1
                    }}
                    ]'>
                <div class="brand col"><a href="#"><img src="../assets/images/brands/brand-1.jpg" alt=""></a>
                </div>
                <div class="brand col"><a href="#"><img src="../assets/images/brands/brand-2.jpg" alt=""></a>
                </div>
                <div class="brand col"><a href="#"><img src="../assets/images/brands/brand-3.png" alt=""></a>
                </div>
                <div class="brand col"><a href="#"><img src="../assets/images/brands/brand-4.webp" alt=""></a>
                </div>
                <div class="brand col"><a href="#"><img src="../assets/images/brands/brand-5.png" alt=""></a>
                </div>
            </div>
            <!--Brand Slider end-->
        </div>
    </div>
</div>
<!--Brand section end-->
<?php include './footer.php' ?>