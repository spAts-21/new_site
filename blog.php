<?php 



include 'connect.inc.php';



$query="SELECT id,author,date,title,content,image from blog order by id DESC";

$query_run=mysqli_query($connection,$query);



// $col=mysqli_fetch_assoc($query_run);



$count=0;

while($col=mysqli_fetch_assoc($query_run))

{

 $id[$count]=$col['id'];

 $name[$count]=$col['author'];

 $date[$count]=$col['date'];

 $title[$count]=$col['title'];

 $blog[$count]=$col['content'];

 $image[$count]=$col['image'];

//  $id[$count]=$col['id'];

 $count++;

}



// $col=mysqli_fetch_assoc($query_run);

// {

//   @$row0[$count]=$col['id'];

// @$row1[$count]=$col['name'];

//  @$row2[$count]=$col['date'];

//  @$row3[$count]=$col['title'];

//  @$row4[$count]=$col['blog'];

//  @$row5[$count]=$col['image'];



// $count++;

// }

 















 



?>



<html>

<head>

<script type="text/javascript">

// 	function ajaxFunction(id) {

//     var xhttp;

//     if (window.XMLHttpRequest) {

//       // code for modern browsers

//       xhttp = new XMLHttpRequest();

//     } else {

//       // code for IE6, IE5

//       xhttp = new ActiveXObject("Microsoft.XMLHTTP");

//     }

//     xhttp.onreadystatechange = function() {

//       if (this.readyState == 4 && this.status == 200) {

//         document.getElementById("demo").innerHTML = this.responseText;

//       }

//     };

//     xhttp.open("GET", "single.php?id="+id, true);

//     xhttp.send(null);

//  }







</script>













































































<title>Recent posts</title>







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
    background-image: url("./img/space2.png");
    font-size:1.5rem!important;
    background-repeat: no-repeat;
    background-size:cover;
  }
  .content{
    background-color: rgba(0, 0, 0, 0.479);
  }
  .btn{
    font-size:1.5rem!important;
  }
  h2{
    font-size:3rem!important;
  }
	.content-wrapper{
		background-color:rgba(0, 0, 0, 0.479);
    color: white;
    padding: 0 1% 0 1%;
    font-family: 'Rubik', sans-serif;
    padding-bottom:5rem ;
    min-height:70%;
	}
	.footer-content
{
  margin: 0 auto;
}
.cp{
  color: white;
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

	@media all and (min-width: 250px)

	{

	.heading{

		text-align:center; text-decoration: underline;
		font-size:45px;}

		.content{ border:1px solid grey;width:50%;height:230px;position: relative;margin:10px auto;}

	#image{float:left;border:2px solid black; width:20%;margin:20px;}

	.post-preview{overflow: hidden;padding:10px;max-height:80%; }

	.btn{ background:blue;color:white;padding:0.4rem 1rem;position:absolute;right:10px;bottom:10px;

  }
  .btn:hover{
    background-color: #0069d9;
    text-decoration:none;
    color:white;
  }
  .preview-text{
    color:white!important;
    word-break: break-all;
    overflow:hidden;
    max-height:70%;
    text-overflow:ellipsis;
  }

.navbar{
 margin-bottom:0!important;
}

	

	@media only screen and (min-width: 100px)

	{

		.content{width:80%;height:300px;
    overflow:hidden;
    text-overflow:ellipsis;}

	}
.post-preview h2 a{
  text-decoration:none;
  color:white;
}
	
.dt{
  position:absolute;
  bottom:15px;
  left:5%;
  max-width:50%;
}
.navbar-brand{
  height:auto!important;
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
                  <a class="nav-link" href="index.html">HOME <span class="sr-only">(current)</span></a>
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
	<div class="content-wrapper">

	<h1 class="heading">RECENT POSTS</h1><br><br>

  <?php 

    for($i=0; $i<sizeof($title); $i++){

      echo '<div class="content">

		<img src="uploads/'.$image[$i].'"

		

		 height="70%" width="20%" class="img-responsive img-rounded" id="image">

         

         <div class="post-preview">

		 <h2 class="title">'.$title[$i].'</h2>

		 <p>'.$name[$i].'</p>

		 &nbsp;
  
		

     



     <a href="single.php?id='.$id[$i].'" class="btn">Read more</a>

   

		</div>
   
   </div>

<br><br>';

    }



    mysqli_close($connection);

  ?>

  

  <!-- <form>

     <input class="btn" type = "button" onclick = "ajaxFunction('.$id[$i].')" value = "Read more"/>

     </form> -->

   




</div>
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
        
</body></html>

