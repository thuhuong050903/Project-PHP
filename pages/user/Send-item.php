<!DOCTYPE html>
<?php 
session_start()?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../PHP-Project-BookCar/styles/headerdetail.css">
    <link rel="stylesheet" href="../../../PHP-Project-BookCar/styles/footer.css">
    <link rel="stylesheet" href="../../../PHP-Project-BookCar/styles/book.css">

</head>


<body>

<div class="hd" style="background-image: url('https://www.ford.com.vn/content/dam/ecomm/u704/release-3/vn/landing-page/vn-territory-homepage-billboard-new.jpg/jcr:content/renditions/small.jpg'); background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;  width: 100%; height: 120px">
        <?php include '../components/header-detail.php'; ?>
    </div>
    <div class="container-fluid" style="background-image: url('https://otohaiduong.com/uploads/news/2019_08/don-ve-sinh-noi-that-o-to.jpg'); background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;  width: 100%; height: 100%">
        <div class="session">
            <div class="title">
                <p>Booking/Booking Information</p>
            </div>

            <div class="infor-title">
                <h3><b>Booking Information</b></h3>
            </div>

            <div class="detail">

                <?php
                include "connect.php";
                if (isset($_GET['Send'])) {
                    $id = $_GET['Send'];
                }
                $sql = "SELECT point_of_departure, vehicles.image,destination, trip_date, price_book, price_ship,name_drivers , name_vehicles 
                FROM trips ,vehicles , drivers WHERE  id_trips=$id";
                $arr = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($arr)
                ?>
                <div class="inf-trip">
                    <div style="margin-top: 20px" class="title-trip">
                        <h4 style="color: white"> Detail Information</h4>

                    </div>
                    <div style="margin-top: 10px ; color:white; margin-left: 5%" class="route" style="color:white;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                        </svg>
                        <b> ROUTE</b>

                    </div>
                    <div style="margin-top:10px; margin-left: 5%" class="kc">
                        <h5 style="color:white;">
                            <?php echo $row['point_of_departure'] ?>
                            <svg style="width: 50px; height: 25px; background-color: white; border-radius: 10px; " xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 15.405 14.707" viewBox="0 0 15.405 14.707" id="round">
                                <path d="M5.061 8 1.914 4.854h9.793c1.378 0 2.5 1.122 2.5 2.5h1c0-1.93-1.57-3.5-3.5-3.5H1.914L5.06.708 4.354 0 0 4.354l4.354 4.354L5.061 8z"></path>
                                <path d="m11.061 6-.708.706 3.14 3.147H3.707a2.503 2.503 0 0 1-2.5-2.5h-1c0 1.93 1.57 3.5 3.5 3.5h9.786L10.353 14l.708.706 4.344-4.353L11.061 6z"></path>
                            </svg>
                            <?php echo $row['destination'] ?>
                        </h5>
                    </div>
                    <div  style="margin-top:30px;" class="border"></div>
                    <div class="celendar" style="margin-left: 5%">
                        <b>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-calendar2-check-fill" viewBox="0 0 16 16">
                                <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zm9.954 3H2.545c-.3 0-.545.224-.545.5v1c0 .276.244.5.545.5h10.91c.3 0 .545-.224.545-.5v-1c0-.276-.244-.5-.546-.5zm-2.6 5.854a.5.5 0 0 0-.708-.708L7.5 10.793 6.354 9.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z" />
                            </svg>
                            Pick-up-time: <?php echo $row['trip_date'] ?></b>
                    </div>

                    <div class="seat" style="color:white; margin-left: 5%">
                        <span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                            </svg> <b>Weigh :
                                <input style="width: 100px; border-radius:10px" type="number" name="weigh-item" id="weigh-item" class="weigh-item" min="0"></b>
                        </span>



                    </div>
                    <div style="margin-top:30px" class="border"></div>
                    <?php
                    // giá của mỗi ghế 
                    $price_per_item = $row['price_ship'];

                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $selected_weigh = $_POST['weigh-item'];
                        $total_price = $selected_weight * $price_per_item;
                        echo "Total price: $total_price nghìn đồng";
                    }
                    ?>

                    <div class="total">
                        <b>Total : <span id="total_price"><?php echo number_format($price_per_item) ?></span> nghìn đồng</b>
                    </div>

                    <script>
                        // Lắng nghe sự kiện khi người dùng nhập số người
                        document.getElementById('weigh-item').addEventListener('input', function() {
                            var weigh = this.value;
                            var price_per_item = <?php echo $price_per_item ?>;
                            var total_price = weigh * price_per_item;
                            document.getElementById('total_price').innerHTML = total_price;
                        });
                    </script>
                </div>
                <?php

                ?>
                <div class="inf-user">
                    <div style="margin-top: 20px" class="title-user">
                        <h4 style="color: white"> Contact Information</h4>

                    </div>
                    <?php


                    // Include database connection
                    if (isset($_SESSION['username'])) {
                    $data = $_SESSION['username'];
                    include "connect.php";
                    $id = $_SESSION['id'];
                    $sql="SELECT * FROM accounts INNER JOIN users ON accounts.id_account= users.id_account WHERE accounts.id_account= $id"   ;            
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <div class="name-user" style="margin-left: 5% ; margin-top: 20px">
                        <h5 style="color: white"><b> Sender : <?php echo $row['username']?> </b></h5>
                    </div>
                    <div class="phone-user" style="margin-left: 5% ; margin-top: 15px">
                        <h5 style="color: white"><b>Mobile phone : <?php echo $row['phone']?> </b></h5>
                    </div>
                    <?php
                        }
                    }
                }
                else{
                    ?>
                    
                    <div class="receive" style="margin-left: 5%  ; margin-top: 15px; ">
                        <h5 style="color: white"><b>Name sender :</b>
                            <input style="border-radius: 5px" type="text" name="nameuser" placeholder="Enter name sender">
                        </h5>
                    </div>
                    <div class="phone-receive" style="margin-left: 5%  ; margin-top: 15px">
                        <h5 style="color: white"><b>Phone sender :</b>
                            <input style="border-radius: 5px" type="text" name="phone" placeholder="Enter phone sender">
                        </h5>
                    </div>

                    <?php
                }

                    ?>
                    <div class="receive" style="margin-left: 5%  ; margin-top: 15px; ">
                        <h5 style="color: white"><b>Name receiver :</b>
                            <input style="border-radius: 5px" type="text" name="receiver" placeholder="Enter name receiver">
                        </h5>
                    </div>
                    <div class="phone-receive" style="margin-left: 5%  ; margin-top: 15px">
                        <h5 style="color: white"><b>Phone receiver :</b>
                            <input style="border-radius: 5px" type="text" name="receiver" placeholder="Enter phone receiver">
                        </h5>
                    </div>
                    <div class="descript-item" style="margin-left: 5%  ; margin-top: 15px">
                        <h5 style="color: white"><b>Description item :</b>
                            <input style="border-radius: 5px" type="text" name="receiver" placeholder="Description item">  
                        </h5>
                    </div>
                    <div class="Method-payment" style="margin-left: 5%  ; margin-top: 15px">
                        <h4 style="color: white">Payment-method</h4>
                        <div class="method">
                            <div class="cash">
                                <input type="radio" name="payment">
                                <h5 style="color: white">Cash(Pay later)</h5>
                            </div>
                            <div class="Paypal">
                                <input type="radio" name="payment">
                                <h5 style="color: white">Paypal</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="confirm" style="margin-left: 50%; margin-top: 40px">
            <a href="#" class="btn btn-success">

                Compltete the booking
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                    <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                </svg>
            </a>
        </div>
        </div>
        
    </div>
    <?php
    include '../components/footer.php';
    ?>

</body>

</html>