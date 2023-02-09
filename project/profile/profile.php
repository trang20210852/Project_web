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
          <!-- Unicons CSS -->
          <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
          <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
          <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
          <script src="js/script.js" defer></script>
        </head>
         
          <body class="profile">
          <?php         
              $username = $_SESSION['username'];
              $host = "localhost";
              $user ="postgres";
              $pass = "root";	
              $db = "Web_LT";
              $db_connection = pg_connect("host=$host port=5432 dbname=$db user=$user password=$pass") or die ("could not connect to Server\n");              $query = "SELECT * FROM public.users WHERE username = '$username' ";
              $result = pg_query($db_connection, $query) ;
              $row = pg_fetch_object($result);
         
          ?>
         
    <div class="container">
      <div class="box">
      <div class="image">
         <img src="<?php echo $_SESSION['img'] ?>">
        </div>
        <div class="name_job">David Chrish</div>
        <div class="rating">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="far fa-star"></i>
          <i class="far fa-star"></i>
          <i class="far fa-star"></i>
        </div>
        <p> Lorem ipsum dolor sitamet, stphen hawkin so adipisicing elit. Ratione disuja doloremque reiciendi nemo.</p>
        <div class="btns">
          <a href="../userinfoupdate/userinfo.php"><button>Chỉnh sửa thông tin</button></a>
        </div>
      </div>
      
      <div class="box1">
       
      </div>
    </div>

         </body> 
          </html>
          
       <!-- footer-->
          <?php include "../footer/footer.php" ?>

 <!-- end of footer -->

