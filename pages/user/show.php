<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="icon" href="images/fevicon.png" type="image/gif"/>
<script src="https://kit.fontawesome.com/11a9c95312.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="../../../PHP-Project-BookCar/styles/user.css">
<link rel="stylesheet" href="../../../PHP-Project-BookCar/styles/header.css">
<link rel="stylesheet" href="../../../PHP-Project-BookCar/styles/footer.css">
<link rel="stylesheet" href="../../../PHP-Project-BookCar/styles/icon.css">
<!-- <link rel="stylesheet" href="../../../PHP-Project-BookCar/styles/blog.css"> -->

<title>Home Page</title>

</head>
<body>
    
        <div class="icon-container">
                <!-- Tạo icon cho chatbox -->
            <a href="#" class="chat-icon"><i class="fa fa-comment"></i></a>

        <!-- Tạo icon cho số điện thoại -->
            <a href="tel:0123456789" class="phone-icon"><i class="fa fa-phone"></i></a>

        <!-- Tạo icon cho Facebook -->
            <a href="https://www.facebook.com/myfanpage/" class="facebook-icon" target="_blank"><i class="fa fa-facebook"></i></a>
        </div>

              
            <section class="section1">
            <?php 
                // phpinfo();
                // echo phpinfo();
                include ('./pages/components/header.php') ;
            ?>
            <div class="section1-content">
                <div class="section1-content-left">
                    <h1 style="margin-left: 30px;"> <i>WELLCOME TO SUPER</i></h1>
                    <br>
                    <br>
                    <h3 style="width: 250px;text-align: center;margin: auto;"><i> Now you can go anywhere with our car booking service.</i></h3>
                </div>
                <!-- form section 1 -->
              
                <div class="section1-content-right">
                    <form class="section1-form" method="post" action="../../../PHP-Project-BookCar/pages/user/xulyshow.php">
                        <table>
                            <tr>
                                <td>
                                    <span class="form-title">PICK UP LOCATION</span>
                                </td>
                                <td>
                                    <input list="form-pickUp-locations" name="point_of_departure" id="form-pickUp-location">
                                    <datalist id="form-pickUp-locations">
                                    <option value="Đà Nẵng">Đà Nẵng</option>
                                        <option value="Quảng Trị">Quảng Trị</option>
                                        <option value="Quảng Nam">Quảng Nam</option>
                                        <option value="Huế">Huế</option>
                                        <option value="Bình Định">Bình Định</option>
                                        <option value="Quảng Ngãi">Quảng Ngãi</option>
                                        <option value="Quảng Bình">Quảng Bình</option>
                                    </datalist>
                                    <span class="form-icon"><i class="fa-sharp fa-solid fa-location-dot"></i></span>
                                </td>
                                
                            </tr>
                            <tr>
                                <td><br></td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="form-title">DROP LOCATION</span>
                                </td>
                                <td>
                                    <input list="form-drop-locations" name="destination" id="form-drop-location">
                                    <datalist id="form-drop-locations">
                                        <option value="Đà Nẵng">Đà Nẵng</option>
                                        <option value="Quảng Trị">Quảng Trị</option>
                                        <option value="Quảng Nam">Quảng Nam</option>
                                        <option value="Huế">Huế</option>
                                        <option value="Bình Định">Bình Định</option>
                                        <option value="Quảng Ngãi">Quảng Ngãi</option>
                                        <option value="Quảng Bình">Quảng Bình</option>
                                    </datalist>
                                    <span class="form-icon"><i class="fa-sharp fa-solid fa-location-dot"></i></span>
                                </td>
                            </tr>
                            <tr>
                                <td><br></td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="form-title">DATE TIME</span>
                                </td>
                                <td>
                                    <input type="datetime-local" class="form-date-time" name="time">
                                </td>
                            </tr>
                            <tr>
                                <td><br></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                <input type="submit" name="submit" value="SEARCH CAR">
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
    </section>
    
