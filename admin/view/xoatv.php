<?php 
    include '../modul/class.php';
?>
<?php
$sanpham_class = new Sanpham();
if(!isset($_GET['admin_id']) || ( $_GET['admin_id'])==NULL ){
    echo "<script>window.location = 'thanhvien.php'</script>";
}
else{
    $admin_id = $_GET['admin_id'];

}
    $xoa_danhmuc = $sanpham_class -> xoa_danhmuc($danhmuc_id);

?>