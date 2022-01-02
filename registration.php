<?php 
    session_start();
    if(isset($_SESSION["teamname"])){
        header("location:quiz.php");
    }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="favicon.ico" type="image/icon">
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <link rel="stylesheet" href="./css/registration.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <title>Quiz Registration</title>

    
    <script>
        
        function validateForm() {

            var size = document.forms["form"]["teamlength"].value;

            if(size == "2"){
                var y2 = document.forms["form"]["name2"].value; 
                if (y2 == null || y2 == "") {
                    document.getElementById("errormsg").innerHTML="Name must be filled out.";
                    return false;
                }
                var br2 = document.forms["form"]["branch2"].value;
                if (br2 == "") {
                    document.getElementById("errormsg").innerHTML="Please select your branch";
                    return false;
                }
                var roll2 = document.forms["form"]["rollno2"].value;
                // if(charAt(0)!="2" || charAt(1)!="0"){
                //     document.getElementById("errormsg").innerHTML="You should be 1st year student";
                //     return false;
                // }
                var g2 = document.forms["form"]["gender2"].value;
                if (g2=="") {
                    document.getElementById("errormsg").innerHTML="Please select your gender";
                    return false;
                }
                var m2 = document.forms["form"]["phno2"].value;
                if (m2.length != 10) {
                    document.getElementById("errormsg").innerHTML="Phone number must be 10 digits long";
                    return false;
                }
                var email2 = document.forms["form"]["email2"].value;
                if(email2 == null || email2 == ""){
                    document.getElementById("errormsg").innerHTML="Email Id must be filled out";
                    return false;
                }
            }

            var y1 = document.forms["form"]["name1"].value; 
            if (y1 == null || y1 == "") {
                document.getElementById("errormsg").innerHTML="Name must be filled out.";
                return false;
            }
            var br1 = document.forms["form"]["branch1"].value;
            if (br1 == "") {
                document.getElementById("errormsg").innerHTML="Please select your branch";
                return false;
            }
            // var roll1 = document.forms["form"]["rollno1"].value;
            // if(charAt(0)!="2" || charAt(1)!="0"){
            //     document.getElementById("errormsg").innerHTML="You should be 1st year student";
            //     return false;
            // }
            var g1 = document.forms["form"]["gender1"].value;
            if (g1=="") {
                document.getElementById("errormsg").innerHTML="Please select your gender";
                return false;
            }
            var m1 = document.forms["form"]["phno1"].value;
            if (m1.length != 10) {
                document.getElementById("errormsg").innerHTML="Phone number must be 10 digits long";
                return false;
            }
            var email1 = document.forms["form"]["email1"].value;
            if(email1 == null || email1 == ""){
                document.getElementById("errormsg").innerHTML="Email Id must be filled out";
                return false;
            }            


            var x = document.forms["form"]["teamname"].value;
            if (x.length == 0) {
                document.getElementById("errormsg").innerHTML="Please enter a valid team name";
                return false;
            }
            if (x.length < 4) {
                document.getElementById("errormsg").innerHTML="team name must be at least 4 characters long";
                return false;
            }
            var a = document.forms["form"]["password"].value;
            if(a == null || a == ""){
                document.getElementById("errormsg").innerHTML="Password must be filled out";
                return false;
            }
            if(a.length<4 || a.length>15){
                document.getElementById("errormsg").innerHTML="Passwords must be 4 to 15 characters long.";
                return false;
            }
            var b = document.forms["form"]["cpassword"].value;
            if (a!=b){
                document.getElementById("errormsg").innerHTML="Passwords must match.";
                return false;
            }

        }

        function teamlen(){
            var teaml = document.getElementById("teamlength").value;
            if(teaml == "1"){
                var y2 = document.forms["form"]["name2"].style.display = "none"; 
                var l2 = document.getElementById("label-name2").style.display = "none";
                var l1 = document.getElementById("label-name1").style.display = "none";
                

                var r2 = document.getElementById("rollno2");
                var g2 = document.getElementById("gender2");
                var p2 = document.getElementById("phno2");
                var e2 = document.getElementById("email2");
                var b2 = document.getElementById("branch2");
                var tn = document.getElementById("team-notice");

                r2.style.display = "none";
                g2.style.display = "none";
                p2.style.display = "none";
                e2.style.display = "none";
                b2.style.display = "none";
                tn.style.display = "none";

                r2.value = "null";
                g2.value = "M";
                p2.value = "1234567890";
                e2.value = "sample@gamil.com";
                b2.value = "null";

                var tn = document.getElementById("team-notice").style.display = "none";
            }
            else if(teaml == "2"){
                var y2 = document.forms["form"]["name2"].style.display = "block"; 
                var l2 = document.getElementById("label-name2").style.display = "block";
                var l1 = document.getElementById("label-name1").style.display = "block";
                

                var r2 = document.getElementById("rollno2");
                var g2 = document.getElementById("gender2");
                var p2 = document.getElementById("phno2");
                var e2 = document.getElementById("email2");
                var b2 = document.getElementById("branch2");
                var tn = document.getElementById("team-notice");

                r2.style.display = "block";
                g2.style.display = "block";
                p2.style.display = "block";
                e2.style.display = "block";
                b2.style.display = "block";
                tn.style.display = "block";

                r2.value = null;
                // g2.value = ;
                p2.value = null;
                e2.value = null;
                b2.value = null;

                var tn = document.getElementById("team-notice").style.display = "block";
            }
            else{
                var y2 = document.forms["form"]["name2"].style.display = "none"; 
                var l2 = document.getElementById("label-name2").style.display = "none";
                var l1 = document.getElementById("label-name1").style.display = "none";
                
                var r2 = document.getElementById("rollno2");
                var g2 = document.getElementById("gender2");
                var p2 = document.getElementById("phno2");
                var e2 = document.getElementById("email2");
                var b2 = document.getElementById("branch2");
                var tn = document.getElementById("team-notice");

                r2.style.display = "none";
                g2.style.display = "none";
                p2.style.display = "none";
                e2.style.display = "none";
                b2.style.display = "none";
                tn.style.display = "none";

                r2.value = "null";
                // g2.value = "M";
                p2.value = "1234567890";
                e2.value = "sample@gamil.com";
                b2.value = "null";

                var tn = document.getElementById("team-notice").style.display = "none";
            }
        }

        function login(){
            var modal = document.getElementById("login-modal");
            modal.style.display = "flex";
            disableScroll();
            
        }

        function closeModal(){
            var modal = document.getElementById("login-modal");
            modal.style.display = "none";
            enableScroll();
        }

        <?php
            if (@$_GET['w']) {
                echo 'document.getElementById("login-modal").style.display = "flex";';
            }
        ?>
        
    </script>

