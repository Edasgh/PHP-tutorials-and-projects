<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>

</head>
<body>
   <h1>Log In to Continue</h1>
    <form action="./session.php" method="post" >
        <label for="username">Username : </label>
        <input type="text" name="username" id="username">
        <br>
        <br>
        <label for="password">Password :</label>
        <input type="password" name="password" id="password">
        <br>
        <br>
        <button type="submit" id="login" name="login" value="login">Log In</button>
        <br>
        <br>
    </form>

</body>
</html>
<?php
// $_SESSION["username"]="Eshita";
// $_SESSION["password"]="123456";

// echo $_SESSION["username"]."<br>";
// echo $_SESSION["password"]."<br>";

if(isset($_POST["login"]))
{
    if(!empty($_POST["username"]) && !empty($_POST["password"]))
    {
        $_SESSION["username"] = $_POST["username"];
        $_SESSION["password"] = $_POST["password"];

       header("Location: http://localhost/website/from-25-sep/home.php/");
       //redirects to home.php after login
       exit();
    }
    else
    {
        echo "Missing username or password";
    }
}
?>