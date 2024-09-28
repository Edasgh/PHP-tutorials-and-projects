<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form in php</title>
</head>

<body>
    <!--htmlspecialchars($_SERVER["PHP_SELF"]) is used to avoid any cross site scripts  -->
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" name="reg" id="reg" method="post">
        <!-- <form action="./index.php" name="reg" id="reg" method="post"> -->
        <label for="un">Username : </label>
        <br>
        <input type="text" name="username" id="un">
        <br>
        <label for="pw">Password : </label>
        <br>
        <input type="text" name="password" id="pw">
        <br>
        <button type="submit" id="submit" name="login" value="Log In">Log In</button>
        <br>
    </form>
</body>

</html>
<?php
// foreach($_POST as $key => $value)
// {
//     echo" {$key} = {$value} <br>";
// }


if (isset($_POST["login"])) { //not this
    // $_SERVER["REQUEST_METHOD"] == "POST" (more optimized)
    //handle requests like this instead
    $username = $_POST["username"];
    $password = $_POST["password"];

    if (empty($username)) {
        echo "Username is empty<br>";
    } else if (empty($password)) {
        echo "Password is empty<br>";
    } else {
        echo "Hi, {$username}. You're now logged in!";
    }
}

?>