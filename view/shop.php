<?php include './header.php';
 $slide = mysqli_query($conn ,"SELECT * FROM slide ORDER BY slide_id DESC")
?>
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
<?php include './product.php' ?>
<!-- Shop Section End -->

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