<?php


session_start();

if(isset($_POST['submit3'])){

$file=$_FILES['file']['name'];

    $product=$_POST['product'];
    $desc=$_POST['desc'];
    $manufacturer=$_POST['manufacturer'];
    $country=$_POST['country'];
    $file=$_POST['file'];
    $comp_name=$_POST['comp_name'];
    $comp_owner=$_POST['comp_owner'];
    $address=$_POST['address'];

        
    $_SESSION['product']=$product;
    $_SESSION['desc']=$desc;
    $_SESSION['manufacturer']=$manufacturer;
    $_SESSION['country']=$country;
    $_SESSION['file']=$file;
    $_SESSION['comp_name']=$comp_name;
    $_SESSION['comp_owner']=$comp_owner;
    $_SESSION['address']=$address;


    setcookie('product',$product);
    setcookie('desc',$desc);
    setcookie('manufacturer',$manufacturer);
    setcookie('country',$country);
    setcookie('file',$file);
    setcookie('comp_name',$comp_name);
    setcookie('comp_owner',$comp_owner);
    setcookie('address',$address);
}




Require "connection.php";

if(isset($_POST['submit3'])){



$sql="INSERT INTO `forms`(`product`, `desc`, `manufacturer`, `country`, `file` , `comp_name`, `comp_owner`, `address`)
VALUES (:product,:desc,:manufacturer,:country, :file ,:comp_name,:comp_owner,:address)";


$statement=$pdo->prepare($sql);

$product=$_POST['product'];
$desc=$_POST['desc'];
$manufacturer=$_POST['manufacturer'];
$country=$_POST['country'];
$file=$_POST['file'];
$comp_name=$_POST['comp_name'];
$comp_owner=$_POST['comp_owner'];
$address=$_POST['address'];

// binding
$statement->bindParam(":product",$product,PDO::PARAM_STR);
$statement->bindParam(":desc",$desc,PDO::PARAM_STR);
$statement->bindParam(":manufacturer",$manufacturer,PDO::PARAM_STR);
$statement->bindParam(":country",$country,PDO::PARAM_STR);
$statement->bindParam(":file",$file,PDO::PARAM_LOB);
$statement->bindParam(":comp_name",$comp_name,PDO::PARAM_STR);
$statement->bindParam(":comp_owner",$comp_owner,PDO::PARAM_STR);
$statement->bindParam(":address",$address,PDO::PARAM_STR);


$statement->execute();
$pdo=null;

}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation page</title>
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
            "text"
            "link";

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
            grid-area: text;
        }

        .item2 {
            grid-area: link;
        }



    </style>

</head>

<body>

    <div class="container">

        <div class="grid-item item1"><br><br>
        <?php
            if(isset($_POST['submit3'])){
            move_uploaded_file($_FILES['file']['tmp_name'], "uploaded/".$_FILES['file']['name']);
                echo "<h2>The form was submitted successfully,
            you will receive a message within 3 business days.</h2>";

            }

        ?>
        </div>

        <div class="grid-item item2">

            <a style="background-color: #199319; color: white; padding: 13px 18px; text-decoration: none;
            font-size:45px;" href="index.php">Home</a>
            <br>
            <br>
            <br>
            <br>
        </div>

    </div>

</body>

</html>