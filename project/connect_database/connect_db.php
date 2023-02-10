<?php
$host = "localhost";
$user ="postgres";
$pass = "root";	
$db = "Web_LT";
$db_connection = pg_connect("host=$host port=5432 dbname=$db user=$user password=$pass") or die ("could not connect to Server\n");      
?>