<!-- code session 2 -->
<div class="latest-blog"  >
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title-all text-center">
                            <h1 style="color: white;">OUR SERVICES</h1>
                            <p>WE PROVIDE THE BEST SERVICES TO SERVE CUSTOMERS</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4 col-xl-4">
                        <div class="blog-box">
                            <div class="blog-img">
                                <img class="img-fluid" src="https://images.pexels.com/photos/112460/pexels-photo-112460.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt=""style="width:360px;height:250px"/>
                            </div>
                            <div class="blog-content">
                                <div class="title-blog">
                                    <h3>BOOK A CAR</h3>
                                    <p>We provide an online car booking service to our customers, making it easy for them to book a car quickly and conveniently. Customers can book a car in advance and choose the type of car that suits their needs.</p>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-4">
                        <div class="blog-box">
                            <div class="blog-img">
                                <img class="img-fluid" src="https://images.pexels.com/photos/909907/pexels-photo-909907.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="" style="width:360px;height:250px"/>
                            </div>
                            <div class="blog-content">
                                <div class="title-blog">
                                    <h3>CARPOOLING</h3>
                                    <p>Our carpooling service allows customers to share rides with others in the same destination. It is an economical and time-saving solution for those who do not want to pay too much for transportation and comfort during the trip.</p>
                                </div>
                              
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-4">
                        <div class="blog-box">
                            <div class="blog-img">
                                <img class="img-fluid" src="https://images.pexels.com/photos/2365572/pexels-photo-2365572.jpeg?auto=compress&cs=tinysrgb&w=600" alt=""style="width:360px;height:250px"/>
                            </div>
                            <div class="blog-content">
                                <div class="title-blog">
                                    <h3>QUICK SHIPPING</h3>
                                    <p>We provide fast shipping service for customers who need to transport goods in the shortest time. We can deliver the goods to the location requested by the customer within a few hours or the same day.</p>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<!-- Phan feedback tu khach hang -->
   
<section class="sc6">	
    <div class="container-sc6">
        <div class="text-title1">
            <h3>TESTIMONIAL</h3>
        </div>
        <div class="text-title2">
            <p>We take pride in our quality and service</p> 
        </div>

        <div class="wrap">
            <div class="main-text" style="height: 300px;">
                <div class="text-box">
                    <div class="icon">
                        <i class="fa-solid fa-quote-left"></i>
                    </div>
                    <div class="text"> 
                        <p>There was a time when I mistakenly transferred an excess to buy 1 ticket, then contacted customer care, and I was supported to check and transfer immediately, without cumbersome procedures like other parties.
                        </p>
                    </div>
                </div>
                <div class="triangle" ></div>
                <div class="avatar">
                    <img src="https://images.pexels.com/photos/846741/pexels-photo-846741.jpeg?auto=compress&cs=tinysrgb&w=600" alt="" style="width:50px;height:50px;object-fit: cover;object-position: center;">
                </div>
                <div class="name">
                    <p>Mr Hoàn</p>
                </div>

            </div>
            <div class="main-text" style="height: 275px;">
                <div class="text-box">
                    <div class="icon">
                        <i class="fa-solid fa-quote-left"></i>
                    </div>
                    <div class="text"> 
                        <p>I am very satisfied with the service of Da Nang car. polite and attentive staff, drive carefully not to overtake carelessly, stop at the right place. I feel satisfied with the car service.
                        </p>
                    </div>
                </div>
                <div class="triangle" ></div>
                <div class="avatar">
                    <img src="https://images.pexels.com/photos/428338/pexels-photo-428338.jpeg?auto=compress&cs=tinysrgb&w=600" alt="" style="width:50px;height:50px;object-fit: cover;object-position: center;">
                </div>
                <div class="name">
                    <p>Ms Trang</p>
                </div>

            </div>
            <div class="main-text" style="height: 250px;">
                <div class="text-box">
                    <div class="icon">
                        <i class="fa-solid fa-quote-left"></i>
                    </div>
                    <div class="text" > 
                        <p>Yesterday, I was quite excited and satisfied when using the Đà Nẵng - Quảng Trị bus service, the driver was enthusiastic, the flight attendant helped me carry my luggage.
                        </p>
                    </div>
                        
                </div>
                <div class="triangle" ></div>
                <div class="avatar">
                    <img src="https://images.pexels.com/photos/775358/pexels-photo-775358.jpeg?auto=compress&cs=tinysrgb&w=600" alt="" style="width:50px;height:50px;object-fit: cover;object-position: center;">
                </div>
                <div class="name">
                    <p>Mr Biên</p>
                </div>
            </div>
            <div class="main-text" style="height: 275px;">
                <div class="text-box">
                    <div class="icon">
                        <i class="fa-solid fa-quote-left"></i>
                    </div>
                    <div class="text"> 
                        <p>The car runs smoothly, does not overtake carelessly. The driver is very historical, the operator is cute. The garage should open more new routes for customers to have more choices.
                        </p>
                    </div>
                </div>
                <div class="triangle" ></div>
                <div class="avatar">
                    <img src="https://images.pexels.com/photos/371160/pexels-photo-371160.jpeg?auto=compress&cs=tinysrgb&w=600" alt="" style="width:50px;height:50px;object-fit: cover;object-position: center;">
                </div>
                <div class="name">
                    <p>Ms Huyền</p>
                </div>
            </div>
            <div class="main-text" style="height: 300px;">
                <div class="text-box">
                    <div class="icon">
                        <i class="fa-solid fa-quote-left"></i>
                    </div>
                    <div class="text"> 
                        <p>It was a holiday, so it was very surprising when the garage was not packed with guests, only enough seats were already gone. Service is extremely enthusiastic, my child dropped a teddy bear from his pocket 
                        </p>
                    </div>
                </div>
                <div class="triangle" ></div>
                <div class="avatar">
                    <img src="https://images.pexels.com/photos/2072453/pexels-photo-2072453.jpeg?auto=compress&cs=tinysrgb&w=600" alt="" style="width:50px;height:50px;object-fit: cover;object-position: center;">
                </div>
                <div class="name">
                    <p>Mr Lực</p>
                </div>  
            </div>
        </div>
    </div>
