<!doctype html>
<html lang="en">
  <head>
    <title>Admin Page</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <!----======== CSS ======== -->
     <link rel="stylesheet" href="../../../PHP-Project-BookCar/styles/admin.css">
     <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
     <!----===== Iconscout CSS ===== -->
     <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <nav>
        <div class="logo-name">
            <div class="logo-image">
                <!--<img src="images/logo.png" alt="">-->
            </div>

            <span class="logo_name">SUPER</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="#">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Dahsboard</span>
                </a></li>
                <li><a href="customer.php">
                    <i class="uil uil-user"></i>
                    <span class="link-name">Customers</span>
                </a></li>
                <li><a href="#">
                    <i class="uil uil-shopping-cart-alt"></i>
                    <span class="link-name">Orders</span>
                </a></li>
                <li><a href="#">
                    <i class="uil uil-bed-double"></i>
                    <span class="link-name">Trips</span>                 
                </a></li>
                <li><a href="#">
                    <i class="uil uil-setting"></i>
                    <span class="link-name">Setting</span>
                </a></li>
             </ul> 
                      
        </div>
    </nav>

    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>

            <div class="search-box">
                <i class="uil uil-search"></i>
                <input type="text" placeholder="Search here...">
            </div>
            
            <!--<img src="images/profile.jpg" alt="">-->
        </div>

        <div class="dash-content">
        <h2 style="margin-left: 350px;">Danh Sách Orders</h2>
           
           <button style="margin-left: 40px;"> <a href="../driver/themdriver.php">Thêm New Order</a></button>
          
       <div class="row" style="margin-left:30px">
   <?php
   // Kết nối tới database
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $dbname = 'booking_car';
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

   // Kiểm tra kết nối
   if (!$conn) {
     die("Kết nối không thành công: " . mysqli_connect_error());
   }

    // $sql = " SELECT name , address ,username , password, phone , role FROM drivers , users,account";
    $sql ="SELECT users.name, users.address, users.phone, accounts.username, accounts.password, accounts.role
    FROM users
    INNER JOIN accounts ON users.id_account = accounts.id_account
    UNION
    SELECT drivers.name_drivers, drivers.address, drivers.phone, accounts.username, accounts.password, accounts.role
    FROM drivers
    INNER JOIN accounts ON drivers.id_account = accounts.id_account;";
   
    if($result = $conn->query($sql)){

            if ($result->num_rows > 0) {
            echo "<table class='table' style='padding: 5px;'>
                        <thead>
                            <tr>
                                <th>ID order</th>
                                <th>ID trips</th>
                                <th>ID payment</th>
                                <th>status</th>
                                
                            </tr>
                        </thead>";

            // Hiển thị từng bản ghi
            while($row = $result->fetch_assoc()) {
            echo "
            <tbody>
                        <tr>
                        
                            <td>".$row["name"]."</td>
                            <td>".$row["username"]."</td>
                            <td>".$row["password"]."</td>
                            <td>".$row["role"]."</td>
                            <td>".$row["address"]."</td>
                            <td>".$row["phone"]."</td>
                            <td>
                                <button>Edit</button>
                                <button>Delete</button>
                            </td>
                        </tr>
            </tbody>";
            }

            echo "</table>";
            } else {
            echo "Không có bản ghi nào trong cơ sở dữ liệu";
            }

            // Đóng kết nối tới database
            mysqli_close($conn);
        }
            ?>

        </div>
    </section>
   
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
</body>
</html>
