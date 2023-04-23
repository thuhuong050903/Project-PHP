<!DOCTYPE html>
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
  <link rel="stylesheet" href="../../../PHP-Project-BookCar/styles/header.css">
  <link rel="stylesheet" href="../../../PHP-Project-BookCar/styles/footer.css">
  <link rel="stylesheet" href="../../../PHP-Project-BookCar/styles/xulyshow.css">
</head>

<body>

  <?php
  include('../components/header.php')
  ?>
  <div class="containershow" style="background-color: grey;">

    <div class="ss2" style="padding-top:200px">
      <form action="" method="get">
        <div class="form-group">
          <label for="filter">Bộ lọc giá:</label>
          <select class="form-control" id="filter" name="filter">
            <option value="all">Tất cả</option>
            <option value="low-to-high">Giá từ thấp đến cao</option>
            <option value="high-to-low">Giá từ cao đến thấp</option>
          </select>
        </div>
        <button type="submit" class="btn btn-primary">Lọc</button>
      </form>
    </div>

    <div class="contain">
      <?php

      $dbhost = 'localhost';
      $dbuser = 'root';
      $dbpass = '';
      $dbname = 'booking_car';
      $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);


      // Kiểm tra kết nối

      if (!$conn) {
        die("Kết nối không thành công: " . mysqli_connect_error());
      }
      $form_pickUp_locations = $_POST['point_of_departure'];
      $form_drop_location = $_POST['destination'];
      $time = $_POST['time'];
      $sql = "SELECT trips.id_trips,vehicles.id_vehicle,drivers.id_drivers, point_of_departure, vehicles.image,destination, trip_date, price_book, price_ship, 
            name_drivers , name_vehicles   FROM trips ,vehicles , drivers
            WHERE point_of_departure = '$form_pickUp_locations' 
            AND destination = '$form_drop_location' 
            AND trip_date > '$time'
            AND trips.id_drivers = drivers.id_drivers 
            AND trips.id_vehicle = vehicles.id_vehicle ";
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
      ?>
          <div class="col-lg-6">
            <div class="d-flex align-items-center thumb-image" style="width:auto">
              <img class="flex-shrink-0 img-fluid rounded img-fluid" data-imagezoom="true" src="../image/<?php echo  $row['image'] ?>" alt="" style="width:250px height:200px">
              <div class="w-100 d-flex flex-column text-start ps-4">
                <h5 class="d-flex justify-content-between border-bottom pb-2">

                  <div style="margin-left: 15px;"><span><?php echo $row['point_of_departure'] ?></span></div>
                  <svg style="width: 50px; height: 30px;" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 15.405 14.707" viewBox="0 0 15.405 14.707" id="round">
                    <path d="M5.061 8 1.914 4.854h9.793c1.378 0 2.5 1.122 2.5 2.5h1c0-1.93-1.57-3.5-3.5-3.5H1.914L5.06.708 4.354 0 0 4.354l4.354 4.354L5.061 8z"></path>
                    <path d="m11.061 6-.708.706 3.14 3.147H3.707a2.503 2.503 0 0 1-2.5-2.5h-1c0 1.93 1.57 3.5 3.5 3.5h9.786L10.353 14l.708.706 4.344-4.353L11.061 6z"></path>
                  </svg>
                  <div><span><?php echo $row['destination'] ?></span></div>
                  <div><span><?php echo $row['trip_date']  ?></span></div>
                  <div><span>Price Book: <?php echo number_format($row['price_book'])  ?></span></div>
                  <div><span>Price Ship: <?php echo number_format($row['price_ship'])  ?></span></div>

                </h5><small class="fst-italic"></small>
                <div class="d-flex mb-3 justify-content-evenly">
                  <a href="Booking.php?book='<?php echo $row['id_trips']?>'" class="btn border-0 ml-2 btn-success">Đặt xe</a>
                  <a href="Send-item.php?Send='<?php echo $row['id_trips']?>'" class="btn border-0 ml-2 btn-success">Gửi hàng</a>
                  <!-- <a href="#" class="btn border-0 ml-2 btn-primary" data-toggle="modal" data-target="#exampleModal">Detail</a> -->
                  <a href="detail_trip.php? detail='<?php echo $row['id_trips'] ?>'" class="btn border-0 ml-2 btn-primary">
                    View Detail
                  </a>

                </div>
              </div>
            </div>
          </div>
          <br>
      <?php
          // echo '<div class="card" >';
          // echo '<div class="image"><img src="../image/' . $row['image'] . '" width="250px" height="200px"></div>';
          // echo '<div class="card-body">';
          // echo '<h5 class="card-title">' . $row['point_of_departure'] . ' - ' . $row['destination'] . '</h5>';
          // echo '<p class="card-text">Time: ' . $row['trip_date'] . '</p>';
          // echo '<a href="#" class="btn btn-primary">Đặt xe</a>';
          // echo '<a href="#" class="btn btn-primary">Gửi hàng</a>';
          // echo '<a href="#" class="btn btn-primary">Xem chi tiết</a>';
          // echo '</div>';
          // echo '</div>';
        }
      } else {
        echo '<p>No trips found.</p>';
      }
      ?>


      <!-- Modal -->
      
          <!-- <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Chi tiết về chuyến xe </h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <img src="<?php echo $r['image'] ?>" width=200 height=200>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-primary">Đặt xe</button>
                  <button type="button" class="btn btn-primary">Gửi hàng</button>
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
          <script>
            $('#exampleModal').on('shown.bs.modal', function() {
              $('#myInput').trigger('focus')
            })
          </script> -->
      
    </div>
  </div>

  <?php
  include('../components/footer.php')
  ?>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>