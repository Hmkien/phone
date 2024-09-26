<?php 
    include '../modul/class.php';
?>
<?php
$sanpham_class = new Sanpham();
if(!isset($_GET['danhmuc_id']) || ( $_GET['danhmuc_id'])==NULL ){
    echo "<script>window.location = 'danhmuc.php'</script>";
}
else{
    $danhmuc_id = $_GET['danhmuc_id'];

}
    $xoa_danhmuc = $sanpham_class -> xoa_danhmuc($danhmuc_id);

?>