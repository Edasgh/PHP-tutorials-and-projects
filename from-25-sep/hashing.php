<?php
//hashing => transforming sensitive data like password
// into letters/ numbers/ or symbols via a mathematical process
// like password encryption 
//To hide the original data from the third parties

$password ="pizza245";

$password2 ="12345rtyu";

$hash = password_hash($password,PASSWORD_DEFAULT);
// password_hash() used to hash a password before storing into a database
//PASSWORD_DEFAULT => bcrypt algorithm

//match a hashed password with a password using password_verify() function

$truthy = password_verify($password,$hash);
// used in case of user login

if($truthy)
{
    echo "Logged In Successfully!<br>";
}
else
{
    echo "Incorrect Password!<br>";
}




echo $hash."<br>".$truthy;

?>