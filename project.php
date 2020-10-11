<html>

<head>

<title>ADD BLOG</title>





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
}
.container-fluid{
  color:white;
  font-family: 'Rubik', sans-serif;
    padding-bottom:5rem ;
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
.btn{ background:blue;color:white;padding:0.4rem 1rem;position:absolute;right:10px;bottom:10px;

}
.btn:hover{
  background-color: #0069d9;
  text-decoration:none;
  color:white;
}

  @media all and (min-width: 250px)





  {

    .form{color:white;padding:40px;width:30%;position:relative;top:50px;left:35%;right:67%;background-color: rgba(0, 0, 0, 0.479);}

    .btn{padding:0.4rem 1rem;}

    .head{text-align:center; padding-top:30px;line-height: 30px;font-size: 50px;text-decoration: underline;}

  }



  @media screen and (max-width:500px){

.form{background-size:100% 100%;width:90%;left:10%;padding:30px;}

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
                      <a class="dropdown-item" href="abt_spats.html">SPATS</a>
                      <a class="dropdown-item" href="abt_fqtq.html">FQTQ</a>
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
                  <a class="nav-link" href="blog.html">BLOG</a>
                </li>
                <li class="nav-item active dropdown">
                  <a class="nav-link" href="gov.html">MEMBERS</a>
                </li>
               </ul>
               <ul class="nav navbar-nav ml-auto w-100 justify-content-end">
               <span class="navbar-text">
                <li class="nav-item" ><a href="comingsoon.html"><span class="fa fa-sign-in"></span> LOGIN</a></li>
               </span>
               </ul>
            </div>
          </nav>


  <div class="container-fluid">



  <h1 class="head" >ADD BLOG</h1>



<div class="form">

<form action="project.php" method="POST" enctype="multipart/form-data" class="res">





NAME: <input type="text" name="urname" value="<?php if (isset($_POST['urname'])){echo $_POST['urname'];} ?>"> <br><br>

DATE: <input type="date" name="date" value="<?php if (isset($_POST['date'])){echo $_POST['date'];} ?>"><br><br>

TITLE: <input type="text" name="title" value="<?php if (isset($_POST['title'])){echo $_POST['title'];} ?>"><br><br>

BLOG : <br><textarea name="blogs" rows="16" cols="24" value="<?php if (isset($_POST['blogs'])){echo $_POST['blogs'];} ?>"></textarea><br><br>

IMAGE : <input type="file" name="file" id="image" ><br><br>









<input type="submit" value="Submit" class="btn" >



</form>



</div>

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
</body>

</html>





<?php 



 include 'connect.inc.php';

 @$name=$_FILES['file']['name'];

    

  @$tmp_name=$_FILES['file']['tmp_name'];

  @$title=$_POST['title'];



    @ $type=$_FILES['file']['type'];

    @ $extension=strtolower(substr($name,strpos($name,'.')));

   @$urname=$_POST['urname'];

  @$date=$_POST['date'];



   @$title=$_POST['title'];

   



   @$blogs=$_POST['blogs'];













  

  

  

if (isset($_POST['title']) && isset($name) && isset($_POST['blogs']) && isset($_POST['urname']) && isset($_POST['date']))





{

  $urname=$_POST['urname'];

  $date=$_POST['date'];



   $title=$_POST['title'];



   $blogs=$_POST['blogs'];





   if(!empty($urname) && !empty($date) && !empty($title) && !empty($blogs) && !empty($name))

   {

    if(($extension=='.jpg'||$extension=='.jpeg'||$extension=='.png')&&($type=='image/jpg'||$type=='image/png'||$type=='image/jpeg'))

    {



       

       $sql = "INSERT INTO blog (author, date, title,content,image) values('$urname','$date','$title','$blogs','$name')";

      //  $query_run= mysqli_query($connection,$sql);



      mysqli_query($connection, $sql)? print("New record created successfully"):print("Error: ".mysqli_error($connection)."end");

  

      

        $location="uploads/";



       if(move_uploaded_file($tmp_name, $location.$name))

       {

       	echo 'uploaded';

       }

          else



          {

          	echo 'issue';

          }



     }

     else

     {

      echo 'file must be jgp or png format';

     }

    } 

     else

     {

     	echo 'please fill in credentials';

     }

  }  



?>









