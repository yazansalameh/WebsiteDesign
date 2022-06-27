// this page is for logging out and destroying the session
<?php
session_start();
if(isset($_SESSION['username']) and isset($_SESSION['password']) and isset($_SESSION['fname']) and isset($_SESSION['lname']) and isset($_SESSION['email']) and isset($_SESSION['Setpassword'])){
    unset($_SESSION['username2']);
    unset($_SESSION['password']);

    unset($_SESSION['fname']);
    unset($_SESSION['lname']);
    unset($_SESSION['email']);
    unset($_SESSION['Setpassword']);
    unset($_SESSION['username']);

    unset($_SESSION['product']);
    unset($_SESSION['desc']);
    unset($_SESSION['manufacturer']);
    unset($_SESSION['country']);
    unset($_SESSION['file']);
    unset($_SESSION['comp_name']);
    unset($_SESSION['comp_owner']);
    unset($_SESSION['address']);

}

session_destroy();

header("location:index.php");
die();
?>