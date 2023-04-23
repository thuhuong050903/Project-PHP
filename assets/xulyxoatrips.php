<?php
      // lấy dữ liệu cần xóa
if(isset($_GET['delete'])){
    $id=$_GET['delete'];
   
    require_once 'connectdb.php';
    $xoa_sql="DELETE  FROM trips WHERE id_trips=$id";
    if(mysqli_query($conn, $xoa_sql)){
    // echo "xoa thanh công";
    // trở lại trang show dữ liệu
    header("location:../pages/driver/Trips.php");
    }
}
?>