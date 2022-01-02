<?php
include_once 'dbConnection.php';
ob_start();
$size  = $_POST['teamlength'];
$size     = stripslashes($size);
$size     = addslashes($size);

if($size == "2"){
    $name1     = $_POST['name1'];
    $name1     = ucwords(strtolower($name1));
    $gender1   = $_POST['gender1'];
    $phno1     = $_POST['phno1'];
    $branch1   = $_POST['branch1'];
    $rollno1   = $_POST['rollno1'];
    $email1   = $_POST['email1'];
    $name1     = stripslashes($name1);
    $name1     = addslashes($name1);
    $name1     = ucwords(strtolower($name1));
    $gender1   = stripslashes($gender1);
    $gender1   = addslashes($gender1);
    $phno1     = stripslashes($phno1);
    $phno1     = addslashes($phno1);


    $name2     = $_POST['name2'];
    $name2     = ucwords(strtolower($name2));
    $gender2   = $_POST['gender2'];
    $phno2     = $_POST['phno2'];
    $branch2   = $_POST['branch2'];
    $rollno2   = $_POST['rollno2'];
    $email2   = $_POST['email2'];
    $name2     = stripslashes($name2);
    $name2     = addslashes($name2);
    $name2     = ucwords(strtolower($name2));
    $gender2   = stripslashes($gender2);
    $gender2   = addslashes($gender2);
    $phno2     = stripslashes($phno2);
    $phno2     = addslashes($phno2);

    $teamname = $_POST['teamname'];
    $password = $_POST['password'];
    $teamname = stripslashes($teamname);
    $teamname = addslashes($teamname);

    $password = stripslashes($password);
    $password = addslashes($password);
    $password = md5($password);

    // $q3 = mysqli_query($con, "INSERT INTO user VALUES  (NULL,2,'$name1', '$rollno1','$branch1','$gender1','$phno1','$email1' ,'$name2', '$rollno2','$branch2','$gender2','$phno2','$email2' ,'$teamname' , '$password')");

    $q3 = mysqli_query($con, "INSERT INTO user (id,size ,name1, rollno1, branch1, gender1, teamname, phno1, password,email1,name2, rollno2, branch2, gender2, phno2,email2) VALUES
    (NULL,2, '$name1', '$rollno1', '$branch1', '$gender1', '$teamname', '$phno1', '$password','$email1','$name2','$rollno2','$branch2','$gender2','$phno2','$email2')");

    if ($q3) {
        header("location:successful.html");
    
    } else {
        header("location:registration.php?q7=Team Name already exists. Please choose another&name1=$name1&gender1=$gender1&phno1=$phno1&branch1=$branch1&rollno1=$rollno1&email1=$email1&name1=$name2&gender2=$gender2&phno2=$phno2&branch2=$branch2&rollno2=$rollno2&email2=$email2&teamname=$teamname");
        // echo 'team not inserted';
    }

}else{
    $name1     = $_POST['name1'];
    $name1     = ucwords(strtolower($name1));
    $gender1   = $_POST['gender1'];
    $phno1     = $_POST['phno1'];
    $branch1   = $_POST['branch1'];
    $rollno1   = $_POST['rollno1'];
    $email1   = $_POST['email1'];
    $name1     = stripslashes($name1);
    $name1     = addslashes($name1);
    $name1     = ucwords(strtolower($name1));
    $gender1   = stripslashes($gender1);
    $gender1   = addslashes($gender1);
    $phno1     = stripslashes($phno1);
    $phno1     = addslashes($phno1);


    $teamname = $_POST['teamname'];
    $password = $_POST['password'];

    $teamname = stripslashes($teamname);
    $teamname = addslashes($teamname);

    $password = stripslashes($password);
    $password = addslashes($password);
    $password = md5($password);

    $q3 = mysqli_query($con, "INSERT INTO user (id,size ,name1, rollno1, branch1, gender1, teamname, phno1, password,email1,time) VALUES
    (NULL,1, '$name1', '$rollno1', '$branch1', '$gender1', '$teamname', '$phno1', '$password','$email1',NOW())");

    if ($q3) {
        header("location:successful.html");
    
    } else {
        header("location:registration.php?q7=Team Name already exists. Please choose another&name1=$name1&gender1=$gender1&phno1=$phno1&branch1=$branch1&rollno1=$rollno1&email1=$email1&teamname=$teamname");
        // echo $q3;
        // echo 'single user not inserted';
    }
}


ob_end_flush();
?>