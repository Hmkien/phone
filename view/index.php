<?php
    include 'header.php';
    $slide = mysqli_query($conn ,"SELECT * FROM slide ORDER BY slide_id DESC")
?>

<!--slider section start-->
<div class="hero-section section position-relative">
    <div class="tf-element-carousel slider-nav" data-slick-options='{
            "slidesToShow": 1,
            "slidesToScroll": 1,
            "infinite": true,
            "arrows": true,
            "dots": true,
            "autoplay": true,  
            "autoplaySpeed": 1000 
        }' data-slick-responsive='[
            {"breakpoint":768, "settings": {"slidesToShow": 1}},
            {"breakpoint":575, "settings": {"slidesToShow": 1, "arrows": false}}
        ]'>
        <!--Hero Item start-->
        <?php while($kq = mysqli_fetch_array($slide)){ ?>
        <div class="hero-item bg-image" data-bg="../admin/uploading/<?=$kq['slide_img']?>">
            <img style="width: 100%;" src="../admin/uploading/<?=$kq['slide_img']?>" alt="">
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
                <?php include './product.php' ?>
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
<div class="banner-section section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <!-- Single Banner Start -->
                <div class="single-banner mb-30">
                    <a href="#">
                        <img src="./client/assets/images/banner/h1-banner-1.webp" alt="">
                    </a>
                </div>
                <!-- Single Banner End -->
            </div>
            <div class="col-lg-6 col-md-6">
                <!-- Single Banner Start -->
                <div class="single-banner mb-30">
                    <a href="#">
                        <img src="./client/assets/images/banner/h1-banner-2.png" alt="">
                    </a>
                </div>
                <!-- Single Banner End -->
            </div>
            <div class="col-lg-3 col-md-3">
                <!-- Single Banner Start -->
                <div class="single-banner mb-30">
                    <a href="#">
                        <img src="./client/assets/images/banner/h1-banner-3.webp" alt="">
                    </a>
                </div>
                <!-- Single Banner End -->
            </div>
        </div>
    </div>
</div>
<!--Banner section end-->

<!--List Product section start-->
<div class="list-section section pt-60 pt-lg-75 pt-md-65 pt-sm-55 pt-xs-45 pb-30 pb-lg-10 pb-md-0 pb-sm-0 pb-xs-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 mb-40 mb-sm-30 mb-xs-20">
                <div class="row">
                    <div class="col-12">
                        <!--List Product Section Title Start-->
                        <div class="list-product-section-title mb-30">
                            <h2>Đánh giá cao nhất </h2>
                        </div>
                        <!--List Product Section Title End-->
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="tf-element-carousel" data-slick-options='{
                                    "slidesToShow": 1,
                                    "slidesToScroll": 1,
                                    "infinite": true,
                                    "arrows": true,
                                    "prevArrow": {"buttonClass": "slick-btn slick-prev", "iconClass": "fa fa-angle-left" },
                                    "nextArrow": {"buttonClass": "slick-btn slick-next", "iconClass": "fa fa-angle-right" }
                                    }' data-slick-responsive='[
                                    {"breakpoint":768, "settings": {
                                    "slidesToShow": 1,
                                    "arrows": false,
                                    "autoplay": true
                                    }},
                                    {"breakpoint":575, "settings": {
                                    "slidesToShow": 1,
                                    "arrows": false,
                                    "autoplay": true
                                    }}
                                    ]'>
                            <div class="list-product-group">
                                <!-- Single List Product Start -->
                                <div class="single-list-product">
                                    <div class="product-image">
                                        <a href="single-product.html"><img src="../assets/images/product/product-2.jpg"
                                                alt=""></a>
                                    </div>
                                    <div class="product-content">
                                        <h3><a href="single-product.html">Iphone 15 promax </a></h3>
                                        <h4 class="price"><span class="new">€33.890.000đ</span><span class="old"
                                                style=" text-decoration: line-through">34.890.000đ</span></h4>
                                    </div>
                                </div>
                                <!-- Single List Product End -->
                                <!-- Single List Product Start -->
                                <div class="single-list-product">
                                    <div class="product-image">
                                        <a href="single-product.html"><img src="../assets/images/product/product-2.jpg"
                                                alt=""></a>
                                    </div>
                                    <div class="product-content">
                                        <h3><a href="single-product.html">Iphone 15 promax </a></h3>
                                        <h4 class="price"><span class="new">€33.890.000đ</span><span class="old"
                                                style=" text-decoration: line-through">34.890.000đ</span></h4>
                                    </div>
                                </div>
                                <!-- Single List Product End -->
                                <!-- Single List Product Start -->
                                <div class="single-list-product">
                                    <div class="product-image">
                                        <a href="single-product.html"><img src="../assets/images/product/product-3.jpg"
                                                alt=""></a>
                                    </div>
                                    <div class="product-content">
                                        <h3><a href="single-product.html">Iphone 15 promax </a></h3>
                                        <h4 class="price"><span class="new">€33.890.000đ</span><span class="old"
                                                style=" text-decoration: line-through">34.890.000đ</span></h4>
                                    </div>
                                </div>
                                <!-- Single List Product End -->
                            </div>
                            <div class="list-product-group">
                                <!-- Single List Product Start -->
                                <div class="single-list-product">
                                    <div class="product-image">
                                        <a href="single-product.html"><img src="../assets/images/product/product-4.jpg"
                                                alt=""></a>
                                    </div>
                                    <div class="product-content">
                                        <h3><a href="single-product.html">Iphone 15 promax </a></h3>
                                        <h4 class="price"><span class="new">€33.890.000đ</span><span class="old"
                                                style=" text-decoration: line-through">34.890.000đ</span></h4>
                                    </div>
                                </div>
                                <!-- Single List Product End -->
                                <!-- Single List Product Start -->
                                <div class="single-list-product">
                                    <div class="product-image">
                                        <a href="single-product.html"><img src="../assets/images/product/product-5.jpg"
                                                alt=""></a>
                                    </div>
                                    <div class="product-content">
                                        <h3><a href="single-product.html">Iphone 15 promax </a></h3>
                                        <h4 class="price"><span class="new">€33.890.000đ</span><span class="old"
                                                style=" text-decoration: line-through">34.890.000đ</span></h4>
                                    </div>
                                </div>
                                <!-- Single List Product End -->
                                <!-- Single List Product Start -->
                                <div class="single-list-product">
                                    <div class="product-image">
                                        <a href="single-product.html"><img src="../assets/images/product/product-6.jpg"
                                                alt=""></a>
                                    </div>
                                    <div class="product-content">
                                        <h3><a href="single-product.html">Iphone 15 promax </a></h3>
                                        <h4 class="price"><span class="new">€33.890.000đ</span><span class="old"
                                                style=" text-decoration: line-through">34.890.000đ</span></h4>
                                    </div>
                                </div>
                                <!-- Single List Product End -->
                            </div>
                            <div class="list-product-group">
                                <!-- Single List Product Start -->
                                <div class="single-list-product">
                                    <div class="product-image">
                                        <a href="single-product.html"><img src="../assets/images/product/product-7.jpg"
                                                alt=""></a>
                                    </div>
                                    <div class="product-content">
                                        <h3><a href="single-product.html">Iphone 15 promax </a></h3>
                                        <h4 class="price"><span class="new">€33.890.000đ</span><span class="old"
                                                style=" text-decoration: line-through">34.890.000đ</span></h4>
                                    </div>
                                </div>
                                <!-- Single List Product End -->
                                <!-- Single List Product Start -->
                                <div class="single-list-product">
                                    <div class="product-image">
                                        <a href="single-product.html"><img src="../assets/images/product/product-8.jpg"
                                                alt=""></a>
                                    </div>
                                    <div class="product-content">
                                        <h3><a href="single-product.html">Iphone 15 promax </a></h3>
                                        <h4 class="price"><span class="new">€33.890.000đ</span><span class="old"
                                                style=" text-decoration: line-through">34.890.000đ</span></h4>
                                    </div>
                                </div>
                                <!-- Single List Product End -->
                                <!-- Single List Product Start -->
                                <div class="single-list-product">
                                    <div class="product-image">
                                        <a href="single-product.html"><img src="../assets/images/product/product-9.jpg"
                                                alt=""></a>
                                    </div>
                                    <div class="product-content">
                                        <h3><a href="single-product.html">Iphone 15 promax </a></h3>
                                        <h4 class="price"><span class="new">€33.890.000đ</span><span class="old"
                                                style=" text-decoration: line-through">34.890.000đ</span></h4>
                                    </div>
                                </div>
                                <!-- Single List Product End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 mb-40 mb-sm-30 mb-xs-20">
                <div class="row">
                    <div class="col-12">
                        <!--List Product Section Title Start-->
                        <div class="list-product-section-title mb-30">
                            <h2>On-sale</h2>
                        </div>
                        <!--List Product Section Title End-->
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="tf-element-carousel" data-slick-options='{
                                    "slidesToShow": 1,
                                    "slidesToScroll": 1,
                                    "infinite": true,
                                    "arrows": true,
                                    "prevArrow": {"buttonClass": "slick-btn slick-prev", "iconClass": "fa fa-angle-left" },
                                    "nextArrow": {"buttonClass": "slick-btn slick-next", "iconClass": "fa fa-angle-right" }
                                    }' data-slick-responsive='[
                                    {"breakpoint":768, "settings": {
                                    "slidesToShow": 1,
                                    "arrows": false,
                                    "autoplay": true
                                    }},
                                    {"breakpoint":575, "settings": {
                                    "slidesToShow": 1,
                                    "arrows": false,
                                    "autoplay": true
                                    }}
                                    ]'>
                            <div class="list-product-group">
                                <!-- Single List Product Start -->
                                <div class="single-list-product">
                                    <div class="product-image">
                                        <a href="single-product.html"><img src="../assets/images/product/product-7.jpg"
                                                alt=""></a>
                                    </div>
                                    <div class="product-content">
                                        <h3><a href="single-product.html">Iphone 15 promax </a></h3>
                                        <h4 class="price"><span class="new">€33.890.000đ</span><span class="old"
                                                style=" text-decoration: line-through">34.890.000đ</span></h4>
                                    </div>
                                </div>
                                <!-- Single List Product End -->
                                <!-- Single List Product Start -->
                                <div class="single-list-product">
                                    <div class="product-image">
                                        <a href="single-product.html"><img src="../assets/images/product/product-8.jpg"
                                                alt=""></a>
                                    </div>
                                    <div class="product-content">
                                        <h3><a href="single-product.html">Iphone 15 promax </a></h3>
                                        <h4 class="price"><span class="new">€33.890.000đ</span><span class="old"
                                                style=" text-decoration: line-through">34.890.000đ</span></h4>
                                    </div>
                                </div>
                                <!-- Single List Product End -->
                                <!-- Single List Product Start -->
                                <div class="single-list-product">
                                    <div class="product-image">
                                        <a href="single-product.html"><img src="../assets/images/product/product-9.jpg"
                                                alt=""></a>
                                    </div>
                                    <div class="product-content">
                                        <h3><a href="single-product.html">Iphone 15 promax </a></h3>
                                        <h4 class="price"><span class="new">€33.890.000đ</span><span class="old"
                                                style=" text-decoration: line-through">34.890.000đ</span></h4>
                                    </div>
                                </div>
                                <!-- Single List Product End -->
                            </div>
                            <div class="list-product-group">
                                <!-- Single List Product Start -->
                                <div class="single-list-product">
                                    <div class="product-image">
                                        <a href="single-product.html"><img src="../assets/images/product/product-1.jpg"
                                                alt=""></a>
                                    </div>
                                    <div class="product-content">
                                        <h3><a href="single-product.html">Iphone 15 promax </a></h3>
                                        <h4 class="price"><span class="new">€33.890.000đ</span><span class="old"
                                                style=" text-decoration: line-through">34.890.000đ</span></h4>
                                    </div>
                                </div>
                                <!-- Single List Product End -->
                                <!-- Single List Product Start -->
                                <div class="single-list-product">
                                    <div class="product-image">
                                        <a href="single-product.html"><img src="../assets/images/product/product-2.jpg"
                                                alt=""></a>
                                    </div>
                                    <div class="product-content">
                                        <h3><a href="single-product.html">Iphone 15 promax </a></h3>
                                        <h4 class="price"><span class="new">€33.890.000đ</span><span class="old"
                                                style=" text-decoration: line-through">34.890.000đ</span></h4>
                                    </div>
                                </div>
                                <!-- Single List Product End -->
                                <!-- Single List Product Start -->
                                <div class="single-list-product">
                                    <div class="product-image">
                                        <a href="single-product.html"><img src="../assets/images/product/product-3.jpg"
                                                alt=""></a>
                                    </div>
                                    <div class="product-content">
                                        <h3><a href="single-product.html">Iphone 15 promax </a></h3>
                                        <h4 class="price"><span class="new">€33.890.000đ</span><span class="old"
                                                style=" text-decoration: line-through">34.890.000đ</span></h4>
                                    </div>
                                </div>
                                <!-- Single List Product End -->
                            </div>
                            <div class="list-product-group">
                                <!-- Single List Product Start -->
                                <div class="single-list-product">
                                    <div class="product-image">
                                        <a href="single-product.html"><img src="../assets/images/product/product-4.jpg"
                                                alt=""></a>
                                    </div>
                                    <div class="product-content">
                                        <h3><a href="single-product.html">Iphone 15 promax </a></h3>
                                        <h4 class="price"><span class="new">€33.890.000đ</span><span class="old"
                                                style=" text-decoration: line-through">34.890.000đ</span></h4>
                                    </div>
                                </div>
                                <!-- Single List Product End -->
                                <!-- Single List Product Start -->
                                <div class="single-list-product">
                                    <div class="product-image">
                                        <a href="single-product.html"><img src="../assets/images/product/product-5.jpg"
                                                alt=""></a>
                                    </div>
                                    <div class="product-content">
                                        <h3><a href="single-product.html">Iphone 15 promax </a></h3>
                                        <h4 class="price"><span class="new">€33.890.000đ</span><span class="old"
                                                style=" text-decoration: line-through">34.890.000đ</span></h4>
                                    </div>
                                </div>
                                <!-- Single List Product End -->
                                <!-- Single List Product Start -->
                                <div class="single-list-product">
                                    <div class="product-image">
                                        <a href="single-product.html"><img src="../assets/images/product/product-6.jpg"
                                                alt=""></a>
                                    </div>
                                    <div class="product-content">
                                        <h3><a href="single-product.html">Iphone 15 promax </a></h3>
                                        <h4 class="price"><span class="new">€33.890.000đ</span><span class="old"
                                                style=" text-decoration: line-through">34.890.000đ</span></h4>
                                    </div>
                                </div>
                                <!-- Single List Product End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 mb-40 mb-sm-30 mb-xs-20">
                <div class="row">
                    <div class="col-12">
                        <!--List Product Section Title Start-->
                        <div class="list-product-section-title mb-30">
                            <h2>Thịnh hành</h2>
                        </div>
                        <!--List Product Section Title End-->
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="tf-element-carousel" data-slick-options='{
                                    "slidesToShow": 1,
                                    "slidesToScroll": 1,
                                    "infinite": true,
                                    "arrows": true,
                                    "prevArrow": {"buttonClass": "slick-btn slick-prev", "iconClass": "fa fa-angle-left" },
                                    "nextArrow": {"buttonClass": "slick-btn slick-next", "iconClass": "fa fa-angle-right" }
                                    }' data-slick-responsive='[
                                    {"breakpoint":768, "settings": {
                                    "slidesToShow": 1,
                                    "arrows": false,
                                    "autoplay": true
                                    }},
                                    {"breakpoint":575, "settings": {
                                    "slidesToShow": 1,
                                    "arrows": false,
                                    "autoplay": true
                                    }}
                                    ]'>
                            <div class="list-product-group">
                                <!-- Single List Product Start -->
                                <div class="single-list-product">
                                    <div class="product-image">
                                        <a href="single-product.html"><img src="../assets/images/product/product-4.jpg"
                                                alt=""></a>
                                    </div>
                                    <div class="product-content">
                                        <h3><a href="single-product.html">Iphone 15 promax </a></h3>
                                        <h4 class="price"><span class="new">€33.890.000đ</span><span class="old"
                                                style=" text-decoration: line-through">34.890.000đ</span></h4>
                                    </div>
                                </div>
                                <!-- Single List Product End -->
                                <!-- Single List Product Start -->
                                <div class="single-list-product">
                                    <div class="product-image">
                                        <a href="single-product.html"><img src="../assets/images/product/product-5.jpg"
                                                alt=""></a>
                                    </div>
                                    <div class="product-content">
                                        <h3><a href="single-product.html">Iphone 15 promax </a></h3>
                                        <h4 class="price"><span class="new">€33.890.000đ</span><span class="old"
                                                style=" text-decoration: line-through">34.890.000đ</span></h4>
                                    </div>
                                </div>
                                <!-- Single List Product End -->
                                <!-- Single List Product Start -->
                                <div class="single-list-product">
                                    <div class="product-image">
                                        <a href="single-product.html"><img src="../assets/images/product/product-6.jpg"
                                                alt=""></a>
                                    </div>
                                    <div class="product-content">
                                        <h3><a href="single-product.html">Iphone 15 promax </a></h3>
                                        <h4 class="price"><span class="new">€33.890.000đ</span><span class="old"
                                                style=" text-decoration: line-through">34.890.000đ</span></h4>
                                    </div>
                                </div>
                                <!-- Single List Product End -->
                            </div>
                            <div class="list-product-group">
                                <!-- Single List Product Start -->
                                <div class="single-list-product">
                                    <div class="product-image">
                                        <a href="single-product.html"><img src="../assets/images/product/product-7.jpg"
                                                alt=""></a>
                                    </div>
                                    <div class="product-content">
                                        <h3><a href="single-product.html">Iphone 15 promax </a></h3>
                                        <h4 class="price"><span class="new">€33.890.000đ</span><span class="old"
                                                style=" text-decoration: line-through">34.890.000đ</span></h4>
                                    </div>
                                </div>
                                <!-- Single List Product End -->
                                <!-- Single List Product Start -->
                                <div class="single-list-product">
                                    <div class="product-image">
                                        <a href="single-product.html"><img src="../assets/images/product/product-8.jpg"
                                                alt=""></a>
                                    </div>
                                    <div class="product-content">
                                        <h3><a href="single-product.html">Iphone 15 promax </a></h3>
                                        <h4 class="price"><span class="new">€33.890.000đ</span><span class="old"
                                                style=" text-decoration: line-through">34.890.000đ</span></h4>
                                    </div>
                                </div>
                                <!-- Single List Product End -->
                                <!-- Single List Product Start -->
                                <div class="single-list-product">
                                    <div class="product-image">
                                        <a href="single-product.html"><img src="../assets/images/product/product-9.jpg"
                                                alt=""></a>
                                    </div>
                                    <div class="product-content">
                                        <h3><a href="single-product.html">Iphone 15 promax </a></h3>
                                        <h4 class="price"><span class="new">€33.890.000đ</span><span class="old"
                                                style=" text-decoration: line-through">34.890.000đ</span></h4>
                                    </div>
                                </div>
                                <!-- Single List Product End -->
                            </div>
                            <div class="list-product-group">
                                <!-- Single List Product Start -->
                                <div class="single-list-product">
                                    <div class="product-image">
                                        <a href="single-product.html"><img src="../assets/images/product/product-1.jpg"
                                                alt=""></a>
                                    </div>
                                    <div class="product-content">
                                        <h3><a href="single-product.html">Iphone 15 promax </a></h3>
                                        <h4 class="price"><span class="new">€33.890.000đ</span><span class="old"
                                                style=" text-decoration: line-through">34.890.000đ</span></h4>
                                    </div>
                                </div>
                                <!-- Single List Product End -->
                                <!-- Single List Product Start -->
                                <div class="single-list-product">
                                    <div class="product-image">
                                        <a href="single-product.html"><img src="../assets/images/product/product-2.jpg"
                                                alt=""></a>
                                    </div>
                                    <div class="product-content">
                                        <h3><a href="single-product.html">Iphone 15 promax </a></h3>
                                        <h4 class="price"><span class="new">€33.890.000đ</span><span class="old"
                                                style=" text-decoration: line-through">34.890.000đ</span></h4>
                                    </div>
                                </div>
                                <!-- Single List Product End -->
                                <!-- Single List Product Start -->
                                <div class="single-list-product">
                                    <div class="product-image">
                                        <a href="single-product.html"><img src="../assets/images/product/product-3.jpg"
                                                alt=""></a>
                                    </div>
                                    <div class="product-content">
                                        <h3><a href="single-product.html">Iphone 15 promax </a></h3>
                                        <h4 class="price"><span class="new">€33.890.000đ</span><span class="old"
                                                style=" text-decoration: line-through">34.890.000đ</span></h4>
                                    </div>
                                </div>
                                <!-- Single List Product End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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