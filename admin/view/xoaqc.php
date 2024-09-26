<?php 
    include '../modul/class.php';
?>
<?php
$sanpham_class = new Sanpham();
if(!isset($_GET['slide_id']) || ( $_GET['slide_id'])==NULL ){
    echo "<script>window.location = 'danhmuc.php'</script>";
}
else{
    $slide_id = $_GET['slide_id'];

}
    $xoa_slide = $sanpham_class -> xoa_slide($slide_id);

?>