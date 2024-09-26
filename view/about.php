<?php include './header.php';
 $slide = mysqli_query($conn ,"SELECT * FROM slide ORDER BY slide_id DESC")
 ?>
<!-- Page Banner Section Start -->
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
<!--Contact Map section End-->

<!--Contact section start-->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <div class="row g-3">
                    <div class="col-10 text-start">
                        <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s"
                            src="../assets/images/about.webp" style="width: 300%; height: auto;">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <h5 class="section-title ff-secondary text-start fw-normal  ">Về chúng tôi</h5>
                <h1 class="mb-4">Chào mừng bạn đến với <i class="fa fa-mobile text-primary me-2"></i> TN Mobile
                </h1>
                <p class="mb-4">Chào mừng đến với TN Mobile - điểm đến của những ước mơ di động! Tại TN Mobile, chúng
                    tôi không chỉ là một cửa hàng điện thoại thông thường, mà còn là ngôi nhà của sự kết nối, sáng tạo
                    và tiện ích.</p>
                <p class="mb-4">Với sứ mệnh mang lại trải nghiệm mua sắm tuyệt vời nhất, chúng tôi tự hào giới thiệu đến
                    quý khách hàng những sản phẩm công nghệ hàng đầu, từ các dòng điện thoại thông minh đến phụ kiện
                    điện tử tiện ích.</p>
                <p class="mb-4">Với đội ngũ nhân viên giàu kinh nghiệm và nhiệt huyết, chúng tôi cam kết mang đến dịch
                    vụ chăm sóc khách hàng tận tâm và chuyên nghiệp nhất. Mỗi khách hàng tại TN Mobile không chỉ là một
                    số trên hóa đơn mà còn là một phần không thể thiếu của cộng đồng mua sắm của chúng tôi.</p>
                <a class="btn btn-primary py-3 px-5 mt-2 fa-border-none" href="#">Xem thêm</a>
            </div>
        </div>
    </div>
</div>


<!--Contact section end-->
<div class="brand-section section pt-90 pt-lg-70 pt-md-65 pt-sm-55 pt-xs-40 pb-100 pb-lg-80 pb-md-70 pb-sm-60 pb-xs-50">
    <div class="container">
        <div class="row">
            <!--Brand Slider start-->
            <h1 style="padding-bottom: 2em;margin-left: 8em;">Các thương hiệu hợp tác với chúng tôi</h1>
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
                <div class="brand col"><a href="#"><img src="assets/images/brands/brand-1.jpg" alt=""></a>
                </div>
                <div class="brand col"><a href="#"><img src="assets/images/brands/brand-2.jpg" alt=""></a>
                </div>
                <div class="brand col"><a href="#"><img src="assets/images/brands/brand-3.png" alt=""></a>
                </div>
                <div class="brand col"><a href="#"><img src="assets/images/brands/brand-4.webp" alt=""></a>
                </div>
                <div class="brand col"><a href="#"><img src="assets/images/brands/brand-5.png" alt=""></a>
                </div>
            </div>
            <!--Brand Slider end-->
        </div>
    </div>
</div>
<?php include './footer.php' ?>