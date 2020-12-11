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
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

	<link rel="stylesheet" href="styles/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>



	<style type="text/css">
	 @import url('https://fonts.googleapis.com/css2?family=Rubik&display=swap');
	  body{
		  background-color:black;
      overflow-wrap:break-spaces;
      background-image: url("./img/space2.png");
      background-repeat: no-repeat;
    background-size:cover;
	  }
    .row{
      padding-left:0px!important;
    }
    .navbar-brand{
  height:auto!important;
}
	  .head{
		  font-size:25px;
		  color:white;
	  }
	  .content{
        color: white;
    font-family: 'Rubik', sans-serif;
	  }
	  .footer-content
{
  margin: 0 auto;
}
.cp{
  color: white;
  white-space:break-spaces;
}
.footer-content ul li{
  display: inline;
  padding: 10px 10px 10px 10px;
}
.fa{
 color: white;
}
.sticky-bottom
{
  background-color: black!important;
}
.row 
{
   padding-left:50px;
}
.blog{
  color:white!important;
}
table{
  color:white;
  width:50%;
  margin:auto;
}
table,tr,td{
  border:1px solid;
}
.col-sm-12 img{
  display:block;
  margin:auto;
  width:40%;
  border:2.5px solid;
  max-height:50vw;
}

@media all and (min-width: 250px)

		{



			.head{text-align:center; padding-top:40px;line-height: 30px;font-size: 55px;text-decoration: underline;}

			.content{width:60%;position:relative;top:50px;left:20%;font-style:arial;font-size:18px;line-height: 23px;}

			#image{position: relative;left:38%;border:2px solid black;}

		}

		@media only screen and (min-width: 100px)

		{

			.head{line-height: 60px;}

		}

	</style>

</head>

<body>
<nav class="navbar  navbar-expand-lg navbar-dark bg-transparent">
            <a class="navbar-brand d-flex w-50 mr-auto" href="#"><img src="img/logo.png"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse w-100" id="navbarNav">
              <ul class="navbar-nav mr-auto w-100 justify-content-center">
                <li class="nav-item active">
                  <a class="nav-link" href="index.php">HOME <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      ABOUT
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="spats.html">SPATS</a>
                      <a class="dropdown-item" href="fqtq.html">FQTQ</a>
                    </div>
                </li>
                <li class="nav-item active dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      PREVIOUS ACTIVITIES
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="skygazing.html">SKY GAZING</a>
                      <a class="dropdown-item" href="http://nssc.in/">NSSC</a>
                    </div>
                  </li>
                <li class="nav-item active ">
                  <a class="nav-link" href="blog.php">BLOG</a>
                </li>
                <li class="nav-item active dropdown">
                  <a class="nav-link" href="governer.html">MEMBERS</a>
                </li>
               </ul>
               <ul class="nav navbar-nav ml-auto w-100 justify-content-end">
               <span class="navbar-text">
                <li class="nav-item" ><a href="comingsoon.html"><span class="fa fa-sign-in"></span> LOGIN</a></li>
               </span>
               </ul>
            </div>
          </nav>

	<h1 class="head"><?php echo $title; ?></h1><br><br>


	<div class="content">

  <p class="blog"><div class="row"><div class="col-sm-12"><?php echo $content; ?></p>
  </div>
  </div>


	<footer>- <?php echo date("F jS\, Y",strtotime($date)); ?></footer>

	
	<nav class="navbar sticky-bottom navbar-dark bg-dark">
              <div class="footer-content">
                <ul class="footr justify-content-center">

                  <li><a href="https://www.facebook.com/spAts.iitkgp"><i class="fa fa-facebook-f"></i></a></li>
                  <li><a href=""><i class="fa fa-twitter"></i></a></li>
                  <li><a href="https://www.linkedin.com/company/spats/"><i class="fa fa-linkedin"></i></a></li>
                  <li><a href="https://www.instagram.com/spats.iitkgp/"><i class="fa fa-instagram"></i></a></li>
                </ul>
                <p class="cp">&copy; Space Technology Students' Society</p>
              </div>
            </nav>
</div>

</body>

</html>



