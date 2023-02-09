
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
            <button type = "button" class = "menu-btn active-btn" id = "featured">Sale</button>
            <button type = "button" class = "menu-btn" id = "all">Tất cả</button>
            <button type = "button" class = "menu-btn" id = "do_song">Đồ ăn</button>
            <button type = "button" class = "menu-btn" id = "do_uong">Đồ uống</button>
            <button type = "button" class = "menu-btn" id = "banh_kem">Bánh ngọt</button>
            <button type = "button" class = "menu-btn" id = "an_vat">Ăn vặt</button>
            <button type = "button" class = "menu-btn" id = "mon_lau">Món lẩu</button>
            <button type = "button" class = "menu-btn" id = "pizza">Pizza</button>
            <button type = "button" class = "menu-btn" id = "com_rang">Cơm rang</button>  
          </div>
          <div class = "food-items">
          <?php  
          $db_connection =pg_connect("host=localhost dbname=project user=postgres password=postgres");
          
          $dosong = 'Đồ ăn';
          $douong = 'Đồ uống';
          $banhkem = 'Bánh ngọt';
          $anvat = ' Đồ Ăn vặt';
          $comrang = 'Cơm rang';
          $monga = 'Món gà';
          $pizza = 'Pizza';
          $monlau = 'Món lẩu';
          
          $safeoff = "SELECT * FROM public.dishes WHERE dishes.sale_off > 0  order by dishes.sale_off desc"; 
          $query_all = "SELECT * FROM public.dishes order by dishes.sale_off desc";
          $query_dosong = "SELECT * FROM public.dishes WHERE type = '$dosong' ";
          $query_douong = "SELECT * FROM public.dishes WHERE type = '$douong' ";
          $query_banhkem = "SELECT * FROM public.dishes WHERE type = '$banhkem' ";
          $query_anvat = "SELECT * FROM public.dishes WHERE type = '$anvat' ";
          $query_comrang = "SELECT * FROM public.dishes WHERE type = '$comrang' ";
          $query_pizza = "SELECT * FROM public.dishes WHERE type = '$pizza' ";
          $query_lau = "SELECT * FROM public.dishes WHERE type = '$monlau' ";
          $show= pg_query($db_connection,$query_all);
          $showdosong = pg_query($db_connection,$query_dosong);
          $showdouong = pg_query($db_connection,$query_douong);
          $showdobanhkem = pg_query($db_connection,$query_banhkem);
          $showanvat = pg_query($db_connection,$query_anvat);
          $showcomrang = pg_query($db_connection,$query_comrang);
          $showpizza = pg_query($db_connection,$query_pizza);
          $showlau = pg_query($db_connection,$query_lau);
          $showsafeoff = pg_query($db_connection,$safeoff);
         
          while($row_ = pg_fetch_array($showsafeoff)){
?>
          
            <!-- item -->
            <div class = "food-item featured ">
              <div class = "food-img">
                <img src = "<?php echo $row_['image']; ?>" alt = "food image">
              </div>
              <div class = "food-content">
                <h2 class = "food-name"><?php echo $row_['name']; ?></h2>

                <div class = "line"></div>
                <h3 class = "dia_chi">606/52 Đường 3 Tháng 2, P. 14, Quận 10, TP. HCM</h3>
                 <!-- <p class = "food-loai">Loại: <span>Phở</span></p> -->
                <h3 class = "food-price"><?php echo $row_['price'] . " đồng"; ?></h3>
                <ul class = "rating">
                  <li><i class = "fas fa-star"></i></li>
                  <li><i class = "fas fa-star"></i></li>
                  <li><i class = "fas fa-star"></i></li>
                  <li><i class = "fas fa-star"></i></li>
                  <li><i class = "far fa-star"></i></li>
                </ul>
                <p class = "sale">Sale: <span><?php echo $row_['sale_off'] . "%"; ?></span></p> 
              <button class="chi_tiet">Chi tiết</button>

              </div>
            </div>
            <!-- end of item -->
<?php } 

          while($row_1 = pg_fetch_array($showdosong)){
?>
          
            <!-- item -->
            <div class = "food-item do_song">
              <div class = "food-img">
                <img src = "<?php echo $row_1['image']; ?>" alt = "food image">
              </div>
              <div class = "food-content">
                <h2 class = "food-name"><?php echo $row_1['name']; ?></h2>

                <div class = "line"></div>
                <h3 class = "dia_chi">606/52 Đường 3 Tháng 2, P. 14, Quận 10, TP. HCM</h3>
                 <!-- <p class = "food-loai">Loại: <span>Phở</span></p> -->
                <h3 class = "food-price"><?php echo $row_1['price'] . " đồng"; ?></h3>
                <ul class = "rating">
                  <li><i class = "fas fa-star"></i></li>
                  <li><i class = "fas fa-star"></i></li>
                  <li><i class = "fas fa-star"></i></li>
                  <li><i class = "fas fa-star"></i></li>
                  <li><i class = "far fa-star"></i></li>
                </ul>
                
              <button class="chi_tiet">Chi tiết</button>
              <p class = "sale">Sale: <span><?php echo $row_1['sale_off'] . "%"; ?></span></p> 
              </div>
            </div>
            <!-- end of item -->
<?php } ?>

           <?php while($row_2 = pg_fetch_array($show)){  ?>
            <!-- item -->
            <div class = "food-item all">
              <div class = "food-img">
                <img src = "<?php echo $row_2['image'][1]; ?>" alt = "food image">
              </div>
              <div class = "food-content">
                <h2 class = "food-name"><?php echo $row_2['name']; ?></h2>
                <div class = "line"></div>
                <h3 class = "dia_chi">606/52 Đường 3 Tháng 2, P. 14, Quận 10, TP. HCM</h3>
                <h3 class = "food-price"><?php echo $row_2['price'] . " đồng"; ?></h3>
                <ul class = "rating">
                  <li><i class = "fas fa-star"></i></li>
                  <li><i class = "fas fa-star"></i></li>
                  <li><i class = "fas fa-star"></i></li>
                  <li><i class = "fas fa-star"></i></li>
                  <li><i class = "far fa-star"></i></li>
                </ul>
                
              <p class = "sale">Sale: <span><?php echo $row_2['sale_off'] . "%"; ?></span></p> 
                
              <button class="chi_tiet">Chi tiết</button>
          
              </div>
            </div>
            <!-- end of item -->
<?php } ?>

            <!-- item -->
           <?php while($row_3 = pg_fetch_array($showdobanhkem)){ ?>

            <div class = "food-item banh_kem">
              <div class = "food-img">
                <img src = "<?php echo $row_3['image'] ; ?>" alt = "food image">
              </div>
              <div class = "food-content">
                <h2 class = "food-name"><?php echo $row_3['name'] ; ?></h2>
                <div class = "line"></div>
                <h3 class = "dia_chi">606/52 Đường 3 Tháng 2, P. 14, Quận 10, TP. HCM</h3>
                 <p class = "food-loai">Loại: <span>Phở</span></p>
                <h3 class = "food-price"><?php echo $row_3['price'] . " đồng"; ?></h3>
                <ul class = "rating">
                  <li><i class = "fas fa-star"></i></li>
                  <li><i class = "fas fa-star"></i></li>
                  <li><i class = "fas fa-star"></i></li>
                  <li><i class = "fas fa-star"></i></li>
                  <li><i class = "far fa-star"></i></li>
                  <li><i class = "far fa-star"></i></li>

                </ul>
              <p class = "sale">Sale: <span><?php echo $row_3['sale_off'] . "%"; ?></span></p> 
                
              <button class="chi_tiet">Chi tiết</button>

              </div>
            </div>
            <!-- end of item -->
<?php } ?>
            <!-- item -->
           <?php while($row_4 = pg_fetch_array($showanvat)){ ?>

            <div class = "food-item an_vat">
              <div class = "food-img">
                <img src = "<?php echo $row_4['image'] ; ?>" alt = "food image">
              </div>
              <div class = "food-content">
                <h2 class = "food-name"><?php echo $row_4['name'] ; ?></h2>
                <div class = "line"></div>
                <h3 class = "dia_chi">606/52 Đường 3 Tháng 2, P. 14, Quận 10, TP. HCM</h3>
                <h3 class = "food-price"><?php echo $row_4['price'] . " đồng"; ?></h3>
                <ul class = "rating">
                  <li><i class = "fas fa-star"></i></li>
                  <li><i class = "fas fa-star"></i></li>
                  <li><i class = "fas fa-star"></i></li>
                  <li><i class = "fas fa-star"></i></li>
                  <li><i class = "far fa-star"></i></li>
                </ul>
              <p class = "sale">Sale: <span><?php echo $row_4['sale_off'] . "%"; ?></span></p> 
                
              <button class="chi_tiet">Chi tiết</button>
                
              </div>
            </div>
            <!-- end of item -->
<?php } ?>
            <!-- item -->
           <?php while($row_5 = pg_fetch_array($showlau)){ ?>

            <div class = "food-item mon_lau">
              <div class = "food-img">
                <img src = "<?php echo $row_5['image'] ; ?>" alt = "food image">
              </div>
              <div class = "food-content">
                <h2 class = "food-name"><?php echo $row_5['name'] ; ?></h2>
                <div class = "line"></div>
                <h3 class = "dia_chi">606/52 Đường 3 Tháng 2, P. 14, Quận 10, TP. HCM</h3>
              

                <h3 class = "food-price"><?php echo $row_5['price'] . " đồng"; ?></h3>
                <ul class = "rating">
                  <li><i class = "fas fa-star"></i></li>
                  <li><i class = "fas fa-star"></i></li>
                  <li><i class = "fas fa-star"></i></li>
                  <li><i class = "fas fa-star"></i></li>
                  <li><i class = "far fa-star"></i></li>
                </ul>
              <p class = "sale">Sale: <span><?php echo $row_5['sale_off'] . "%"; ?></span></p> 
                
              <button class="chi_tiet">Chi tiết</button>
              </div>
            </div>
            <!-- end of item -->
<?php } ?>
            <!-- item -->
           <?php while($row_6 = pg_fetch_array($showpizza)){ ?>

            <div class = "food-item pizza">
              <div class = "food-img">
                <img src = "<?php echo $row_6['image'] ; ?>" alt = "food image">
              </div>
              <div class = "food-content">
                <h2 class = "food-name"><?php echo $row_6['name'] ; ?></h2>
                <div class = "line"></div>
                <h3 class = "dia_chi">606/52 Đường 3 Tháng 2, P. 14, Quận 10, TP. HCM</h3>
                <h3 class = "food-price"><?php echo $row_6['price'] . " đồng"; ?></h3>
                <ul class = "rating">
                  <li><i class = "fas fa-star"></i></li>
                  <li><i class = "fas fa-star"></i></li>
                  <li><i class = "fas fa-star"></i></li>
                  <li><i class = "fas fa-star"></i></li>
                  <li><i class = "far fa-star"></i></li>
                </ul>
              <p class = "sale">Sale: <span><?php echo $row_6['sale_off'] . "%"; ?></span></p> 
                
              <button class="chi_tiet">Chi tiết</button>

              </div>
            </div>
            <!-- end of item -->
<?php } ?>
            <!-- item -->
           <?php while($row_7 = pg_fetch_array($showdouong)){ ?>

            <div class = "food-item do_uong">
              <div class = "food-img">
                <img src = "<?php echo $row_7['image']; ?>" alt = "food image">
              </div>
              <div class = "food-content">
                 <h2 class = "food-name"><?php echo $row_7['name'] ; ?></h2>
                <div class = "line"></div>
                <h3 class = "dia_chi">606/52 Đường 3 Tháng 2, P. 14, Quận 10, TP. HCM</h3>
                <h3 class = "food-price"><?php echo $row_7['price'] . " đồng"; ?></h3>
                <ul class = "rating">
                  <li><i class = "fas fa-star"></i></li>
                  <li><i class = "fas fa-star"></i></li>
                  <li><i class = "fas fa-star"></i></li>
                  <li><i class = "fas fa-star"></i></li>
                  <li><i class = "far fa-star"></i></li>
                </ul>
              <p class = "sale">Sale: <span><?php echo $row_7['sale_off'] . "%"; ?></span></p> 
                
              <button class="chi_tiet">Chi tiết</button>

              </div>
            </div>
            <!-- end of item -->
<?php } ?>
            <!-- item -->
           <?php while($row_8 = pg_fetch_array($showcomrang)){ ?>

            <div class = "food-item com_rang">
              <div class = "food-img">
                <img src = "<?php echo $row_8['image'] ; ?>" alt = "food image">
              </div>
              <div class = "food-content">
                <h2 class = "food-name"><?php echo $row_8['name'] ; ?></h2>
                <div class = "line"></div>
                <h3 class = "dia_chi">606/52 Đường 3 Tháng 2, P. 14, Quận 10, TP. HCM</h3>
        
                <h3 class = "food-price"><?php echo $row_8['price'] . " đồng"; ?></h3>
                <ul class = "rating">
                  <li><i class = "fas fa-star"></i></li>
                  <li><i class = "fas fa-star"></i></li>
                  <li><i class = "fas fa-star"></i></li>
                  <li><i class = "fas fa-star"></i></li>
                  <li><i class = "far fa-star"></i></li>
                </ul>
              <p class = "sale">Sale: <span><?php echo $row_8['sale_off'] . "%"; ?></span></p> 
                
              <button class="chi_tiet">Chi tiết</button>

              </div>
            </div>
            <!-- end of item -->
<?php } ?>
            <!-- item -->
           
          </div>
        </div>
      </section>
       <!-- footer-->
          <?php include "../footer/footer.php" ?>

 <!-- end of footer -->
    </body>
  </html>
