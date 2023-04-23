<?php

include('connectdb.php');

// Kiểm tra kết nối

if (!$conn) {
  die("Kết nối không thành công: " . mysqli_connect_error());
}

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM accounts WHERE username = '$username' AND password = '$password' AND role ='driver'";
$result = mysqli_query($conn, $sql);

// Kiểm tra kết quả trả về
if (mysqli_num_rows($result) > 0) {
    // Đăng nhập thành công, chuyển hướng đến trang chủ
    header("Location: ../pages/driver/driverhome.php");
} else {
    // Đăng nhập thất bại, thông báo lỗi và yêu cầu đăng nhập lại
    echo "Invalid username or password. Please try again.";
    header("Location: ../pages/driver/drivers.php");

}

// Đóng kết nối đến CSDL
mysqli_close($conn);

?>