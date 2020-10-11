<?php
$mysql_host='localhost';
$mysql_user='id14822582_varun';
$mysql_pass=')gcbEGvOiz1gMZuR';
$mysql_db='id14822582_a_database';

$connection=mysqli_connect($mysql_host,$mysql_user,$mysql_pass);

if(!mysqli_connect($mysql_host,$mysql_user,$mysql_pass) || !mysqli_select_db($connection,$mysql_db))
{
echo 'error';
}

	
?>