<?php

if(isset ($_POST['submit2'])){


}



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Page</title>
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
            background-color: cadetblue;
            display: grid;
            height: 100vh;


            grid-template-areas:
            ". . . . . header . . . . ."
            ". . . . . fname . . . . ."
            ". . . . . lname . . . . ."
            ". . . . . email . . . . ."
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
            grid-area: fname;
        }

        .item3 {
            grid-area: lname;
        }

        .item4 {
            grid-area: email;
        }

        .item5 {
            grid-area: password;
        }

        .item6 {
            grid-area: button;
        }

        .item7 {
            grid-area: link;
        }

        .item8 {
            grid-area: username;
        }

    </style>

</head>

<body>

<form action="index.php"  method="post">
    <div class="container">
        <div class="grid-item item1"><h1><br>Sign Up</h1></div>

        <div class="grid-item item2">
            <label for="fname"></label>
            <input type="text" style="font-size:12pt;height:50px;width:320px;" id="fname" name="fname" placeholder="First Name" required>
        </div>

        <div class="grid-item item3">
            <label for="lname"></label>
            <input type="text" style="font-size:12pt;height:50px;width:320px;" id="lname" name="lname" placeholder="Last Name" required>
        </div>

        <div class="grid-item item4">
            <label for="email"></label>
            <input type="email" style="font-size:12pt;height:50px;width:320px;" id="email" name="email" placeholder="Email address" required>
            </div>

        <div class="grid-item item8">
            <label for="username"></label>
            <input type="text" style="font-size:12pt;height:50px;width:320px;" id="username" name="username" placeholder="username" required>
        </div>

        <div class="grid-item item5">
            <label for="Setpassword"></label>
            <input type="password" style="font-size:12pt;height:50px;width:320px;" id="Setpassword" name="Setpassword" placeholder="Set Password" required>
        </div>

        <div class="grid-item item7">Already have an acoount? <br> <a href="SignIn.php">Sign In.</a></div>
        <div class="grid-item item6"><button type="submit" style="font-size:25pt;height:50px;width:320px;" name='submit2'>SIGN UP</button></div>
    </div>

</form>
</body>

</html>