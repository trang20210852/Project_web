 <!--header</!-->
          <?php include "../topbar/topbar.php" ?>
          <!--end of header</!-->
      <!DOCTYPE html>
      <html lang="en">
        <head>
          <meta charset="UTF-8" />
          <meta http-equiv="X-UA-Compatible" content="IE=edge" />
          <meta name="viewport" content="width=device-width, initial-scale=1.0" />
          <title>HNFOOD</title>
          <!-- CSS -->
          <link rel="stylesheet" href="css/profile.css" />
          <link href="profile.css?t=[timestamp]" type="text/css" rel="stylesheet">
          <!-- Unicons CSS -->
          <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
          <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
          <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
          <script src="js/profile.js" defer></script>
        </head>
         
  <body >
          <?php         
              $username = $_SESSION['username'];
              $db_connection = pg_connect("host=localhost dbname=project_web user=postgres password=23052001");
              $query = "SELECT * FROM public.users WHERE username = '$username' ";
              $result = pg_query($db_connection, $query) ;
              $row = pg_fetch_object($result);
              // stall
              $follow_stall = $row->follow_stall;
              $follow_stall = chop($follow_stall , $follow_stall[strlen($follow_stall) - 1]);
              $follow_stall = ltrim($follow_stall , $follow_stall[0]);
              $stall_list = explode(",",$follow_stall);
              // dish
              $favorite_list = $row->favorite_list;
              $favorite_list = chop($favorite_list , $favorite_list[strlen($favorite_list) - 1]);
              $favorite_list = ltrim($favorite_list , $favorite_list[0]);
              $dish_list = explode(",",$favorite_list);
              
              
          ?>
         
    <div class="container">
      <!-- profile -->
        <div class="box">
          <div class="image">
            <img src="<?php echo $_SESSION['img'] ?>">
            </div>
            <div class="name_job"><?php echo strtoupper($row->name);
            ?></div>
            
            <p>E-MAIL: <?php echo strtoupper($row->username) ;
            ?></p>
            <p>Liên lạc: <?php echo $row->telephone_num ?></p>
            <p>Địa chỉ: <?php echo $row->address ?></p>
            <div class="btns">
              <a href="../userinfoupdate/userinfo.php"><button> Chỉnh sửa </button></a>
          </div>
        </div>
      </div>  
      <!-- end of profile -->

      <!-- menu -->
      <div class="container">
        <div class="menu">
            <div class = "menu-container">
                <div class = "menu-btns">
                  <button type = "button" class = "menu-btn active-btn" id = "stall">Cửa hàng yêu thích</button>
                  <button type = "button" class = "menu-btn" id = "dish">Món ăn yêu thích</button>
                </div>
