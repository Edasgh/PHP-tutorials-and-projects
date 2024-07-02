<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="./login_form.php" method="post">
        <label for="unm">Username: </label>
        <input type="text" name="userNm" id="unm" autocomplete="off" placeholder="Enter your username">
        <br>
        <br>
        <label for="pw">Password :</label>
        <input type="password" name="password" id="pw">
        <br>
        <br>
        <button type="submit" value="logIn" name="logIn">Log In</button>
        <br>
        <br>
    </form>

</body>

</html>

<?php

if (isset($_POST["logIn"])) {

    $userName = $_POST["userNm"];
    $password = $_POST["password"];

    /*
     foreach ($_POST as $key => $value) {
        //$_POST is an array (associative array) where name is the key and value is the value per input box
        echo "$key = $value <br>";
    }
    echo "<br>";
    */



    if (empty($userName)) {
        echo "Username is missing <br>";
    } elseif (empty($password)) {
        echo "Password is missing <br>";
    } else {
        echo "Hello $userName, now you're logged in <br>";
    }
}




?>