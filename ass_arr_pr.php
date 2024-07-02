<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Capital</title>
</head>

<body>
    <form action="./ass_arr_pr.php" method="post">
        <input type="text" name="country" id="ctry" autocomplete="off" required>
        <button type="submit">View Capital</button>
    </form>
</body>

</html>


<?php



$capitals = array(
    "India" => "New Delhi",
    "USA" => "Washinton D.C.",
    "South Korea" => "Seuol",
    "Japan" => "Kyoto"
);

$capital = $_POST["country"];

if (isset($capital) && $capital != "") {
    echo "<BR> The capital of $capital is {$capitals[$capital]} <br>";
} else {
    echo "<br>Please enter the country name first<br>";
}

?>