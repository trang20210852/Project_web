
      <!DOCTYPE html>
      <html lang="en">
        <head>
          <meta charset="UTF-8" />
          <meta http-equiv="X-UA-Compatible" content="IE=edge" />
          <meta name="viewport" content="width=device-width, initial-scale=1.0" />
          <title>HNFOOD</title>
          <!-- CSS -->
          <link rel="stylesheet" href="css/style.css" />
          <!-- Unicons CSS -->
          <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
          <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
          <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
          <script src="js/script.js" defer></script>
        </head>
        <body>
          <!--header</!-->
          <?php include "../topbar/topbar.php" ?>
          <!--end of header</!-->

      <section class = "menu">
        <div class = "menu-container">
          <div class = "menu-btns">
<<<<<<< Updated upstream
            <button type = "button" class = "menu-btn active-btn" id = "featured">Deal hôm nay</button>
            <button type = "button" class = "menu-btn" id = "today-special">Tất cả</button>
            <button type = "button" class = "menu-btn" id = "new-arrival">Đồ ăn</button>
            <button type = "button" class = "menu-btn" id = "new-arrival_1">Đồ uống</button>
            <button type = "button" class = "menu-btn" id = "new-arrival_2">Bánh kem</button>
            <button type = "button" class = "menu-btn" id = "new-arrival_3">Vỉa hè</button>
            <button type = "button" class = "menu-btn" id = "new-arrival_4">Món lẩu</button>
            <button type = "button" class = "menu-btn" id = "new-arrival_5">Sushi</button>
            <button type = "button" class = "menu-btn" id = "new-arrival">Mì phở</button>  
          </div>
          <div class = "food-items">
