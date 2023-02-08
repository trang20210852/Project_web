
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
        <body>
          <!--header</!-->
          <?php include "../topbar/topbar.php" ?>
          <!--end of header</!-->
           <?php
              $username = $_SESSION['username'];
              $db_connection = pg_connect("host=localhost dbname=project_web user=postgres password=23052001");
              $query = "SELECT * FROM public.users WHERE username = '$username' ";
              $result = pg_query($db_connection, $query) ;
              $row = pg_fetch_object($result);
              echo '<section class= "card" >';
                echo '<img src="../images/avatar.jpg" alt="John" style="width:100%">' ;
                echo '<h1>' . $row->name . '</h1>';
                echo '<p>'. $row->username.'</p>';
                echo ' <p>Địa chỉ: '. $row->address .'</p>';
                echo ' <p>Tel: '. $row->telephone_num .'</p>';
                echo  '<p><a href= "../userinfoupdate/userinfo.php" class="button" ><button>Chỉnh sửa</button></a></p> '; 
              echo'</section>';
                  
                
          ?> 
          
       <!-- footer-->
          <?php include "../footer/footer.php" ?>

 <!-- end of footer -->
    </body>
  </html>