</head>
<body>
    
    <header>
        <div class="header">
            <a href="http://spats.in"><img class="logo" src="./img/logo2.png" alt="spats"></a>
            <h2>Space Technology Students' Society</h2>
            <a class="login" onclick="login()">
                Login
            </a>
        </div>
    </header>
    <div class="quiz-registration">
        <div class="quiz-inner">
            <h2 class="title">Space Technology Students' Society</h2>
            <div id="title">
                <img src="./img/icon7.png" alt="" srcset="">
                <h1>Fresher's Space Quiz</h1>
                <p>18th-19th Dec 2020</p>
            </div>
            <form name="form" action="sign.php" onSubmit="return validateForm()" method="POST">
                <!-- <fieldset> -->
                    <div class="reg-title">
                            Registration
                    </div>

                    <div class="form-group">
                        <div style="color:red;">
                            <?php
                                if (@$_GET['q7']) {
                                    echo '<p style="color:red;">' . @$_GET['q7'].'</p>';
                                }
                            ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="teamlength"></label>
                        <div>
                            <select id="teamlength" name="teamlength" onchange="teamlen()" required placeholder="Select your number of team size" >
                                <option value="" <?php
                                    if (!isset($_GET['teamlength']))
                                        echo "selected";
                                ?>>Select team size</option>
                        
                                <option value="1" <?php
                                    if (isset($_GET['teamlength']))
                                        {
                                            if ($_GET['teamlength'] == "1")
                                                echo "selected";
                                        }
                                ?>>1 Member</option>

                                <option value="2" <?php
                                    if (isset($_GET['teamlength']))
                                        {
                                            if ($_GET['teamlength'] == "2")
                                                echo "selected";
                                        }
                                ?>>2 Members</option> 
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label id="label-name1" for="name1">1st Candidate</label>  
                        <div>
                            <input id="name1" name="name1" placeholder="Enter your name" type="text" required value="<?php
                                if (isset($_GET['name1']))
                                    {
                                        echo $_GET['name1'];
                                }?>"  
                            >
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="rollno1"></label>  
                        <div>
                            <input id="rollno1" name="rollno1" placeholder="Enter your Roll no (Ex.20AB10005)" type="text" required value="<?php
                                if (isset($_GET['rollno1']))
                                {
                                echo $_GET['rollno1'];
                                }?>"
                            >
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="gender1"></label>
                        <div>
                            <select id="gender1" name="gender1" placeholder="Select your gender" >
                                <option value="" <?php
                                    if (!isset($_GET['gender1']))
                                        echo "selected";
                                ?>>Select Gender</option>
                        
                                <option value="M" <?php
                                    if (isset($_GET['gender1']))
                                        {
                                            if ($_GET['gender1'] == "M")
                                                echo "selected";
                                        }
                                ?>>Male</option>

                                <option value="F" <?php
                                    if (isset($_GET['gender1']))
                                        {
                                            if ($_GET['gender1'] == "F")
                                                echo "selected";
                                        }
                                ?>>Female</option> 
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email1"></label>  
                        <div>
                            <input id="email1" name="email1" placeholder="Enter your email" type="email" required value="<?php
                                if (isset($_GET['email1']))
                                    {
                                        echo $_GET['email1'];
                                }?>"  
                            >
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="branch1"></label>
                        <div>
                            <input id="branch1" name="branch1" placeholder="Enter your branch" type="text" required value="<?php
                                if (isset($_GET['branch1']))
                                    {
                                        echo $_GET['branch1'];
                                    };
                                ?>" 
                            >
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="phno1"></label>  
                        <div>
                            <input id="phno1" name="phno1" size="10" onKeyPress="if(this.value.length==10) return false;" placeholder="Enter your mobile number" type="number" required value="<?php
                                if (isset($_GET['phno1']))
                                    {
                                        echo $_GET['phno1'];
                                    }
                            ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label id="label-name2" for="name2">2nd Candidate</label>  
                        <div>
                            <input id="name2" name="name2" placeholder="Enter your name" type="text" value="<?php
                                if (isset($_GET['name2']))
                                    {
                                        echo $_GET['name2'];
                                }?>"  
                            >
                        </div>
                    </div>

                      
                    <div class="form-group">
                        <label for="rollno2"></label>  
                        <div>
                            <input id="rollno2" name="rollno2" placeholder="Enter your Roll no (Ex.20AB10005)" type="text" value="<?php
                                if (isset($_GET['rollno2']))
                                {
                                echo $_GET['rollno2'];
                                }?>"
                            >
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="gender2"></label>
                        <div>
                            <select id="gender2" name="gender2" placeholder="Select your gender" >
                                <option value="" <?php
                                    if (!isset($_GET['gender2']))
                                        echo "selected";
                                ?>>Select Gender</option>
                        
                                <option value="M" <?php
                                    if (isset($_GET['gender2']))
                                        {
                                            if ($_GET['gender2'] == "M")
                                                echo "selected";
                                        }
                                ?>>Male</option>

                                <option value="F" <?php
                                    if (isset($_GET['gender2']))
                                        {
                                            if ($_GET['gender2'] == "F")
                                                echo "selected";
                                        }
                                ?>>Female</option> 
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email2"></label>  
                        <div>
                            <input id="email2" name="email2" placeholder="Enter your email" type="email" value="<?php
                                if (isset($_GET['email2']))
                                    {
                                        echo $_GET['email2'];
                                }?>"  
                            >
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="branch2"></label>
                        <div>
                            <input id="branch2" name="branch2" placeholder="Enter your branch" type="text"  value="<?php
                                if (isset($_GET['branch2']))
                                    {
                                        echo $_GET['branch2'];
                                    };
                                ?>" 
                            >
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="phno2"></label>  
                        <div>
                            <input id="phno2" name="phno2" onKeyPress="if(this.value.length==10) return false;"  placeholder="Enter your mobile number" type="number" value="<?php
                                if (isset($_GET['phno2']))
                                    {
                                        echo $_GET['phno2'];
                                    }
                            ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="teamname"> Login credentials</label>
                        <div>
                            <input id="teamname" name="teamname" placeholder="Choose a team name" type="text" required value="<?php
                                if (isset($_GET['teamname']))
                                    {
                                        echo $_GET['teamname'];
                                    };
                                ?>" 
                                
                                style="<?php
                                    if (isset($_GET['q7']))
                                        echo "border-color:red";
                                ?>"
                            >
                        </div>
                    </div>
                      
                    <div class="form-group">
                        <label for="password"></label>
                        <div>
                          <input id="password" name="password" placeholder="Enter your password" required type="password">
                        </div>
                    </div>
                      
                    <div class="form-group">
                        <label for="cpassword"></label>
                        <div>
                          <input id="cpassword" name="cpassword" placeholder="Confirm Password" required type="password">
                        </div>
                    </div>

                    <div>
                        <p id="team-notice">**For team of 2 members there is only one login credential. Only one member can give the quiz. Members can discuss among themselves about quiz**</p>
                    </div>

                    <div id="errormsg" style="color:red;">
                    </div>
                      
                    <div class="form-group">
                        <label for=""></label>
                        <div> 
                          <input id="register"  type="submit" required value=" Register Now " />
                        </div>
                    </div>
                <!-- </fieldset> -->
            </form>
        </div>

    </div>

    <div id="login-modal" style="display:<?php
            if (@$_GET['w']) {
                echo 'flex';
            }
        ?>;">
        <div class="login-modal">
            <h2>Login to you Account</h2>
            <div>
            <?php
            if (@$_GET['w']) {
                echo '<p style="color:red;text-align:center;padding-top:10px;">'. @$_GET['w'] .'</p>';
            }
            ?>
                <form action="login.php?q=registration.php" method="POST">

                    <div class="form-group">
                        <label for="teamname"></label>
                        <div>
                            <input id="login-teamname" name="teamname" placeholder="Team Name" type="text" required value="" autofocus>
                        </div>
                    </div>

                    <div class="form-group">

                        <label for="password"></label>
                        <div>
                          <input id="login-password" name="password" placeholder="Enter your password" required type="password">
                        </div>
                    </div>

                    <div class="login-footer">
                        <button class="close" type="button" onclick="closeModal()">Close</button>
                        <button class="submit" type="submit" >Log in</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <footer>
        <div class="icons">
            <ul>
                <li><a href="https://www.facebook.com/spAts.iitkgp"><i class="fa fa-facebook-f"></i></a></li>
                <li><a href=""><i class="fa fa-twitter"></i></a></li>
                <li><a href="https://www.linkedin.com/company/spats/"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="https://www.instagram.com/spats.iitkgp/"><i class="fa fa-instagram"></i></a></li>
            </ul>
        </div>
        <div>
            <p>
                &#169; Space Technology Students' Society
            </p>
        </div>
    </footer>

    <script>
        var y2 = document.forms["form"]["name2"].style.display = "none"; 
        var l2 = document.getElementById("label-name2").style.display = "none";
        var l1 = document.getElementById("label-name1").style.display = "none";
        
        var r2 = document.getElementById("rollno2");
        var g2 = document.getElementById("gender2");
        var p2 = document.getElementById("phno2");
        var e2 = document.getElementById("email2");
        var b2 = document.getElementById("branch2");
        var tn = document.getElementById("team-notice");

        r2.style.display = "none";
        g2.style.display = "none";
        p2.style.display = "none";
        e2.style.display = "none";
        b2.style.display = "none";
        tn.style.display = "none";

        r2.value = "null";
        // g2.value = "M";
        p2.value = "1234567890";
        e2.value = "sample@gamil.com";
        b2.value = "null";

        // left: 37, up: 38, right: 39, down: 40,
        // spacebar: 32, pageup: 33, pagedown: 34, end: 35, home: 36
        var keys = {37: 1, 38: 1, 39: 1, 40: 1};

        function preventDefault(e) {
        e.preventDefault();
        }

        function preventDefaultForScrollKeys(e) {
        if (keys[e.keyCode]) {
            preventDefault(e);
            return false;
        }
        }

        // modern Chrome requires { passive: false } when adding event
        var supportsPassive = false;
        try {
        window.addEventListener("test", null, Object.defineProperty({}, 'passive', {
            get: function () { supportsPassive = true; } 
        }));
        } catch(e) {}

        var wheelOpt = supportsPassive ? { passive: false } : false;
        var wheelEvent = 'onwheel' in document.createElement('div') ? 'wheel' : 'mousewheel';

        // call this to Disable
        function disableScroll() {
        window.addEventListener('DOMMouseScroll', preventDefault, false); // older FF
        window.addEventListener(wheelEvent, preventDefault, wheelOpt); // modern desktop
        window.addEventListener('touchmove', preventDefault, wheelOpt); // mobile
        window.addEventListener('keydown', preventDefaultForScrollKeys, false);
        }

        // call this to Enable
        function enableScroll() {
        window.removeEventListener('DOMMouseScroll', preventDefault, false);
        window.removeEventListener(wheelEvent, preventDefault, wheelOpt); 
        window.removeEventListener('touchmove', preventDefault, wheelOpt);
        window.removeEventListener('keydown', preventDefaultForScrollKeys, false);
        }

    </script>
</body>
</html>