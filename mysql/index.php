<?php

include("./db.php");

/*
//insert data into mysql table
$username ="Squidward";
$password ="rock3";
$hash = password_hash($password,PASSWORD_DEFAULT);


$sql ="INSERT INTO users (user,password) VALUES ('$username','$hash')";

 try
 {
  mysqli_query($conn,$sql);
  echo "User registered successfully!";
 }
 catch(mysqli_sql_exception)
 {
  echo "Couldn't register user!";
 }
  */

  $username = "Spongebob";

//find a row from a mysql table
$sql = "SELECT * FROM users WHERE user='$username'";
// $sql = "SELECT * FROM users";
$result=0;
$row=0;

try {
   $result =mysqli_query($conn, $sql);
   if(mysqli_num_rows($result)>0)
   {

       //row is an associative array
       while($row = mysqli_fetch_assoc($result))
       {
    echo "<br> id = {$row["id"]}  username = {$row["user"]}  password = {$row["password"]}";
       }
   }
   else
   {
    echo "No results found!";
   }
  
} catch (mysqli_sql_exception) {
    echo "<br>Couldn't find data<br> ";
}

//close the mysql connection
mysqli_close($conn);
?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello</h1>
    <br>
</body>
</html> -->