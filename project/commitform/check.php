<?php
     session_start();
     include "../connect_database/connect_db.php";
function isBadWord($text)
{

//First we list the bad words in array
$badwords = array('truck','fuck','cút','đm','còn cái nịt','web chán v','shit','có con cặc');
//Then we perform the bad word check
foreach($badwords as $badwords)
{
if(stristr($text,$badwords))
{
return true;
}
}
return false;
}
    $comment = isset($_POST['comment']) ? $_POST['comment'] : '';

    $ok = true;
    $messages = array();

    if ( !isset($comment) || empty($comment) ) {
        $ok = false;
        $messages[] = 'bạn chưa feedback!';
    }
    else{ 
        $ok = false;
        $text = $_POST['comment'];
        if(isBadWord($text))
        {
             $messages[] = 'có badwords!';
        }
        else
        {
            $ok = true;
            $messages[] = 'Successful login!';
            //cái này sẽ insert vào bảng feedback
            // $username ='saokcao';
            // $name = 'adsdsa';
            // $sql = "INSERT INTO public.users (username, password, name) VALUES ('$username', '$text', '$name')";
            // $result = pg_query($db_connection, $sql) ;
             
        } 
    }
    echo json_encode(
        array(
            'ok' => $ok,
            'messages' => $messages
        )
    );

?>