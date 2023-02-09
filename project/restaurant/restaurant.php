
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
          <!-- Unicons CSS -->
          <!-- <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" /> -->
          <!-- <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet"> -->
          <!-- <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet"> -->
          <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" /> -->
          <!-- <script src="js/script.js" defer></script> -->
          <link rel="stylesheet" href="https://kit.fontawesome.com/d805e5e97f.css" crossorigin="anonymous">
          <script src="https://kit.fontawesome.com/d805e5e97f.js" crossorigin="anonymous"></script>
        </head>
        <body>
          <!--header</!-->
          <?php include "../topbar/topbar.php" ?>
          <!--end of header</!-->

  <!-- <link href="./restaurant.css" rel="stylesheet" /> -->
  <div class="restaurant-container">
    <div class="restaurant-hero">
      <div class="restaurant-floor">
        <div class="restaurant-res-container">
          <div class="restaurant-image">
            <img
              alt="image"
              src="./sample_image/nhahang.jpg"
            />
          </div>
          <div class="restaurant-info">
            <h1 class="restaurant-name">Lẩu Đức Trọc - Đường Láng</h1>
            <div class="restaurant-address">790 Đường Láng, Đống Đa, Hà Nội</div>
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
            </div>
          </div>

          <div class="restaurant-dish">
            <div class="search-dish-bar">
              <i class="fa-solid fa-magnifying-glass search-icon" style=""></i>
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
                    src="./sample_image/kembo.jpg"
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
                    src="./sample_image/xienbun.jpg"
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
  </div>


       <!-- footer-->
          <?php include "../footer/footer.php" ?>

 <!-- end of footer -->
    </body>
  </html>