=======
            <button type = "button" class = "menu-btn active-btn" id = "featured">Sale</button>
            <button type = "button" class = "menu-btn" id = "all">Tất cả</button>
            <button type = "button" class = "menu-btn" id = "do_an">Đồ ăn</button>
            <button type = "button" class = "menu-btn" id = "do_uong">Đồ uống</button>
            <button type = "button" class = "menu-btn" id = "banh_kem">Bánh ngọt</button>
            <button type = "button" class = "menu-btn" id = "an_vat">Ăn vặt</button>
            <button type = "button" class = "menu-btn" id = "do_trang_mieng">Đồ tráng miệng</button>  
          </div>
          <div class = "food-items">
          <?php  
   $host = "localhost";
   $user ="postgres";
   $pass = "root";	
   $db = "Web_LT";
   $db_connection = pg_connect("host=$host port=5432 dbname=$db user=$user password=$pass") or die ("could not connect to Server\n");          
          $doan = 'Đồ ăn';
          $douong = 'Đồ uống';
          $banhngot = 'Bánh ngọt';
          $anvat = 'Đồ ăn vặt';
          $dotrangmieng = 'Đồ tráng miệng';
          
        
          
          $safeoff = "SELECT * FROM public.dishes WHERE dishes.sale_off > 0  order by dishes.sale_off desc"; 
          $query_all = "SELECT * FROM public.dishes order by dishes.sale_off desc";
          $query_doan = "SELECT * FROM public.dishes WHERE type = '$doan' ";
          $query_douong = "SELECT * FROM public.dishes WHERE type = '$douong' ";
          $query_banhngot = "SELECT * FROM public.dishes WHERE type = '$banhngot' ";
          $query_anvat = "SELECT * FROM public.dishes WHERE type = '$anvat' ";
          $query_dotrangmieng = "SELECT * FROM public.dishes WHERE type = '$dotrangmieng' ";
         
          $show= pg_query($db_connection,$query_all);
          $showdoan = pg_query($db_connection,$query_doan);
          $showdouong = pg_query($db_connection,$query_douong);
          $showdobanhngot = pg_query($db_connection,$query_banhngot);
          $showanvat = pg_query($db_connection,$query_anvat);
          $showdotrangmieng = pg_query($db_connection,$query_dotrangmieng);
         
          $showsafeoff = pg_query($db_connection,$safeoff);
         
          while($row_ = pg_fetch_array($showsafeoff)){
?>
          
>>>>>>> Stashed changes
            <!-- item -->
            <div class = "food-item featured">
              <div class = "food-img">
<<<<<<< Updated upstream
                <img src = "foods/banana-bread-with-butter-and-milk.jpg" alt = "food image">
=======
                <img src = "<?php echo 'foods/'.$row_['image']?>" alt = "food image">
>>>>>>> Stashed changes
              </div>
              <div class = "food-content">
                <h2 class = "food-name">Banana Bread With Butter & Milk</h2>

                <div class = "line"></div>
<<<<<<< Updated upstream
                <h3 class = "dia_chi">606/52 Đường 3 Tháng 2, P. 14, Quận 10, TP. HCM</h3>
                 <p class = "food-loai">Loại: <span>Phở</span></p>
                <h3 class = "food-price">$25.00</h3>
=======
                <h3 class = "dia_chi">606/52 Đường 3 Tháng 1, P. 14, Quận 10, TP. HCM</h3>
                 <!-- <p class = "food-loai">Loại: <span>Phở</span></p> -->
                <h3 class = "food-price"><?php echo $row_['price'] . " đồng"; ?></h3>
>>>>>>> Stashed changes
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

<<<<<<< Updated upstream
            <!-- item -->
            <div class = "food-item today-special">
              <div class = "food-img">
                <img src = "foods/barbecue.jpg" alt = "food image">
=======
          while($row_1 = pg_fetch_array($showdoan)){
?>
          
            <!-- item -->
            <div class = "food-item do_an">
              <div class = "food-img">
                <img src = "<?php echo 'foods/'.$row_1['image']; ?>" alt = "food image">
>>>>>>> Stashed changes
              </div>
              <div class = "food-content">
                <h2 class = "food-name">Barbecue</h2>
                <div class = "line"></div>
<<<<<<< Updated upstream
                <h3 class = "dia_chi">606/52 Đường 3 Tháng 2, P. 14, Quận 10, TP. HCM</h3>
                 <p class = "food-loai">Loại: <span>Phở</span></p>
                <h3 class = "food-price">$20.00</h3>
=======
                <h3 class = "dia_chi">606/52 Đường 3 Tháng 1, P. 14, Quận 10, TP. HCM</h3>
                 <!-- <p class = "food-loai">Loại: <span>Phở</span></p> -->
                <h3 class = "food-price"><?php echo $row_1['price'] . " đồng"; ?></h3>
>>>>>>> Stashed changes
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
            <div class = "food-item new-arrival">
              <div class = "food-img">
<<<<<<< Updated upstream
                <img src = "foods/barbecued-roasted-duck-ramen.jpg" alt = "food image">
=======
                <img src = "<?php echo 'foods/'.$row_2['image']; ?>" alt = "food image">
>>>>>>> Stashed changes
              </div>
              <div class = "food-content">
                <h2 class = "food-name">Tá Lả - Ăn Vặt, Mì Xào, Cơm Chiên & Sinh Tố - Phan Văn Trị</h2>
                <div class = "line"></div>
<<<<<<< Updated upstream
                <h3 class = "dia_chi">606/52 Đường 3 Tháng 2, P. 14, Quận 10, TP. HCM</h3>
                 <p class = "food-loai">Loại: <span>Phở</span></p>
                <h3 class = "food-price">$35.00</h3>
=======
                <h3 class = "dia_chi">606/52 Đường 3 Tháng 1, P. 14, Quận 10, TP. HCM</h3>
                <h3 class = "food-price"><?php echo $row_2['price'] . " đồng"; ?></h3>
>>>>>>> Stashed changes
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

            <!-- item -->
<<<<<<< Updated upstream
            <div class = "food-item featured">
              <div class = "food-img">
                <img src = "foods/bread-with-seeds-and-butter.jpg" alt = "food image">
=======
           <?php while($row_3 = pg_fetch_array($showdobanhngot)){ ?>

            <div class = "food-item banh_kem">
              <div class = "food-img">
                <img src = "<?php echo 'foods/'.$row_3['image'] ; ?>" alt = "food image">
>>>>>>> Stashed changes
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
            <div class = "food-item today-special">
              <div class = "food-img">
                <img src = "foods/breakfast-sandwich-with-hummus-spread-and-fresh-vegetables.jpg" alt = "food image">
              </div>
              <div class = "food-content">
                <h2 class = "food-name">Breadfast Sandwich</h2>
                <div class = "line"></div>
                <h3 class = "dia_chi">606/52 Đường 3 Tháng 2, P. 14, Quận 10, TP. HCM</h3>
                 <p class = "food-loai">Loại: <span>Phở</span></p>

                <h3 class = "food-price">$15.00</h3>
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
            <div class = "food-item new-arrival">
              <div class = "food-img">
<<<<<<< Updated upstream
                <img src = "foods/brunch-skillet-with-eggs-and-tomatoes.jpg" alt = "food image">
=======
                <img src = "<?php echo 'foods/'.$row_4['image'] ; ?>" alt = "food image">
>>>>>>> Stashed changes
              </div>
              <div class = "food-content">
                <h2 class = "food-name">Brunch Skillet</h2>
                <div class = "line"></div>
                <h3 class = "dia_chi">606/52 Đường 3 Tháng 2, P. 14, Quận 10, TP. HCM</h3>
                 <p class = "food-loai">Loại: <span>Phở</span></p>
                <h3 class = "food-price">$10.00</h3>
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
<<<<<<< Updated upstream

            <!-- item -->
            <div class = "food-item featured">
              <div class = "food-img">
                <img src = "foods/chicken-breast-steaks-with-beetroot.jpg" alt = "food image">
              </div>
              <div class = "food-content">
                <h2 class = "food-name">Chicken Breast Steaks</h2>
                <div class = "line"></div>
                <h3 class = "dia_chi">606/52 Đường 3 Tháng 2, P. 14, Quận 10, TP. HCM</h3>
                 <p class = "food-loai">Loại: <span>Phở</span></p>
                <h3 class = "food-price">$15.00</h3>
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
            <div class = "food-item today-special">
              <div class = "food-img">
                <img src = "foods/chicken-legs-with-tomatoes-peppers-and-oranges.jpg" alt = "food image">
              </div>
              <div class = "food-content">
                <h2 class = "food-name">Chicken Legs</h2>
                <div class = "line"></div>
                <h3 class = "dia_chi">606/52 Đường 3 Tháng 2, P. 14, Quận 10, TP. HCM</h3>
                 <p class = "food-loai">Loại: <span>Phở</span></p>
                <h3 class = "food-price">$29.00</h3>
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
=======
<?php } ?>
           
            
            <!-- item -->
           <?php while($row_7 = pg_fetch_array($showdouong)){ ?>
>>>>>>> Stashed changes

            <!-- item -->
            <div class = "food-item new-arrival">
              <div class = "food-img">
<<<<<<< Updated upstream
                <img src = "foods/eggplant-cannelloni.jpg" alt = "food image">
=======
                <img src = "<?php echo 'foods/'.$row_7['image']; ?>" alt = "food image">
>>>>>>> Stashed changes
              </div>
              <div class = "food-content">
                <h2 class = "food-name">Eggplant Cannelloni</h2>
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

            <!-- item -->
<<<<<<< Updated upstream
            <div class = "food-item featured">
              <div class = "food-img">
                <img src = "foods/french-fries-with-steak-and-beer.jpg" alt = "food image">
              </div>
              <div class = "food-content">
                <h2 class = "food-name">French Fries</h2>
                <div class = "line"></div>
                <h3 class = "dia_chi">606/52 Đường 3 Tháng 2, P. 14, Quận 10, TP. HCM</h3>
                 <p class = "food-loai">Loại: <span>Phở</span></p>
                <h3 class = "food-price">$9.00</h3>
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
            <div class = "food-item today-special">
              <div class = "food-img">
                <img src = "foods/fried-rice-with-shrimps.jpg" alt = "food image">
=======
           <?php while($row_8 = pg_fetch_array($showdotrangmieng)){ ?>

            <div class = "food-item do_trang_mieng">
              <div class = "food-img">
                <img src = "<?php echo 'foods/'.$row_8['image'] ; ?>" alt = "food image">
>>>>>>> Stashed changes
              </div>
              <div class = "food-content">
                <h2 class = "food-name">Fried Rice</h2>
                <div class = "line"></div>
                <h3 class = "dia_chi">606/52 Đường 3 Tháng 2, P. 14, Quận 10, TP. HCM</h3>
                 <p class = "food-loai">Loại: <span>Phở</span></p>
                <h3 class = "food-price">$5.00</h3>
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
            <div class = "food-item new-arrival">
              <div class = "food-img">
                <img src = "foods/king-prawns-with-green-lettuce.jpg" alt = "food image">
              </div>
              <div class = "food-content">
                <h2 class = "food-name">King Prawns</h2>
                <div class = "line"></div>
                <h3 class = "dia_chi">606/52 Đường 3 Tháng 2, P. 14, Quận 10, TP. HCM</h3>
                 <p class = "food-loai">Loại: <span>Phở</span></p>
                <h3 class = "food-price">$11.00</h3>
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
          </div>
        </div>
      </section>
       <!-- footer-->
          <?php include "../footer/footer.php" ?>

 <!-- end of footer -->
    </body>
  </html>
