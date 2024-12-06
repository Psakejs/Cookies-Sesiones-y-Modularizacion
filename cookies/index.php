<?php
 setcookie(
    name:"header_color",
    value:"#175f41",
 );

 $color = $_COOKIE["header_color"] ?? "#121f3d";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Platzi</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header style="background:<?= $color ?>;">
        <img src="https://res.cloudinary.com/dmz8e9rsx/image/upload/v1733496639/logo_icchfl.webp" alt="Logo">
    </header>
</body>
</html>