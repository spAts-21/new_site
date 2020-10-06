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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>



<style type="text/css">
	@media all and (min-width: 250px)
	{
	.heading{
		text-align:center; text-decoration: underline}
		.content{ border:1px solid grey;width:50%;height:230px;position: relative;margin:10px auto;}
	#image{float:left;border:2px solid black; width:20%;margin:20px;}
	.post-preview{padding:10px; }
	.btn{border:1px solid blue; background:#006669;color:white;padding:0.4rem 1rem;position:absolute;right:10px;bottom:10px;
  }
  .preview-text{
    word-break: break-all;
  }

	}
	@media only screen and (min-width: 100px)
	{
		.content{width:60%;height:300px;}
	}
	
</style>
</head>

<body>
	<h1 class="heading">RECENT POSTS</h1><br><br>
  <?php 
    for($i=0; $i<sizeof($title); $i++){
      echo '<div class="content">
		<img src="uploads/'.$image[$i].'"
		
		 height="70%" width="20%" class="img-responsive img-rounded" id="image">
         
         <div class="post-preview">
		 <h2 class="title"><a href="single.php" class="link">'.$title[$i].'</a></h2>
		 <i class="far fa-user">'.$name[$i].'</i>
		 &nbsp;
		 <i class="far calender">'.date("d/m/Y",strtotime($date[$i])).'</i>

		 <p class="preview-text">'.$blog[$i].'</p>

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
   


</body></html>
