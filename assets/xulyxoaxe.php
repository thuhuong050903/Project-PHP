<?php
      // lấy dữ liệu cần xóa
if(isset($_GET['delete'])){
    $id=$_GET['delete'];
    $_fileHA=$_GET['hinhanh'];
    require_once 'connectdb.php';
    $xoa_sql="DELETE  FROM vehicles WHERE id_vehicle=$id";
    if(mysqli_query($conn, $xoa_sql)){
    // echo "xoa thanh công";
    // trở lại trang show dữ liệu
    unlink( $_fileHA);
    header("Location:../pages/driver/Vehicles.php");
    }
}
?>