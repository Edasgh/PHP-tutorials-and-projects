<?php

//name of the server
$db_server ="localhost";
$db_user = "root";
//if you've put an password into the server that is itself the password of the db to connect to a db
$db_password ="";
$db_name = "businessdb";
$conn="";



try
{
    $conn = mysqli_connect($db_server, $db_user, $db_password, $db_name);

}
catch(mysqli_sql_exception)
{
    echo "Couldn't connect!";
}



?>