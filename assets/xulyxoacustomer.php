<?php
session_start();
// Lấy giá trị của biến 'role' từ session
$role = $_SESSION['role'];
    
require_once 'connectdb.php';

if(isset($_GET['delete'])){
    // $id = mysqli_real_escape_string($conn, $_GET['delete']);
    $id=$_GET['delete'];
    if ($role == 'driver') {
        $sql = "SELECT *FROM drivers WHERE id_account=$id";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $id_driver = $row['id_drivers'];
        $xoa_sql = "DELETE FROM trips WHERE id_drivers = $id_driver;";
        mysqli_query($conn,$xoa_sql);
        $xoa_sql="DELETE FROM drivers WHERE id_account =$id;";
        mysqli_query($conn,$xoa_sql);
        $xoa_sql="DELETE FROM accounts WHERE id_account =$id;";
        if (mysqli_query($conn,$xoa_sql)) {
            echo "<script> 
            alert ('Delete customer successfully');
            window.location.href='../pages/admin/customer.php';
            </script>";
        }
        
    }
    else {
        $sql = "SET FOREIGN_KEY_CHECKS = 0";
        mysqli_query($conn, $sql);

            // Xóa khóa ngoại trong các bảng có liên kết tới bảng accounts
            $sql = "DELETE FROM payment WHERE id_items IN (SELECT id_items FROM items WHERE id_users IN (SELECT id_users FROM users WHERE id_account = $id))";
            mysqli_query($conn, $sql);
        
            $sql = "DELETE FROM book_cars WHERE id_users IN (SELECT id_users FROM users WHERE id_account = $id)";
            mysqli_query($conn, $sql);
        
            $sql = "DELETE FROM items WHERE id_users IN (SELECT id_users FROM users WHERE id_account = $id)";
            mysqli_query($conn, $sql);
        
            $sql = "DELETE FROM users WHERE id_account = $id";
            mysqli_query($conn, $sql);
        
            // Xóa bản ghi trong bảng accounts
            $sql = "DELETE FROM accounts WHERE id_account = $id";
            if (mysqli_query($conn, $sql)) {
                echo "<script> 
                alert ('Delete customer successfully');
                window.location.href='../pages/admin/customer.php';
                </script>";
            }
        }
        if (mysqli_query($conn,$xoa_sql)) {
            echo "<script> 
            alert ('Delete customer successfully');
            window.location.href='../pages/admin/customer.php';
            </script>";
        }
    }
    // $xoa_sql="";
    // mysqli_query($conn, $xoa_sql);
    // echo "xoa thanh công";
    // trở lại trang show dữ liệu
    
   
    
?>