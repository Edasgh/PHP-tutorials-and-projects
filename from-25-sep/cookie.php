<?php

setcookie("fav_food","ramen",time()+(86400*2),"/");
setcookie("fav_drink","lemonade",time()+(24*60*60*3),"/");
setcookie("fav_movie","The Avengers Endgame",time()+(24*60*60*2),"/");

foreach($_COOKIE as $key => $value)
{
    echo "{$key} = {$value} <br>";
}

if(isset($_COOKIE["fav_food"]))
{
    echo "<h2>Buy some {$_COOKIE["fav_food"]} here at upto 80% discount</h2><br>";
}
else
{
    echo "I don't know your favourite food. <br>";
}

?>