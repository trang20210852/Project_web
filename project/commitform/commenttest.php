
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="css/style.css">
</head>
 <?php include "../topbar/topbar.php" ?>
 <?php if (isset($_POST['commentsubmit']))
 {
 	if(isset($_POST['comment'])){
 		echo '<script language="javascript">alert("Bạn chưa comment!"); window.location="../commitform/commenttest.php";</script>';

 	}
 }
 ?>
<body class="commentpost">
	<div class="comment-session">
		<div class="post-comment">
			<div class="list">
				<div class="user">
					<div class="image"><img src="../images/avatar.jpg" alt="image"></div>
						<div class="user-meta">
							<div class="name">name</div>
							<div class="day">3 day ago</div>
						</div>
				</div>
				<div class="comment-post">fafadasda</div>
			</div>
		</div>
		<?php if(isset($_SESSION['dangnhap'])){ ?>
		<div class="comment-box">
			<div class="user">
				<div class="image"><img src="../images/avatar.jpg" alt=""></div>
				<div class="name"><?php echo $_SESSION['dangnhap'] ?></div>
			</div>
			<form action="" method="post">
				<textarea name="comment" id="" cols="30" rows="10" placeholder="Your Comment"></textarea>
				<input type="submit"  name ="commentsubmit" value="Feedback">
			</form>
		</div>
	<?php } ?>
	</div>
	 <?php include "../footer/footer.php" ?>
</body>

</html>