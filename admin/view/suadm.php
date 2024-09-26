<?php
    include './header.php';
    include './menu.php';
    include '../modul/class.php';
?>

<?php
$sanpham_class = new Sanpham();
if(isset($_GET['danhmuc_id']) || ( $_GET['danhmuc_id'])==NULL ){
    $danhmuc_id = $_GET['danhmuc_id'];

}
$get_danhmuc = $sanpham_class -> get_danhmuc($danhmuc_id);
if($get_danhmuc){$result = $get_danhmuc->fetch_assoc();}
?>
<?php
$sanpham_class = new Sanpham();
if($_SERVER['REQUEST_METHOD']==='POST'){
    $danhmuc_name = $_POST['danhmuc_name'];
    $update_sanphambanchay = $sanpham_class ->update_danhmuc($danhmuc_name,$danhmuc_id);
}
?>


<section class="main">
          <div class="df pdt">
            <div class="main-top">
                <h1>Sửa danh mục</h1>
            </div>
          </div>
          <form action="" method="POST" class="form">
                <label for="">Tên danh mục</label>
                <input type="text" required placeholder="Thêm tên danh mục" value="<?=$result['danhmuc_name']?>" name="danhmuc_name" >
                <button type="submit" class="btn" name="themdanhmuc">Thêm</button>
            </form>
</section>
</body>