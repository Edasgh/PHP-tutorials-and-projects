<?php
// include() --> Copies the content of a file (html/text/php)
// and includes it in your php file
// Sections of our website becomes reusable
// Changes only need to be made in one place

include("header.html");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <h1>Hi, Welcome to the home page!</h1>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Assumenda exercitationem nesciunt velit omnis saepe ab quam quibusdam, porro commodi nobis id ullam sequi culpa iure animi enim blanditiis deserunt in dolores praesentium sed iusto maiores laudantium? Tenetur ducimus quaerat aperiam.</p>
</body>

</html>
<?php
include("footer.html");
?>