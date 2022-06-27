<?php

session_start();
Require "connection.php";



if(isset($_POST['submit'])){

$sql = "SELECT * FROM `user` WHERE `username`=:username2 AND `Setpassword`=:password";
$statement=$pdo->prepare($sql);
$username2=$_POST['username2'];
$password=$_POST['password'];

$statement->bindParam(":username2",$username2,PDO::PARAM_STR);
$statement->bindParam(":password",$password,PDO::PARAM_STR);

$statement->execute();
$count=$statement->rowCount();
if($count==1){
    $_SESSION['username2']=$username2;
    header("location:index.php");
}
else{
    echo "Invalid username or password";

}
$pdo=null;

}



?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In page</title>
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
            ". . . . . header . . . . ."
            ". . . . . username . . . . ."
            ". . . . . password . . . . ."
            ". . . . . link . . . . ."
            ". . . . . button . . . . .";

            background-color: #DAD2D8;
            background-image: url('bg2.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;


        }

        .grid-item {
            border: 0px solid red;
            font-size: 2em;
            text-align: center;

        }

        .item1 {
            grid-area: header;
        }

        .item2 {
            grid-area: username;
        }

        .item3 {
            grid-area: password;
        }

        .item4 {
            grid-area: link;
        }

        .item5 {
            grid-area: button;
        }

    </style>

</head>

<body>

<form method="post">
    <div class="container">
        <div class="grid-item item1"><h1><br>Sign In</h1></div>
        <div class="grid-item item2">
            <label for="username2"></label>
            <input type="text" style="font-size:12pt;height:50px;width:320px;" id="username2" name="username2" placeholder="User Name" required>
        </div>
        <div class="grid-item item3">
            <label for="password"></label>
            <input type="password" style="font-size:12pt;height:50px;width:320px;" id="password" name="password"
            placeholder="Password" required>
        </div>

        <div class="grid-item item4">
        Don't have an account? <br> <a href="SignUp3.php">Create one.</a>
        </div>

        <div class="grid-item item5"><button type="submit" style="font-size:25pt;height:50px;width:320px;"
        name='submit' value='submit'>
        SIGN IN
        </button></div>
    </div>

</form>
</body>

</html>