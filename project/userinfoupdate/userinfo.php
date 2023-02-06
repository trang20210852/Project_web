<?php 
   session_start();
   $db_connection = pg_connect("host=localhost dbname=postgres user=postgres password=postgres");
  if(!isset($_SESSION['dangnhap'])){
        header('Location: ../trangchu/foodinfo.php');
    } 
    if(isset($_GET['login'])){
    $dangxuat = $_GET['login'];
     }else{
        $dangxuat = '';
     }
     if($dangxuat=='dangxuat'){
        session_destroy();
        header('Location: ../trangchu/foodinfo.php');
     }
if (isset($_POST['capnhap'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $password = $_POST['password'];
  $address = $_POST['diachi'];
  $anhdaidien = $_POST['anhdaidien'];
  $query ="UPDATE users SET username = '$email', password = '$password', name = '$name', telephone_num ='$phone', address ='$address', avatar='$anhdaidien' WHERE username = '$_SESSION[username]'";
    $result1 = pg_query($db_connection, $query);
    echo"<script>alert('Successfully uploaded!')</script>";
      
      header('Location: ../trangchu/foodinfo.php');
    $_SESSION['dangnhap'] = $name;
    $row1 = pg_fetch_object($result1);

}
$sql = "SELECT * FROM users WHERE username = '$_SESSION[username]'";
$result = pg_query($db_connection, $sql) ;
$row = pg_fetch_object($result);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/userinfo.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <i class="logo"><b>HNFoods</b></i>
  <div class="container">
    <div class="title">Cập nhập thông tin</div>
    <div class="content">
      <form method="POST">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Name</span>
            <input type="text" placeholder="Enter your name" name ="name" value="<?php  echo"$row->name"; ?>" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="email" placeholder="Enter your email"  name="email"value="<?php  echo"$row->username"; ?>" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="number" placeholder="Enter your number"  name ="phone" value="<?php  echo"$row->telephone_num"; ?>" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" placeholder="Enter your password" name ="password" value="<?php  echo"$row->password"; ?>"required>
          </div>
          <div class="input-box">
            <span class="details">Địa chỉ</span>
            <input type="text" placeholder="Enter your Address" name="diachi" value="<?php  echo"$row->address"; ?>" required>
          </div>
          
        </div>
        <div class="button">
          <input type="submit" name= "capnhap" value="Update">
        </div>
        <div class="signup-link"><a href="../trangchu/foodinfo.php">Quay lại trang chủ</a></div>
      </form>
    </div>
  </div>

</body>
</html>