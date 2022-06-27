<?php
session_start();

$flag=0;

if(isset($_POST['submit'])){
    $username2=$_POST['username2'];
    $password=$_POST['password'];

    $_SESSION['username2']=$username2;
    $_SESSION['password']=$password;

    setcookie('username2',$username2);
    setcookie('password',$password);

}


if(isset($_POST['submit2'])){

    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $Setpassword=$_POST['Setpassword'];
    $username=$_POST['username'];

    $_SESSION['fname']=$fname;
    $_SESSION['lname']=$lname;
    $_SESSION['email']=$email;
    $_SESSION['Setpassword']=$Setpassword;
    $_SESSION['username']=$username;

    setcookie('fname',$fname);
    setcookie('lname',$lname);
    setcookie('email',$email);
    setcookie('Setpassword',$Setpassword);
    setcookie('username',$username);
}



Require "connection.php";


if(isset ($_POST['submit2'])){  // section for not uploading form to db if the email is taken.
$sql = "SELECT * FROM `user` WHERE `email`=:email;";
$statement=$pdo->prepare($sql);

$email=$_POST['email'];


// binding

$statement->bindParam(":email",$email,PDO::PARAM_STR);


$statement->execute();

$count=$statement->rowCount();
if($count==0){

}
else{
    $pdo=null;

echo "Email address is already used.";
header('location:SignUp3.php');
echo "Email address is already used.";


}


}



if(isset ($_POST['submit2'])){


$username=filter_var($_POST['username'],FILTER_SANITIZE_STRING);
$Setpassword=filter_var($_POST['Setpassword'],FILTER_SANITIZE_STRING);

$errors=[];

if(empty($username)){
    $errors[]="username required";
}
else if(strlen($username)>100){
    $errors[]="not allowed, username is too long";
}

if(empty($Setpassword)){
    $errors[]="password required";
}
else if(strlen($Setpassword)<6){
    $errors[]="not allowed, password is too short, must be 6 chars or more";
}

if(empty($errors)){

$sql = "INSERT INTO user(fname,lname,email,Setpassword,username) VALUES(:fname,:lname,:email,:Setpassword,:username)";
$statement=$pdo->prepare($sql);

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$Setpassword=$_POST['Setpassword'];
$username=$_POST['username'];

//pass hash removed because when logging in the passwords won't match
//$Setpassword=password_hash($Setpassword,PASSWORD_DEFAULT);

// binding
$statement->bindParam(":fname",$fname,PDO::PARAM_STR);
$statement->bindParam(":lname",$lname,PDO::PARAM_STR);
$statement->bindParam(":email",$email,PDO::PARAM_STR);
$statement->bindParam(":Setpassword",$Setpassword,PDO::PARAM_STR);
$statement->bindParam(":username",$username,PDO::PARAM_STR);

$statement->execute();
$pdo=null;

}
else{
var_dump($errors);
}



}




?>


<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>JFDA Product Classification System Homepage</title>
    <meta name="description" content="jordanian food and drug administration online form portal to apply for
                                       classifying your product">
    <meta name="keywords" content="JFDA, jordanian food and drug administration,
                                    product classification, الغذاء و الدواء الاردن, تصنيف منتج,تسجيل دواء
                                    , تسجيل منتج غذائي">
    <meta name="author" content="Yazan Salameh">


    <style>
        * {
            margin: 0;
            padding: 0;

           }


        .container {
            display: grid;
            height: 100vh;

            grid-template-areas:
            "Himg header header header header Hbutton"
            "empty1 empty2 text1 text1 empty3 empty4"
            "empty5 empty6 button1 button1 empty7 empty8"
            "text2 text2 text2 text3 text3 text3"
            "button2 button2 button2 button3 button3 button3"
            "contact footer footer footer footer links";

            background-color: #DAD2D8;

        }

        .grid-item {
            border: 0px solid red;
            font-size: 2em;
            text-align: center;
            background-color: #DAD2D8;
        }

        .item1 {
            grid-area: header;
            background-color: #3db0f7;
            border: 0 px solid black;
        }

        .item2 {
            grid-area: text1;
            background-color: #DAD2D8;
        }

        .item3 {
            grid-area: button1;
            background-color: #DAD2D8;

        }

        .item4 {
            grid-area: text2;
            background-color: #DAD2D8;
        }

        .item5 {
            grid-area: button2;
            background-color: #DAD2D8;
        }

        .item6 {
            grid-area: text3;
            background-color: #DAD2D8;
        }

        .item7 {
            grid-area: button3;
            background-color: #DAD2D8;
        }

        .item8 {
            grid-area: footer;
            background-color: #3db0f7;
            border: 0 px solid black;
        }

        .item9 {
            grid-area: contact;
            background-color: #3db0f7;
            border: px solid black;
        }

        .item10 {
            grid-area: links;
            background-color: #3db0f7;
            border: px solid black;
        }

        .item11 {
            grid-area: Himg;
            background-color: white;
            background-color: #3db0f7;
            border: px solid black;

        }

        .item12 {
            grid-area: Hbutton;
            background-color: #3db0f7;
            border: px solid black;
        }

        .item13 {
            grid-area: empty1;
            background-color: #DAD2D8;
        }

        .item14 {
            grid-area: empty2;
            background-color: #DAD2D8;
        }

        .item15 {
            grid-area: empty3;
            background-color: #DAD2D8;
        }

        .item16 {
            grid-area: empty4;
            background-color: #DAD2D8;
        }

        .item17 {
            grid-area: empty5;
            background-color: #DAD2D8;
        }

        .item18 {
            grid-area: empty6;
            background-color: #DAD2D8;
        }

        .item19 {
            grid-area: empty7;
            background-color: #DAD2D8;
        }

        .item20 {
            grid-area: empty8;
            background-color: #DAD2D8;
        }



        /*------------------------code for menu button in header------------------------------------------*/

        /* Navbar container */
