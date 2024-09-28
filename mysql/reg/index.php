<?php
include("./conn.php");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome to our website!</h1>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
      <label for="username">Username :</label>
      <br>
      <input type="text" name="username" id="username">
      <br>
      <label for="password">Password :</label>
      <br>
      <input type="password" name="password" id="password">
      <br>
      <button type="submit" id="login" name="login" value="login" style="cursor:pointer;">Log In</button>
      <br>
    </form>
</body>
</html>
<?php


if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $username = filter_input(INPUT_POST,"username",FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST,"password",FILTER_SANITIZE_SPECIAL_CHARS);

    if(empty($username))
    {
        echo "Please enter your username.";
    }
    elseif(empty($password))
    {
        echo "Please enter your password.";
    }
    else
    {
        $hash = password_hash($password,PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (user,password) VALUES ('$username','$hash')";
       
        try
        {
          mysqli_query($conn,$sql);
          echo "<br>Logged In Successfully!<br>";

        }
        catch(mysqli_sql_exception)
        {
          echo "An unknown error ocurred!";
        }

    }

}


mysqli_close($conn);

?>