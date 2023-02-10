
<!DOCTYPE html>
      <html lang="en">
        <head>
          <meta charset="UTF-8" />
          <meta http-equiv="X-UA-Compatible" content="IE=edge" />
          <meta name="viewport" content="width=device-width, initial-scale=1.0" />
          <title>HNFOOD</title>
          <!-- CSS -->
          <link rel="stylesheet" href="css/restaurant.css" />
          <link rel="stylesheet" href="../trangchu/css/style.css" />
          <script src="https://kit.fontawesome.com/d805e5e97f.js" crossorigin="anonymous"></script>
        </head>
        <body>
          <!--header</!-->
          <?php include "../topbar/topbar.php" ?>
          <!--end of header</!-->
          <?php
            $queries = array();
            parse_str($_SERVER['QUERY_STRING'], $queries);

            if(isset($queries['stall'])){

              //Cần query ?stall=1 ...
              $stall_id = $queries['stall'];
              $db_connection =pg_connect("host=localhost dbname=postgres user=postgres password=postgres");

              $doan = 'Đồ ăn';
              $douong = 'Đồ uống';
              $banhngot = 'Bánh ngọt';
              $anvat = 'Đồ ăn vặt';
              $dotrangmieng = 'Đồ tráng miệng';
              
              $query_stall = "SELECT * FROM public.stalls WHERE stalls.id = $1";
              $query_all = "SELECT * FROM public.dishes WHERE dishes.id_stall = $1 order by dishes.sale_off desc" ;
              $query_doan = "SELECT * FROM public.dishes WHERE dishes.type = $1 and dishes.id_stall = $2 order by dishes.sale_off desc";
              $query_douong = "SELECT * FROM public.dishes WHERE dishes.type = $1 and dishes.id_stall = $2 order by dishes.sale_off desc";
              $query_banhngot = "SELECT * FROM public.dishes WHERE dishes.type = $1 and dishes.id_stall = $2 order by dishes.sale_off desc";
              $query_anvat = "SELECT * FROM public.dishes WHERE dishes.type = $1 and dishes.id_stall = $2 order by dishes.sale_off desc";
              $query_dotrangmieng = "SELECT * FROM public.dishes WHERE dishes.type = $1 and dishes.id_stall = $2 order by dishes.sale_off desc";

              $result1 = pg_prepare($db_connection, "query_stall", $query_stall);
              $result2 = pg_prepare($db_connection, "query_all", $query_all);
              $result3 = pg_prepare($db_connection, "query_doan", $query_doan);
              $result4 = pg_prepare($db_connection, "query_douong", $query_douong);
              $result5 = pg_prepare($db_connection, "query_banhngot", $query_banhngot);
              $result6 = pg_prepare($db_connection, "query_anvat", $query_anvat);
              $result7 = pg_prepare($db_connection, "query_dotrangmieng", $query_dotrangmieng);
              
              $stall= pg_execute($db_connection, "query_stall", array($stall_id));
              $show = pg_execute($db_connection, "query_all", array($stall_id));
              $showdoan = pg_execute($db_connection, "query_doan", array($doan, $stall_id));
              $showdouong = pg_execute($db_connection,"query_douong", array($douong, $stall_id));
              $showdobanhngot = pg_execute($db_connection, "query_banhngot", array($banhngot, $stall_id));
              $showanvat = pg_execute($db_connection, "query_anvat", array($anvat, $stall_id));
              $showdotrangmieng = pg_execute($db_connection,"query_dotrangmieng", array($dotrangmieng, $stall_id));
              
              
              $row_ = pg_fetch_array($stall);
              if(!$row_){
                include "./err_restaurant.php";
                exit(0);
              }
  
              ?>

<div class="restaurant-container">
      <div class="restaurant-floor">
        <div class="restaurant-res-container">
          <div class="restaurant-image">
            <img
              alt="image"
              src="sample_image/biahanoithanhhang.jpg"
            />
          </div>
          <div class="restaurant-info">
            <h1 class="restaurant-name"><?php echo $row_['name']?></h1>
            <div class="restaurant-address">
            <?php 
                $addresses = explode('","', substr($row_['address'], 2, -2));
                foreach ( $addresses as $value) {
                  echo $value;
                  break;
                }
              ?>
            </div>

            <div class="restaurant-rating">
              <div class="stars">
                <span class="full"><i class="fa-solid fa-star"></i></span>
                <span class="full"><i class="fa-solid fa-star"></i></span>
                <span class="full"><i class="fa-solid fa-star"></i></span>
                <span class="full"><i class="fa-solid fa-star"></i></span>
                <span class="half"><i class="fa-solid fa-star-half-stroke"></i></span>
              </div>
              <div class="votes">50+</div>
            </div>
            <div class="restaurant-time">
              <i class="fa-regular fa-clock" style="color: rgb(255 255 255);"></i>
              09:00 - 21:30</div>
            <div class="restaurant-price">
              <i class="fa-solid fa-dollar-sign" style="color: rgb(255 255 255);"></i>
              15,000 - 875,000</div>
          </div>
        </div>

        <div class="restaurant-menu">
          <div class = "restaurant-menu-type">
            <div class = "menu-container-col">
              <div class = "menu-btns-col">
              <button type = "button" class = "menu-btn active-btn" id = "all">Tất cả</button>
              <button type = "button" class = "menu-btn" id = "featured">Sale</button>
              <button type = "button" class = "menu-btn" id = "do_an">Đồ ăn</button>
              <button type = "button" class = "menu-btn" id = "do_uong">Đồ uống</button>
              <button type = "button" class = "menu-btn" id = "banh_kem">Bánh ngọt</button>
              <button type = "button" class = "menu-btn" id = "an_vat">Ăn vặt</button>
              <button type = "button" class = "menu-btn" id = "do_trang_mieng">Đồ tráng miệng</button>   
              </div>
            </div>
          </div>

          <div class="restaurant-dish">
            <div class="search-dish-bar">
              <i class="fa-solid fa-magnifying-glass awesome-icon" style=""></i>
              <input
                type="text"
                placeholder="Tìm Món"
                name="Tim kiem"
              />
            </div>
            <div class="restaurant-dish-list">
              <div class="dish">
                <div class="dish-image">
                  <img
                    alt="image"
                    src="https://images.foody.vn/default/s140x140/shopeefood-deli-dish-no-image.png"
                  />   
                </div>

                <div class="dish-name">
                  Cua hoàng đế
                </div>
                <div class="dish-price">
                  100.000 đ
                </div>
              </div>

              <div class="dish">
              <div class="dish-image">
                  <img
                    alt="image"
                    src="https://images.foody.vn/default/s140x140/shopeefood-deli-dish-no-image.png"
                  />   
                </div>

                <div class="dish-name">
                  Gan ngỗng paris
                </div>
                <div class="dish-price">
                  200.000 đ
                </div>

              </div>

              
            </div>
          </div>

        </div>
      </div>
  </div>
          <?php




              
            } else {
              include "./err_restaurant.php";
              exit(0);
            }

          ?>

  

    


      
       <!-- footer-->
          <?php include "../footer/footer.php" ?>

 <!-- end of footer -->
    </body>
  </html>
