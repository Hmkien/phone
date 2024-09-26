<?php 
    include '../modul/class.php';
?>
<?php
$sanpham_class = new Sanpham();
if(!isset($_GET['sanpham_id']) || ( $_GET['sanpham_id'])==NULL ){
    echo "<script>window.location = 'danhmuc.php'</script>";
}
else{
    $sanpham_id = $_GET['sanpham_id'];

}
    $xoa_sanpham = $sanpham_class -> xoa_sanpham($sanpham_id);

?>