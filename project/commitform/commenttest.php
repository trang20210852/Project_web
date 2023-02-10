
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
 	if(($_POST['comment']=='')){
 		echo '<script language="javascript">alert("Bạn chưa feedback!"); window.location="../commitform/commenttest.php";</script>';

 	}else{  ?>
 <script type="text/javascript">
// Enter the words to be filtered in the line below:
var swear_words_arr=new Array("bloody","war","terror","fuck");
var swear_alert_arr=new Array;
var swear_alert_count=0;
function reset_alert_count()
{
 swear_alert_count=0;
}
function validate_text()
{
 reset_alert_count();
 var compare_text=document.form1.text.value;
 for(var i=0; i<swear_words_arr.length; i++)
 {
  for(var j=0; j<(compare_text.length); j++)
  {
   if(swear_words_arr[i]==compare_text.substring(j,(j+swear_words_arr[i].length)).toLowerCase())
   {
    swear_alert_arr[swear_alert_count]=compare_text.substring(j,(j+swear_words_arr[i].length));
    swear_alert_count++;
   }
  }
 }
 var alert_text="";
 for(var k=1; k<=swear_alert_count; k++)
 {
  alert_text+="\n" + "(" + k + ")  " + swear_alert_arr[k-1];
 }
 if(swear_alert_count>0)
 {
  alert("The message will not be sent!!!\nThe following illegal words were found:\n_______________________________\n" + alert_text + "\n_______________________________");
  
 }
 else
 { 
  alert("sent the mess");
 }
}
function select_area()
{
 document.form1.text.select();
}
window.onload=reset_alert_count;
</script>
 
<?php }
}
 ?>
<body class="commentpost">
	<div class="comment-session">
		<div class="post-comment">
			<div class="list">
				<div class="user">
					<div class="image"><img src="../images/avatar.jpg" alt="image"></div>
						<div class="user-meta">
							<div class="name">nameđ d</div>
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
				<textarea name="comment" id="" cols="30" rows="10" placeholder="Your Comment" onClick="select_area()"></textarea>
				<input type="submit"  name ="commentsubmit"  value="Feedback"  onClick="validate_text();">
			</form>
		</div>
	<?php } ?>
	</div>
	 <?php include "../footer/footer.php" ?>
</body>

</html>