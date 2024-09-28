<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>
<body>
    <h1>This is home page</h1>
    <form action="./home.php" method="post">
        <button type="submit" id="logout" name="logout" value="logout">Log Out</button>
    </form>
    <br>
    <br>
</body>
</html>

<?php
echo "Your Username : ".$_SESSION["username"]."<br>";
echo "Your Password :  ".$_SESSION["password"]."<br>";

if(isset($_POST["logout"]))
{
    session_destroy();
    header("Location: http://localhost/website/from-25-sep/session.php/");
}

?>