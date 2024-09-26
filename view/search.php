<?php
    include './header.php';
    $slide = mysqli_query($conn ,"SELECT * FROM slide ORDER BY slide_id DESC")
?>

<!--slider section start-->
<div class="hero-section section position-relative">
    <div class="tf-element-carousel slider-nav" data-slick-options='{
                "slidesToShow": 1,
                "slidesToScroll": 1,
                "infinite": true,
                "arrows": true,
                "dots": true
            }' data-slick-responsive='[
                {"breakpoint":768, "settings": {
                "slidesToShow": 1
                }},
                {"breakpoint":575, "settings": {
                "slidesToShow": 1,
                "arrows": false,
                "autoplay": true
                }}
            ]'>
        <!--Hero Item start-->
        <?php
                    while($kq = mysqli_fetch_array($slide)){
                ?>
        <div class="hero-item bg-image" data-bg="../admin/uploading/<?=$kq['slide_img']?>">
            <img style="width: 100%;" src="../admin/uploading/<?=$kq['slide_img']?>" alt="">
            <!-- <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="hero-content-2 color-2">
                                    <h2>view our</h2>
                                    <h1>Women's hair</h1>
                                    <h3>Products now</h3>
                                    <a href="shop.html">shop now</a>
                                </div>
                            </div>
                        </div>
                    </div> -->
        </div>
        <?php } ?>
        <!--Hero Item end-->
    </div>
</div>
<!--slider section end-->

<!-- Feature Section Start -->
<div class="feature-section section pt-100 pt-md-75 pt-sm-60 pt-xs-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <!-- Single Faeture Start -->
                <div class="single-feature feature-style-2 mb-30">
                    <div class="icon">
                        <i class="fa-truck fa"></i>
                    </div>
                    <div class="content">
                        <h2>Miễn phí vận chuyển</h2>
                        <p>Với đơn hàng trên 1.000.000đ</p>
                    </div>
                </div>
                <!-- Single Faeture End -->
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <!-- Single Faeture Start -->
                <div class="single-feature feature-style-2 mb-30">
                    <div class="icon">
                        <i class="fa fa-undo"></i>
                    </div>
                    <div class="content">
                        <h2>30 ngày đổi trả miễn phí</h2>
                        <p>Hoàn tiền 100%</p>
                    </div>
                </div>
                <!-- Single Faeture End -->
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <!-- Single Faeture Start -->
                <div class="single-feature feature-style-2 mb-30 br-0">
                    <div class="icon">
                        <i class="fa fa-thumbs-o-up"></i>
                    </div>
                    <div class="content">
                        <h2>Thành viên mua sắm an toàn</h2>
                        <p>Đảm bảo mua sắm an toàn</p>
                    </div>
                </div>
                <!-- Single Faeture End -->
            </div>
        </div>
    </div>
</div>
<!-- Feature Section End -->

