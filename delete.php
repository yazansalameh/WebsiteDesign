<?php

session_start();
Require "connection.php";

if(isset($_POST['submit3'])){


$sql = "SELECT * FROM `user` WHERE `email`=:email2 AND `Setpassword`=:password2";
$statement=$pdo->prepare($sql);
$email2=$_POST['email2'];
$password2=$_POST['password2'];

$statement->bindParam(":email2",$email2,PDO::PARAM_STR);
$statement->bindParam(":password2",$password2,PDO::PARAM_STR);

$statement->execute();
$count=$statement->rowCount();
if($count==1){

    $sql = "DELETE FROM `user` WHERE `email`=:email2 AND `Setpassword`=:password2";

$statement=$pdo->prepare($sql);
$email2=$_POST['email2'];
$password2=$_POST['password2'];
$statement->bindParam(":email2",$email2,PDO::PARAM_STR);
$statement->bindParam(":password2",$password2,PDO::PARAM_STR);
$statement->execute();
$pdo=null;

echo "account deleted";
header("location:destroy.php");
}
else{
    echo "Invalid email or password";

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


</head>

<body>

<form method="post">

        <h1>Are you sure you want to delete your account?</h1>
        <a href="index.php"><h1>Home</h1></a>
        </div>

            <label for="email2"></label>
            <input type="email" style="font-size:12pt;height:50px;width:320px;" id="email2" name="email2"
            placeholder="enter Email address to confirm deletion" required>

            <label for="password2"></label>
            <input type="password2" style="font-size:12pt;height:50px;width:320px;" id="password2" name="password2"
            placeholder="Password" required>

        <button type="submit" style="font-size:25pt;height:50px;width:320px;"
        name='submit3' value='submit3'>
        Delete account
        </button></div>
    </div>

</form>
</body>

</html>