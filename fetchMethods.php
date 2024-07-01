<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login To Our Website | Web</title>
</head>
<body>
    <h2>Login To Our Website</h2>
    <form action="fetchMethods.php" method="post">
        <label for="username">Enter Your User Name :</label>
        <br>
        <input type="text" name="username" id="username" required>
        <br>
        <br>
        <label for="password">Enter Your Password :</label>
        <br>
        <input type="password" name="password" id="password" required>
        <br>
        <br>
        <button type="submit">Login</button>
        <br>
    </form>
    
</body>
</html>




<?php
// $_GET, $_POST = special variables (they are "super global" variables) used to collect data from HTML form.
//data is sent to the file using the action attribute of <form>
// For Example :  <form action="some_fileName.php" method="get"></form>

// $_GET :
/*
* Data is appended to the url
* NOT SECURE (IMPORTANT POINT HERE)
* char limit
* Bookmark is possible with values
* GET Requests can be cached
* Better for a search page

*/

// $_POST :
/*
* Data is packaged inside the body of HTTP request
* MORE SECURE
* No data limit
* Cannot Bookmark
* POST Requests are not cached
* Better for submitting credentials (signup or login) or submitting any sensitive informations (aadhar no.)

*/

// echo "<br> <strong>The Username is :</strong> {$_GET["username"]} <br>";
// echo "<strong>The entered password is :</strong> {$_GET["password"]} <br>";


echo "<br> <strong>The Username is :</strong> {$_POST["username"]} <br>";
echo "<strong>The entered password is :</strong> {$_POST["password"]} <br>";



?>