<!--Product section start-->
<div class="product-section section pt-70 pt-lg-45 pt-md-40 pt-sm-30 pt-xs-15">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="product-tab-menu mb-40 mb-xs-20">
                    <ul class="nav">
                        <li><a class="active" data-toggle="tab" href="#products"> Sản phẩm mới</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div
                    class="shop-section section pt-30 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-70 pb-lg-50 pb-md-40 pb-sm-60 pb-xs-50">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 order-lg-2 order-1">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="shop-product">
                                            <div id="myTabContent-2" class="tab-content">
                                                <div id="grid" class="tab-pane fade active show">
                                                    <div class="product-grid-view">
                                                        <div class="row">
                                                            <?php
                                                                            if(isset($_POST['btn_search'])){
                                                                            $name_product = $_POST['name_product'];
                                                                            // BƯỚC 2: TÌM TỔNG SỐ RECORDS
                                                                            $result = mysqli_query($conn, "select count(sanpham_id) as total from sanpham where sanpham_name like '%$name_product%'");
                                                                            $row = mysqli_fetch_assoc($result);
                                                                            $total_records = $row['total'];
                                                                    
                                                                            // BƯỚC 3: TÌM LIMIT VÀ CURRENT_PAGE
                                                                            $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
                                                                            $limit = 6;
                                                                    
                                                                            // BƯỚC 4: TÍNH TOÁN TOTAL_PAGE VÀ START
                                                                            // tổng số trang
                                                                            $total_page = ceil($total_records / $limit);
                                                                    
                                                                            // Giới hạn current_page trong khoảng 1 đến total_page
                                                                            if ($current_page > $total_page){
                                                                                $current_page = $total_page;
                                                                            }
                                                                            else if ($current_page < 1){
                                                                                $current_page = 1;
                                                                            }
                                                                    
                                                                            // Tìm Start
                                                                            $start = ($current_page - 1) * $limit;
                                                                    
                                                                            // BƯỚC 5: TRUY VẤN LẤY DANH SÁCH TIN TỨC
                                                                            // Có limit và start rồi thì truy vấn CSDL lấy danh sách tin tức
                                                                            
                                                                            $result = mysqli_query($conn, "SELECT * FROM sanpham where sanpham_name LIKE '%$name_product%' LIMIT $start, $limit");
                                                                            if($result){
                                                                                while($kq = mysqli_fetch_array($result)){
                                                                        ?>
                                                            <div class="col-lg-4 col-md-6 col-sm-6">
                                                                <!-- Single Product Start -->
                                                                <div class="single-product mb-30">
                                                                    <div class="product-img">
                                                                        <a
                                                                            href="./single-product.php?sanpham_id=<?=$kq['sanpham_id']?>">
                                                                            <img src="../admin/uploading/<?=$kq['sanpham_img']?>"
                                                                                alt="">
                                                                        </a>
                                                                    </div>
                                                                    <div class="product-content">
                                                                        <h3><a
                                                                                href="./single-product.php?sanpham_id=<?=$kq['sanpham_id']?>"><?=$kq['sanpham_name']?></a>
                                                                        </h3>
                                                                        <div class="ratting">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </div>
                                                                        <h4 class="price"><span class="old">
                                                                                <td><?=number_format($kq['sanpham_gia'] , 0 , "," , ".")?>.000đ
                                                                                </td>
                                                                            </span></h4>
                                                                    </div>
                                                                </div>
                                                                <!-- Single Product End -->
                                                            </div>
                                                            <?php } } ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-30 mb-sm-40 mb-xs-30">
                                    <div class="col">
                                        <!-- <ul class="page-pagination">
                                                        <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                                        <li class="active"><a href="#">01</a></li>
                                                        <li><a href="#">02</a></li>
                                                        <li><a href="#">03</a></li>
                                                        <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                                    </ul> -->
                                        <ul class="page-pagination">
                                            <?php 
                                                        // PHẦN HIỂN THỊ PHÂN TRANG
                                                        // BƯỚC 7: HIỂN THỊ PHÂN TRANG
                                            
                                                        // nếu current_page > 1 và total_page > 1 mới hiển thị nút prev
                                                        if ($current_page > 1 && $total_page > 1){
                                                            echo '<li><a href="search.php?page='.($current_page-1).'"><i class="fa fa-angle-left"></i></a></li>';
                                                        }
                                            
                                                        // Lặp khoảng giữa
                                                        for ($i = 1; $i <= $total_page; $i++){
                                                            // Nếu là trang hiện tại thì hiển thị thẻ span
                                                            // ngược lại hiển thị thẻ a
                                                            if ($i == $current_page){
                                                                echo '<li class="active"><a href="#">'.$i.'</a></li> ';
                                                            }
                                                            else{
                                                                echo '<li><a href="search.php?page='.$i.'">'.$i.'</a></li>';
                                                            }
                                                        }
                                            
                                                        // nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
                                                        if ($current_page < $total_page && $total_page > 1){
                                                            echo '<li><a href="search.php?page='.($current_page+1).'"><i class="fa fa-angle-right"></i></a></li>';
                                                        }
                                                    }
                                                    ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
</div>
<!--Product section end-->

<!--Banner section start-->
<div class="banner-section section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <!-- Single Banner Start -->
                <div class="single-banner mb-30">
                    <a href="#">
                        <img src="../assets/images/banner/h1-banner-1.webp" alt="">
                    </a>
                </div>
                <!-- Single Banner End -->
            </div>
            <div class="col-lg-6 col-md-6">
                <!-- Single Banner Start -->
                <div class="single-banner mb-30">
                    <a href="#">
                        <img src="../assets/images/banner/h1-banner-2.png" alt="">
                    </a>
                </div>
                <!-- Single Banner End -->
            </div>
            <div class="col-lg-3 col-md-3">
                <!-- Single Banner Start -->
                <div class="single-banner mb-30">
                    <a href="#">
                        <img src="../assets/images/banner/h1-banner-3.webp" alt="">
                    </a>
                </div>
                <!-- Single Banner End -->
            </div>
        </div>
    </div>
</div>
<!--Banner section end-->

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