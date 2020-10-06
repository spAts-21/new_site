<?php

//stablising the connection with database
include 'connect.inc.php';


$id = $_GET["id"];
// $id = mysql_real_escape_string($id_1);

//fetching the data of passed id
@$query="SELECT author,date,title,content,image from blog where id='$id'";
$query_run=mysqli_query($connection,$query); // connection

@$col=mysqli_fetch_assoc($query_run); // result of query

// varaibles
 $author=$col['author'];
 $date=$col['date'];
 $title=$col['title'];
 $content=$col['content'];
 $img=$col['image'];

?>








<html>
<head>
	<title><?php echo $title; ?> </title>



    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

	<style type="text/css">
		@media all and (min-width: 250px)
		{

			.head{text-align:center; padding-top:40px;line-height: 30px;font-size: 55px;text-decoration: underline;}
			.content{width:50%;position:relative;top:50px;left:25%;font-style:arial;font-size:18px;line-height: 23px;}
			#image{position: relative;left:38%;border:2px solid black;}
		}
		@media only screen and (min-width: 100px)
		{
			.head{line-height: 60px;}
		}
	</style>
</head>
<body>
	<h1 class="head"><?php echo $author; ?></h1><br><br>
	<img src="<?php echo $img; ?>" id="image" width="20%" height="30%" class="img-responsive img-rounded">
	<br>
	<div class="content">
	<p class="blog"><?php echo $content; ?></p>
	<footer>- <?php echo date("d/m/Y",strtotime($date)); ?></footer>
	
</div>
</body>
</html>

