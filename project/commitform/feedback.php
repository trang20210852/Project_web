
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="css/style.css">
</head>
 <?php include "../topbar/topbar.php" ?>
 <?php 
      include "../connect_database/connect_db.php";
      //chưa có bảng feedback nên thử user
      $query = "SELECT * FROM public.users ";
	  $result = pg_query($db_connection, $query) ;

 ?>

<body class="commentpost">
	<div class="comment-session">
		<?php while($row = pg_fetch_array($result)){?>
		<div class="post-comment">
			<div class="list">
				<div class="user">
					<div class="image"><img src="<?php echo $row['avatar']; ?>" alt="image"></div>
						<div class="user-meta">
							<div class="name"><?php echo $row['name']; ?></div>
							<div class="day">3 day ago</div>
						</div>
				</div>
				<div class="comment-post"><?php echo $row['password']; ?></div>
			</div>
		</div>
	<?php } ?>
		<?php if(isset($_SESSION['dangnhap'])){ ?>
		<div class="comment-box">
			<ul id="form-messages"></ul>
			<div class="user">
				<div class="image"><img src="<?php echo $_SESSION['img'] ?>" alt=""></div>
				<div class="name"><?php echo $_SESSION['dangnhap'] ?></div>
			</div>
			<form method="post">
				<textarea name="comment" cols="30" rows="10" placeholder="Your Comment" id="commentcheck" spellcheck="false"></textarea>
				 <button type="submit" id="btn-submit">Feedback</button>
			</form>
<script>
        const form = {
            comment: document.getElementById('commentcheck'),
            submit: document.getElementById('btn-submit'),
            messages: document.getElementById('form-messages')
        };

        form.submit.addEventListener('click', () => {
            const request = new XMLHttpRequest();
            request.onload = () => {
                let responseObject = null;

                try {
                    responseObject = JSON.parse(request.responseText);
                } catch (e) {
                    console.error('Could not parse JSON!');
                }

                if (responseObject) {
                    handleResponse(responseObject);
                }
            };

            const requestData = `comment=${form.comment.value}`;

            request.open('post', 'check.php');
            request.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            request.send(requestData);
        });

        function handleResponse (responseObject) {
            if (responseObject.ok) {
                location.href = 'feedback.php';
            } else {
                while (form.messages.firstChild) {
                    form.messages.removeChild(form.messages.firstChild);
                }
                responseObject.messages.forEach((message) => {
                    alert(message);             
                });

                
            }
        }
    </script>
		</div>
	<?php } ?>
	</div>
	 <?php include "../footer/footer.php" ?>
</body>
 
</html>