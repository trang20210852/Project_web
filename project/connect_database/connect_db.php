<?php
$host = "localhost";
$user ="postgres";
$pass = "23052001";	
$db = "project_web";
$db_connection = pg_connect("host=$host port=5432 dbname=$db user=$user password=$pass") or die ("could not connect to Server\n");      
?>