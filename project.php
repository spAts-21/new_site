<html>
<head>
<title>ADD BLOG</title>


    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>


<style type="text/css">
  @media all and (min-width: 250px)


  {
    .form{padding:40px;width:30%;position:relative;top:50px;left:35%;right:67%;color:black; background-width:30%;background-color: grey;}
    .btn{padding:0.4rem 1rem;}
    .head{text-align:center; padding-top:30px;line-height: 30px;font-size: 50px;text-decoration: underline;}
  }

  @media screen and (max-width:500px){
.form{background-size:100% 100%;width:90%;left:10%;padding:30px;}
}

 

   

</style>
</head>









<body>

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




