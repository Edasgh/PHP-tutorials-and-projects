<?php
//cookie -> Information about a user stored in a user's web-browser for targeted advertisements, browsing prefrences and other non-sensitive data
// F12 -> applications to view cookies

//setcookie(cookie_name,value-of-the-cookie,expiration-time-in-seconds,path,domain)
setcookie("fav_food", "pasta", time() + (86400), "/");
setcookie("fav_drink", "lemon juice", time() + (86400), "/");
// setcookie("fav_drink", "lemon juice", time() - 0, "/");
setcookie("fav_snacks", "potato chips", time() + (86400), "/");
// to delete the cookie write time() - 0 in the expiration time field 
// setcookie("fav_food", "pasta", time() - 0, "/");

/*
foreach ($_COOKIE as $key => $value) {
    echo $key . " : " . $value . "<br>";
}
*/

if (isset($_COOKIE["fav_drink"])) {
    echo "My favourite drink is {$_COOKIE["fav_drink"]}";
} else {
    echo "I don't know your favourite drink!";
}
