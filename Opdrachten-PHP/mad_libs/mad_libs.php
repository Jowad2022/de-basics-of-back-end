<?php
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="vierport"content="width=device-width, initial-scale=1.0">
    <title>Mad Libs</title>
    <link rel="stylesheet" type="text/css" href="mad_libs.css">
</head>

<head>
    <body class="bg">
        <h1 class ="text"> Mad Libs</h1>
        <ul>
        <li><a class="active" href="Paniek.php">Er heerst paniek...</a></li>
        <li><a href="Onkunde.php">Onkunde</a></li>
        </ul>
        <p class=text_box>
            Kies hier boven tussen (er heerst paniek...) of (onkunde).
        </p>
</body>
</head>