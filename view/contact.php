<?php include './header.php' ?>
        <!-- Page Banner Section Start -->
        <div class="page-banner-section section bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col">

                        <div class="page-banner text-center">
                            <h1>Liên hệ</h1>
                            <ul class="page-breadcrumb">
                                <li><a href="index.html">Địa chỉ</a></li>
                                <li>Liên hệ</li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!--Contact Map section start-->
        <div class="col-lg google-map hide-on-mobile">
            <iframe class="map" width="1120" height="350" frameborder="0" scrolling="no" marginheight="0"
                marginwidth="0"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1861.4942192935112!2d105.77227138985417!3d21.073123975336046!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3134552defbed8e9%3A0x1584f79c805eb017!2sHanoi%20University%20of%20Mining%20and%20Geology!5e0!3m2!1sen!2s!4v1694652794535!5m2!1sen!2s%22%20width=%22600%22%20height=%22450%22%20style=%22border:0;%22%20allowfullscreen=%22%22%20loading=%22lazy%22%20referrerpolicy=%22no-referrer-when-downgrade%22">
            </iframe>

        </div>
        <!--Contact Map section End-->

        <!--Contact section start-->
        <div
            class="conact-section section pt-30 pt-lg-75 pt-md-65 pt-sm-55 pt-xs-45  pb-100 pb-lg-80 pb-md-70 pb-sm-60 pb-xs-50">
            <div class="container">

                <div class="row">
                    <div class="col-lg-3 col-12">
                        <div class="contact-information">
                            <h3>Thông tin liên hệ</h3>
                            <ul>
                                <li>
                                    <span class="icon"><i class="fa-regular fa-map"></i></span>
                                    <span class="text"><span>Trường đại học Mỏ Địa Chất</span></span>
                                </li>
                                <li>
                                    <span class="icon"><i class="fa-solid fa-phone"></i></span>
                                    <span class="text"><a href="#">0962031002</a></span>
                                </li>
                                <li>
                                    <span class="icon"><i class="fa-regular fa-envelope-open"></i></span>
                                    <span class="text"><a href="#">tuyennguyen10022003@gmail.com</a></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9 col-12">
                        <div class="contact-form-wrap">
                            <h3 class="contact-title">Gửi cho tôi</h3>
                            <form id="contact-form" action="" method="post">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="contact-form-style mb-20">
                                            <input name="con_name" placeholder="Họ*" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="contact-form-style mb-20">
                                            <input name="lastname" placeholder="Tên*" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="contact-form-style mb-20">
                                            <input name="con_email" placeholder="Email*" type="email">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="contact-form-style mb-20">
                                            <input name="subject" placeholder="SDT*" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="contact-form-style">
                                            <textarea name="con_message"
                                                placeholder="Gõ tin nhắn của bạn ở đây.."></textarea>
                                            <button class="btn" type="submit"><span>Gửi tin nhắn</span></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <p class="form-messege"></p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!--Contact section end-->

        <!--Brand section start-->
        <div
            class="brand-section section pt-90 pt-lg-70 pt-md-65 pt-sm-55 pt-xs-40 pb-100 pb-lg-80 pb-md-70 pb-sm-60 pb-xs-50">
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