<<<<<<< Updated upstream

              <div class = "food-items">
                <!-- item -->
                <div class = "food-item stall">
                  <div class = "food-img">
                    <img src = "../trangchu/foods/banana-bread-with-butter-and-milk.jpg" alt = "food image">
                  </div>
                  <div class = "food-content">
                    <h2 class = "food-name">Banana Bread With Butter & Milk</h2>

                    <div class = "line"></div>
                    <h3 class = "dia_chi">606/52 Đường 3 Tháng 2, P. 14, Quận 10, TP. HCM</h3>
                    <p class = "food-loai">Loại: <span>Phở</span></p>
                    <h3 class = "food-price">$25.00</h3>
                    <ul class = "rating">
                      <li><i class = "fas fa-star"></i></li>
                      <li><i class = "fas fa-star"></i></li>
                      <li><i class = "fas fa-star"></i></li>
                      <li><i class = "fas fa-star"></i></li>
                      <li><i class = "far fa-star"></i></li>
                    </ul>
                    <p class = "category">Categories: <span>Featured</span></p>
                  <button class="chi_tiet">Chi tiết</button>

                  </div>
                </div>
            <!-- end of item -->
                <!-- item -->
                <div class = "food-item stall">
                  <div class = "food-img">
                    <img src = "../trangchu/foods/bread-with-seeds-and-butter.jpg" alt = "food image">
                  </div>
                  <div class = "food-content">
                    <h2 class = "food-name">Bread With Seeds & Butter</h2>
                    <div class = "line"></div>
                    <h3 class = "dia_chi">606/52 Đường 3 Tháng 2, P. 14, Quận 10, TP. HCM</h3>
                    <p class = "food-loai">Loại: <span>Phở</span></p>
                    <h3 class = "food-price">$27.00</h3>
                    <ul class = "rating">
                      <li><i class = "fas fa-star"></i></li>
                      <li><i class = "fas fa-star"></i></li>
                      <li><i class = "fas fa-star"></i></li>
                      <li><i class = "fas fa-star"></i></li>
                      <li><i class = "far fa-star"></i></li>
                    </ul>
                    <p class = "category">Categories: <span>Featured</span></p>
                  <button class="chi_tiet">Chi tiết</button>
                    
                  </div>
                </div>
                <!-- end of item -->
              <!-- item -->
              <div class = "food-item stall">
                  <div class = "food-img">
                    <img src = "../trangchu/foods/bread-with-seeds-and-butter.jpg" alt = "food image">
                  </div>
                  <div class = "food-content">
                    <h2 class = "food-name">Bread With Seeds & Butter</h2>
                    <div class = "line"></div>
                    <h3 class = "dia_chi">606/52 Đường 3 Tháng 2, P. 14, Quận 10, TP. HCM</h3>
                    <p class = "food-loai">Loại: <span>Phở</span></p>
                    <h3 class = "food-price">$27.00</h3>
                    <ul class = "rating">
                      <li><i class = "fas fa-star"></i></li>
                      <li><i class = "fas fa-star"></i></li>
                      <li><i class = "fas fa-star"></i></li>
                      <li><i class = "fas fa-star"></i></li>
                      <li><i class = "far fa-star"></i></li>
                    </ul>
                    <p class = "category">Categories: <span>Featured</span></p>
                  <button class="chi_tiet">Chi tiết</button>
                    
                  </div>
                </div>
                <!-- end of item -->
=======
              
              <!-- favorite stall -->
              <div class = "food-items">
                  <!-- item -->
                    <?php 
                      for($count = 0 ; $count < sizeof($stall_list) ; $count++)
                      {
                        $stall_query = "SELECT name , address[1] , time_o , time_c , telephone_num[1], image FROM public.stalls WHERE stalls.id =" . $stall_list[$count] ;
                        $stall = pg_query($db_connection, $stall_query);
                        $row_1 = pg_fetch_object($stall);
                    ?>
                    <div class = "food-item stall ">
                      <div class = "food-img">
                        <img src = "<?php echo '../trangchu/foods/stalls/'.$row_1->image?>" alt = "food image">
                      </div>
                      <div class = "food-content">
                        <h2 class = "food-name"><?php echo $row_1->name; ?></h2>
                        <h3 class = "dia_chi"></h3>
                        <div class = "line"></div>
                        <h3 class = "dia_chi"><?php echo $row_1->address?></h3>
>>>>>>> Stashed changes

                        <strong class = "category"><?php echo "Tele : " . $row_1->telephone_num?></strong>
                        <!-- <p class = "food-loai">Loại: <span>Phở</span></p> -->
                      <button class="chi_tiet">Chi tiết</button>

                      </div>
                    </div>
                    <?php
                      }
                    ?>
                    <!-- end of item -->
              </div>

