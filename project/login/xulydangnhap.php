<?php
//Khai báo sử dụng session
session_start();
//Khai báo utf-8 để hiển thị được tiếng việt
header('Content-Type: text/html; charset=UTF-8');
//Xử lý đăng nhập
if (isset($_POST['dangnhap']))
{
//Kết nối tới database
$db_connection = pg_connect("host=localhost dbname=postgres user=postgres password=postgres");

//Lấy dữ liệu nhập vào
	$username = addslashes($_POST['username']);
	$password = addslashes($_POST['password']);

//Kiểm tra đã nhập đủ tên đăng nhập với mật khẩu chưa
	if (!$username || !$password) {

		echo "Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu. <a href='javascript: history.go(-1)'>Trở lại</a>";
		exit;
	}

	$query = "SELECT * FROM public.users WHERE username = '$username' ";

	$result = pg_query($db_connection, $query) ;

	if (pg_num_rows($result) == 0)
	{
		echo "<div class=\"signup-link\"><b style = \"color: red\">Sai tên đăng nhập hoặc mật khẩu <a href='javascript: history.go(-1)'>Trở lại</a></b></div>";

// Dừng chương trình
		die ();
	}

	else {
		$row = pg_fetch_object($result)  ;
		if ($password != "$row->password" ) {
			echo "<div class=\"signup-link\"><b style = \"color: red\">Mật khẩu không đúng ! <a href='javascript: history.go(-1)'>Trở lại</a></b></div>";
		}

		else{
			
			$_SESSION['dangnhap'] = $row->name;
			$_SESSION['username'] = $row->username;

				// header('Location: dashboard.php');
			header("location:../trangchu/foodinfo.php");
		}
	}  
//Lấy mật khẩu trong database ra

	die();
	$connect->close();
}
?>