.navbar {
  overflow: hidden;
  margin-left: 1.8em;
  font-family: Arial;
}

/* Links inside the navbar */
.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* The dropdown container */
.dropdown {
  float: left;
  overflow: hidden;
}

/* Dropdown button */
.dropdown .dropbtn {
  font-size: 16px;
  border: none;
  outline: none;
  color: white;
  padding: 8px 8px;
  background-color: inherit;
  font-family: inherit; /* Important for vertical align on mobile phones */
  margin: 0; /* Important for vertical align on mobile phones */
}

/* Add a red background color to navbar links on hover */
.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: #DAD2D8;
}

/* Dropdown content (hidden by default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 70px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  float: none;
  color: black;
  padding: 8px 4px;
  text-decoration: none;
  display: block;
  text-align: left;
}

/* Add a grey background color to dropdown links on hover */
.dropdown-content a:hover {
  background-color: #ddd;
}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}

    </style>

</head>


<body>

    <div class="container">
        <div class="grid-item item1"><h2>JFDA Online Product Classification System</h2>
        <p style="margin-left:1em; margin-top:0.3em; margin-bottom:0.1em;">
        <img src="usericon.png" width="50" height="50" align="left" >
        <div style="text-align:left; font-size:30px; margin:18px 30px;">

        <?php

        if(isset($_SESSION['username2'])){
        echo "Welcome, ". $_SESSION['username2'];
        }
        else{
        echo "Welcome guest, please log in.";
        }

        ?></div>
        </p>
        </div>

        <div class="grid-item item2"><br><h3>Submit a form to get your product classified quick and easy</h3></div>

        <div class="grid-item item3"><br><a id="button1" style="background-color: #199319; color: white; padding: 7px 18px; text-decoration: none;
            font-size:35px;" href="#">BEGIN FORM</a></div>

        <div class="grid-item item4"><br><h4><br>Get started by signing up now</h4></div>

        <div class="grid-item item5"><br><a style="background-color: #199319; color: white; padding: 7px 18px; text-decoration: none;
            font-size:30px;" href="SignUp3.php">SIGN UP</a></div>

        <div class="grid-item item6"><br><h4>Or by <br> logging in with your created account</h4></div>

        <div class="grid-item item7"><br><a style="background-color: #199319; color: white; padding: 7px 18px; text-decoration: none;
            font-size:30px;" href="SignIn2.php">SIGN IN</a></div>

        <div class="grid-item item8">
            <a style="margin: 0 13px;" href="index.php">Home</a>
            <a style="margin: 0 13px;" href="#">About</a>
            <a style="margin: 0 13px;" href="#">FAQ</a>
            <br>
            <br>
            <div style="font-size:15px;">Yazan Salameh &copy; 2022</div>
        </div>

        <div class="grid-item item9">
            Contact Us
            <br>
            <a href="#"><img src="phone.png" width=50" height="50"></a>
            <a href="https://mail.google.com/"><img src="mail.png" width=50" height="50"></a>
            <a href="https://twitter.com/?lang=en"><img src="twitter.png" width=50" height="50"></a>
            <a href="https://www.facebook.com/"><img src="facebook.png" width=50" height="50"></a>
        </div>

        <div class="grid-item item10">
            Related Links
            <br>
            <a href="#"><img src="link.png" width=50" height="50"></a>
        </div>

        <div class="grid-item item11"><p style="margin-top:0.3em;"><img src="jfda2.png" alt="JFDA logo" width="140" height="110" margin-top="1em"></p></div>

        <div class="grid-item item12">
            <br>
            <div class="navbar">
                <div class="dropdown">
                    <button class="dropbtn"><img src="menu.png" width="47" height="38">
                        <i class="fa fa-caret-down"></i>
                    </button>
                <div class="dropdown-content">
                    <a href="index.php">Home</a>
                    <a href="SignIn2.php">Sign In</a>
                    <a href="SignUp3.php">Sign Up</a>
                    <a href="#">Contact us</a>
                    <a href="destroy.php">Log Out</a>
                    <a href="delete.php">Delete Account</a>
                </div>
                </div>
            </div>
        </div>
        <div class="grid-item item13"></div>
        <div class="grid-item item14"></div>
        <div class="grid-item item15"></div>
        <div class="grid-item item16"></div>
        <div class="grid-item item17"></div>
        <div class="grid-item item18"></div>
        <div class="grid-item item19"></div>
        <div class="grid-item item20"></div>

        <script>
            document.querySelector('#button1').addEventListener('click',f1);
            function f1(){
                var ask = window.confirm("Please sign in before continuing! else your form will not be saved! Click OK if already signed in, Click cancel to go back");
                if (ask) {
                    window.location.href = "Form.php";
                }
                else{
                    window.location.href = "index.php"
                }
            }
        </script>


    </div>


</body>

</html>