<<<<<<< Updated upstream
              <div class = "food-item dish">
                <!-- item -->
                <div class = "food-img">
                  <img src = "../trangchu/foods/barbecue.jpg" alt = "food image">
                  </div>
                  <div class = "food-content">
                    <h2 class = "food-name">Barbecue</h2>
                    <div class = "line"></div>
                    <h3 class = "dia_chi">606/52 Đường 3 Tháng 2, P. 14, Quận 10, TP. HCM</h3>
                    <p class = "food-loai">Loại: <span>Phở</span></p>
                    <h3 class = "food-price">$20.00</h3>
                    <ul class = "rating">
                      <li><i class = "fas fa-star"></i></li>
                      <li><i class = "fas fa-star"></i></li>
                      <li><i class = "fas fa-star"></i></li>
                      <li><i class = "fas fa-star"></i></li>
                      <li><i class = "far fa-star"></i></li>
                    </ul>
                    <p class = "category">Categories: <span>Today's Special</span></p>
                    
                  <button class="chi_tiet">Chi tiết</button>
              
                  </div>
                </div>
                <!-- end of item -->

                <!-- item -->
                <div class = "food-item dish">
                  <div class = "food-img">
                    <img src = "../trangchu/foods/barbecued-roasted-duck-ramen.jpg" alt = "food image">
                  </div>
                  <div class = "food-content">
                    <h2 class = "food-name">Tá Lả - Ăn Vặt, Mì Xào, Cơm Chiên & Sinh Tố - Phan Văn Trị</h2>
                    <div class = "line"></div>
                    <h3 class = "dia_chi">606/52 Đường 3 Tháng 2, P. 14, Quận 10, TP. HCM</h3>
                    <p class = "food-loai">Loại: <span>Phở</span></p>
                    <h3 class = "food-price">$35.00</h3>
                    <ul class = "rating">
                      <li><i class = "fas fa-star"></i></li>
                      <li><i class = "fas fa-star"></i></li>
                      <li><i class = "fas fa-star"></i></li>
                      <li><i class = "fas fa-star"></i></li>
                      <li><i class = "far fa-star"></i></li>
                    </ul>
                    <p class = "category">Categories: <span>New Arrivals</span></p>
                  <button class="chi_tiet">Chi tiết</button>

                  </div>
                </div>
                <!-- end of item -->
                <div class = "food-item dish">
                <!-- item -->
                <div class = "food-img">
                  <img src = "../trangchu/foods/barbecue.jpg" alt = "food image">
                  </div>
                  <div class = "food-content">
                    <h2 class = "food-name">Barbecue</h2>
                    <div class = "line"></div>
                    <h3 class = "dia_chi">606/52 Đường 3 Tháng 2, P. 14, Quận 10, TP. HCM</h3>
                    <p class = "food-loai">Loại: <span>Phở</span></p>
                    <h3 class = "food-price">$20.00</h3>
                    <ul class = "rating">
                      <li><i class = "fas fa-star"></i></li>
                      <li><i class = "fas fa-star"></i></li>
                      <li><i class = "fas fa-star"></i></li>
                      <li><i class = "fas fa-star"></i></li>
                      <li><i class = "far fa-star"></i></li>
                    </ul>
                    <p class = "category">Categories: <span>Today's Special</span></p>
                    
                  <button class="chi_tiet">Chi tiết</button>
              
                  </div>
                </div>
                <!-- end of item -->
              </div>

=======
              <!-- end of favorite dish -->
              
              <!-- favorite dish -->
              <div class = "food-items">
                  <?php 
                    for($count = 0 ; $count < sizeof($dish_list) ; $count++)
                    {
                      $dish_query = "SELECT dishes.*,stalls.address[1] FROM public.dishes join stalls on (stalls.id = dishes.id_stall) WHERE dishes.id =" . $dish_list[$count] ;
                      $dish = pg_query($db_connection, $dish_query);
                      $row_2 = pg_fetch_object($dish);
                  ?>
                  <div class="food-item dish">
                    <div class = "food-img">
                      <img src = "<?php echo '../trangchu/foods/'.$row_2->image?>" alt = "food image">
                    </div>
                    <div class = "food-content">
                      <h2 class = "food-name"><?php echo $row_2->name; ?></h2>
                      <h3 class = "dia_chi"><?php echo $row_2->address; ?></h3>
                      <h3 class = "food-price"><?php echo $row_2->price . " đồng"; ?></h3>
                      <ul class = "rating">
                              <li><i class = "fas fa-star"></i></li>
                              <li><i class = "fas fa-star"></i></li>
                              <li><i class = "fas fa-star"></i></li>
                              <li><i class = "fas fa-star"></i></li>
                              <li><i class = "far fa-star"></i></li>
                      </ul>
                      <p class = "sale">Sale: <span><?php echo $row_2->sale_off . "%"; ?></span></p> 
                      <button class="chi_tiet">Chi tiết</button>
                    </div>
                  </div>
                  <?php } ?>
              </div>
              <!-- end of favorite dish -->

            
>>>>>>> Stashed changes
          </div>
        </div> 
      </div>



      <body>
          </html>
          
       <!-- footer-->
          <?php include "../footer/footer.php" ?>

 <!-- end of footer -->

