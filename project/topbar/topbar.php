<?php session_start() 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
          <meta charset="UTF-8" />
          <meta http-equiv="X-UA-Compatible" content="IE=edge" />
          <meta name="viewport" content="width=device-width, initial-scale=1.0" />
          <title>HNFOOD</title>
          <!-- CSS -->
          <link rel="stylesheet" href="topbar/css/topbar.css" />
          <!-- Unicons CSS -->
          <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
          <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
          <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
          <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
          <script src="topbar/js/script.js" defer></script>
        </head>
<body class="header">
	<nav class="nav">
            <i class="uil uil-bars navOpenBtn"></i>
            <a class="logo" href="foodinfo.php"><b>HNFoods</b></a>
            <!-- MENU của bài</!-->
            <ul class="nav-links">
              <i class="uil uil-times navCloseBtn"></i>
              <li><a href="foodinfo.php">Home</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">Products</a></li>
              <li><a href="#">About Us</a></li>
              <li><a href="">Contact Us</a></li>
            </ul>
            <!--</!-->

           <!-- hiện thị thanh tìm kiếm </!-->
            <i class="uil uil-search search-icon" id="searchIcon"></i>
            <div class="search-box">
              <i class="uil uil-search search-icon"></i>
              <input type="text" placeholder="Search here..." />
            </div>
            <!--</!-->

            <!--phần đăng nhập</!-->
            <div class="main">
              <?php if(!isset($_SESSION['dangnhap'])){  ?>

          <a href="login/login.php" class="user"><i class="ri-user-fill"></i>Sign in</a>
        <a href="register/register.php">Register</a>

      <?php session_destroy();}else{ ?>
        <i class="ri-user-fill" style=" color: orange;font-size: 28px;margin-right: 7px;"></i>
        <b><u style="text-decoration: none; font-size: 1.2rem;"> <?php echo $_SESSION['dangnhap'] ?></u></b>
  <a href="?login=dangxuat">Đăng xuất</a>
  <?php 
    if(isset($_GET['login'])){
    $dangxuat = $_GET['login'];
     }else{
        $dangxuat = '';
     }
     if($dangxuat=='dangxuat'){
        session_destroy();
        header('Location: foodinfo.php');
     }
    } ?>
  </div>
      

  </div>
</div>
        
        <div class="bx bx-menu" id="menu-icon"></div>
       
  </div>
      </div>
            <!--</!-->
  
      </nav>
</body>
</html>