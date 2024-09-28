<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sanitize and Validate</title>
</head>
<body>
    <form action="./validate.php" method="post" >
        <label for="username">Username : </label>
        <input type="text" name="username" id="username">
        <br>
        <label for="age">Age : </label>
        <input type="text" name="age" id="age">
        <br>
        <label for="email">Email : </label>
        <input type="text" name="email" id="email">
        <br>
        <button type="submit" id="login" name="login" value="Log In">Log In</button>
    </form>
</body>
</html>

<?php
// sanitize and validate in php
 if(isset($_POST["login"]))
 {
//    $username = $_POST["username"];
   $username = filter_input(INPUT_POST,"username",FILTER_SANITIZE_SPECIAL_CHARS);
   echo "<br>Your username : {$username} <br>";
   $email = filter_input(INPUT_POST,"email",FILTER_VALIDATE_EMAIL);

   $age = filter_input(INPUT_POST,"age",FILTER_VALIDATE_INT);

    if(empty($email))
    {
        echo "Please enter a valid email <br>";
    }
    else
    {
        echo "Your email : {$email} <br>";
    }

    if(empty($age))
    {
        echo "That number isn't valid <br>";
    }
    else
    {
        echo "Your age : {$age} <br>";
    }

 }
?>