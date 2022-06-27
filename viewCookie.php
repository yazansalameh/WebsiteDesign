<?php
if(isset($_COOKIE['username']) && isset($_COOKIE['password']) && isset($_COOKIE['fname']) && isset($_COOKIE['lname']) &&
isset($_COOKIE['email']) && isset($_COOKIE['product']) && isset($_COOKIE['desc']) &&
isset($_COOKIE['manufacturer']) && isset($_COOKIE['Setpassword']) &&
isset($_COOKIE['country']) && isset($_COOKIE['comp_name']) && isset($_COOKIE['comp_owner']) &&
isset($_COOKIE['address'])){

echo "<p> username is " . $_COOKIE['username2'] . "</p>";
echo "<p> password is " . $_COOKIE['password'] . "</p>";
echo "<p> first name is " . $_COOKIE['fname'] . "</p>";
echo "<p> last name is " . $_COOKIE['lname'] . "</p>";
echo "<p> email is " . $_COOKIE['email'] . "</p>";
echo "<p> Set password is " . $_COOKIE['Setpassword'] . "</p>";
echo "<p> Set username in DB is " . $_COOKIE['username'] . "</p>";
echo "<p> product name is " . $_COOKIE['product'] . "</p>";
echo "<p> product description is " . $_COOKIE['desc'] . "</p>";
echo "<p> manufacturer is " . $_COOKIE['manufacturer'] . "</p>";
echo "<p> manufacturing country is " . $_COOKIE['country'] . "</p>";
echo "<p> company name is " . $_COOKIE['comp_name'] . "</p>";
echo "<p> company owner is" . $_COOKIE['comp_owner'] . "</p>";
echo "<p> company address is " . $_COOKIE['address'] . "</p>";

}

?>