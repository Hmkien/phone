<?php
ob_start();
?>
<?php
include '../modul/database.php';
class Sanpham
{


    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }
    #------------------san pham --------------------------
    public function them_sanpham()
    {
        $sanpham_name = $_POST['sanpham_name'];
        $sanpham_gia = $_POST['sanpham_gia'];
        $sanpham_img = $_FILES['sanpham_img']['name'];
        $sanpham_img_tmp = $_FILES['sanpham_img']['tmp_name'];
        move_uploaded_file($sanpham_img_tmp, "../uploading/" . $sanpham_img);
        $query = "INSERT INTO sanpham
         (sanpham_name,
         sanpham_gia,
         sanpham_img)
         VALUES 
         ('$sanpham_name',
         '$sanpham_gia',
         '$sanpham_img')";
        $result = $this->db->insert($query);
        echo "<script>window.location = 'sanpham.php'</script>";
        return $result;
    }
    public function show_sanpham()
    {
        $query = "SELECT * FROM sanpham ORDER BY sanpham_id DESC";
        $result = $this->db->select($query);
        return $result;
    }
    public function xoa_sanpham($sanpham_id)
    {
        $query = "DELETE FROM sanpham WHERE sanpham_id = '$sanpham_id'";
        $result = $this->db->delete($query);
        header("Location:sanpham.php");
        return $result;
    }
    // // ----------danh muc-----------------
    public function them_danhmuc()
    {
        $danhmuc_name = $_POST['danhmuc_name'];
        $query = "INSERT INTO danhmuc
         (danhmuc_name,
         created_time)
         VALUES 
         ('$danhmuc_name',
         " . time() . ")";
        $result = $this->db->insert($query);
        echo "<script>window.location = 'danhmuc.php'</script>";
        return $result;
    }
    public function show_danhmuc()
    {
        $query = "SELECT * FROM danhmuc ORDER BY danhmuc_id DESC";
        $result = $this->db->select($query);
        return $result;
    }
    public function xoa_danhmuc($danhmuc_id)
    {
        $query = "DELETE FROM danhmuc WHERE danhmuc_id = '$danhmuc_id'";
        $result = $this->db->delete($query);
        header("Location:danhmuc.php");
        return $result;
    }
    public function get_danhmuc($danhmuc_id)
    {
        $query = "SELECT * FROM danhmuc WHERE danhmuc_id = '$danhmuc_id' ";
        $result = $this->db->select($query);
        return $result;
    }
    public function update_danhmuc($danhmuc_name, $danhmuc_id)
    {
        $query = "UPDATE danhmuc SET
         danhmuc_name = '$danhmuc_name'
         where danhmuc_id = '$danhmuc_id'";
        $result = $this->db->update($query);
        echo "<script>window.location = 'danhmuc.php'</script>";

        return $result;
    }
    // // -------------thanh vien---------------
    public function them_thanhvien($admin_name, $admin_email, $admin_pass, $admin_img)
    {
        $query = "INSERT INTO `admin`
         (`admin_name`,
           `admin_email`,
            `admin_pass`,
              `role`, 
              `admin_img`, 
              `created_time`) VALUES ( 
                '$admin_name',
                 '$admin_email',
                   '$admin_pass', 
                    'writer',
                      '$admin_img',
                       " . time() . ")";
        $result = $this->db->insert($query);
        echo "<script>window.location = 'thanhvien.php'</script>";
        return $result;
    }
    public function show_admin()
    {
        $query = "SELECT * FROM admin ORDER BY admin_id DESC";
        $result = $this->db->select($query);
        return $result;
    }
    public function xoa_admin($admin_id)
    {
        $query = "DELETE FROM admin WHERE admin_id = '$admin_id'";
        $result = $this->db->delete($query);
        header("Location:thanhvien.php");
        return $result;
    }
    public function show_thanhvien()
    {
        $query = "SELECT * FROM user ORDER BY user_id DESC";
        $result = $this->db->select($query);
        return $result;
    }
    // // ------------------slide--------------
    public function them_slide($slide_img)
    {
        $query = "INSERT INTO `slide`
         ( `slide_img`, `created_time`) VALUES ( 
                '$slide_img'," . time() . ")";
        $result = $this->db->insert($query);
        echo "<script>window.location = 'quangcao.php'</script>";
        return $result;
    }
    public function show_slide()
    {
        $query = "SELECT * FROM slide ORDER BY slide_id DESC";
        $result = $this->db->select($query);
        return $result;
    }
    public function xoa_slide($slide_id)
    {
        $query = "DELETE FROM slide WHERE slide_id = '$slide_id'";
        $result = $this->db->delete($query);
        header("Location:quangcao.php");
        return $result;
    }
    // --------------------don hang------------------
    public function show_donhang()
    {
        $query = "SELECT * FROM orders ORDER BY order_id DESC";
        $result = $this->db->select($query);
        return $result;
    }
}


?>