</section>
<!-- blog -->
<div class="about_section layout_padding">
         <div class="container">
            <div class="text-title2">
                <h3>BLOG</h3>
            </div>
            <div class="row" style="margin-top: 50px;">
               <div class="col-lg-7 col-sm-12">
                  <div class="about_img"><video  src="https://player.vimeo.com/external/363170147.sd.mp4?s=61b558d1819ee9502feb57fdac48fd9ea7ff190c&profile_id=164&oauth2_token_id=57447761" controls></video></div>
                  <div class="like_icon"><h5>Nguyễn Văn Biên</h5></div>
                  <p class="post_text">Post By : 01/04/2023 </p>  
                  <h2 class="most_text">Travel Across Viet Nam With SUPER </h2>
                 
                  <p class="lorem_text">Last Saturday I had a trip from Ho Chi Minh City to Hanoi capital. This is the best trip of my life. I have a beautiful view and the garage is also very attentive</p>
                  <div class="social_icon_main">
                     <div class="read_bt"> <button style="background-color:black"> <a href="#" style="text-decoration: none; color:white">Read More</a></button> <br><br><br><br>
                       </div>
                  </div>
               </div>
               <div class="col-lg-5 col-sm-12">
                  <div class="newsletter_main">
                     <h1 class="recent_taital" style="margin-left:150px; color:aliceblue">Recent post</h1>
                     <div class="recent_box">
                        <div class="recent_left">
                           <div class="image_6"><img src="https://images.pexels.com/photos/6462662/pexels-photo-6462662.png?auto=compress&cs=tinysrgb&w=600" style="width:150px;height:130px"/></div>
                        </div>
                        <div class="recent_right">
                           <h5 class="consectetur_text">Special bus from Da Nang to Quang Tri</h5>
                           <p class="dolor_text">ipsum dolor sit amet, consectetur adipiscing </p>
                           <div class="read_bt"> <button style="background-color:black;"> <a href="#" style="text-decoration: none; color:white ; ">Read More</a></button> 
                       </div>
                        </div>
                     </div>
                     <div class="recent_box">
                        <div class="recent_left">
                           <div class="image_6"><img src="https://images.pexels.com/photos/11191307/pexels-photo-11191307.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load" style="width:150px;height:130px"/></div>
                        </div>
                        <div class="recent_right">
                           <h5 class="consectetur_text">Special bus from Da Nang to Quang Tri</h5>
                           <p class="dolor_text">It was a holiday, so it was very surprising when the garage </p>
                           <div class="read_bt"> <button style="background-color:black;"> <a href="#" style="text-decoration: none; color:white ; ">Read More</a></button> 
                        </div>
                     </div>
                     
                  </div>
               </div>
            </div>
         </div>
      </div>
<?php 
        include "pages/components/footer.php" ?>
    <!-- ------------------------------------------ -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>