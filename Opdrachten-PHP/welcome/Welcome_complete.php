<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="vierport"content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" type="text/css" href="welcome.css">
</head>

<head>
    <body class="BG" id="centering">   
        <?php 
            $nameErr = $emailErr = "";
            $name = $email = "";

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["name"])) {
                $nameErr = "Name is required";
            } else {
                $name = test_input($_POST["name"]);
            }
            
            if (empty($_POST["email"])) {
                $emailErr = "Email is required";
            } else {
                $email = test_input($_POST["email"]);
            }
            }
            function test_input($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }
        ?>
        <h1 class ="text"> welcome</h1>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
            Name: <input type="text" name="name">
            <span class="error">* <?php echo $nameErr;?></span>
            <br><br>
            E-mail: <input type="text" name="email">
            <span class="error">* <?php echo $emailErr;?></span>
            <br><br>
            <input type="submit" name="submit" value="Submit">  
            </form>
        <?php
        echo "<h2>Your Input:</h2>";
        echo "Naam: ",$name;
        echo "<br>";
        echo "E-mailadres: ",$email;
        ?>
    </body>
</head>