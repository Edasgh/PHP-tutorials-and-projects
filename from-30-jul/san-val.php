<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sanitize-Validate values in php</title>
</head>

<body>
    <form action="./san-val.php" method="post">
        <label for="un">
            Username :
        </label>
        <br>
        <input type="text" id="un" name="username" />
        <br>
        <br>
        <label for="age">
            Age :
        </label>
        <br>
        <input type="text" id="age" name="age" />
        <br>
        <br>
        <label for="email">
            Email :
        </label>
        <br>
        <input type="text" id="email" name="email" />
        <br>
        <br>
        <button type="submit" name="submit" value="submit">Submit</button>
        <br>
        <br>
    </form>

</body>

</html>

<?php
//sanitize , validate inputs in php
if (isset($_POST["submit"])) {
    // Sanitization of inputs
    // filter_input(INPUT_POST/INPUT_GET (as per type),name-of-the-input,sanitization options)
    // $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    // //FILTER_SANITIZE_SPECIAL_CHARS : prevents special character like <>,/ etc (specially to avoid execution of codes from input values)
    // $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);
    // //FILTER_SANITIZE_NUMBER_INT : only grabs the number from the input
    // $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    // echo "Hello {$username} , you are {$age} years old.<BR>";
    // echo "Your email is {$email}";
    ////////////////////////////////////
    ///////////////////////////////////
    //VALIDATE INPUTS//
    $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);
    // if $age!= number then, assign ""(empty string) into $age

    if (empty($age)) {
        //if $age!=number then empty($age)=true

        echo "That number wasn't a valid age <br>";
    } else {

        echo "You are " . $age . " years old.<br>";
    }
    $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
    // if $email!= email then, assign ""(empty string) into $email

    if (empty($email)) {
        //if $email!=number then empty($email)=true

        echo "That email wasn't valid<br>";
    } else {

        echo "Your email :  " . $email . "<br>";
    }
}
