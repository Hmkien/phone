<div class="shop-section section pt-30 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-70 pb-lg-50 pb-md-40 pb-sm-60 pb-xs-50">
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
                                                        // BƯỚC 2: TÌM TỔNG SỐ RECORDS
                                                        $result = mysqli_query($conn, 'select count(sanpham_id) as total from sanpham');
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
                                                        $result = mysqli_query($conn, "SELECT * FROM sanpham LIMIT $start, $limit");
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
                                        echo '<li><a href="index.php?page='.($current_page-1).'"><i class="fa fa-angle-left"></i></a></li>';
                                    }
                        
                                    // Lặp khoảng giữa
                                    for ($i = 1; $i <= $total_page; $i++){
                                        // Nếu là trang hiện tại thì hiển thị thẻ span
                                        // ngược lại hiển thị thẻ a
                                        if ($i == $current_page){
                                            echo '<li class="active"><a href="#">'.$i.'</a></li> ';
                                        }
                                        else{
                                            echo '<li><a href="index.php?page='.$i.'">'.$i.'</a></li>';
                                        }
                                    }
                        
                                    // nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
                                    if ($current_page < $total_page && $total_page > 1){
                                        echo '<li><a href="index.php?page='.($current_page+1).'"><i class="fa fa-angle-right"></i></a></li>';
                                    }
                                ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>