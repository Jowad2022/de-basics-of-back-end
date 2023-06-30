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
            <li><a href="mad_libs.php">Home</a></li>
            </ul>
        <?php
        $q1Err = $q2Err = $q3Err = $q4Err = $q5Err = $q6Err = $q7Err = "";
        $q1 = $q2 = $q3 = $q4 = $q5 = $q6 = $q7 = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["q1"])) {
                $q1Err = "answer is required";
            } else {
                $q1 = test_input($_POST["q1"]);
            }
            if (empty($_POST["q2"])) {
                $q2Err = "answer is required";
            } else {
                $q2 = test_input($_POST["q2"]);
            }
            if (empty($_POST["q3"])) {
                $q3Err = "answer is required";
            } else {
                $q3 = test_input($_POST["q3"]);
            }
            if (empty($_POST["q4"])) {
                $q4Err = "answer is required";
            } else {
                $q4 = test_input($_POST["q4"]);
            }
            if (empty($_POST["q5"])) {
                $q5Err = "answer is required";
            } else {
                $q5 = test_input($_POST["q5"]);
            }
            if (empty($_POST["q6"])) {
                $q6Err = "answer is required";
            } else {
                $q6 = test_input($_POST["q6"]);
            }
            if (empty($_POST["q7"])) {
                $q7Err = "answer is required";
            } else {
                $q7 = test_input($_POST["q7"]);
            }

        }
            function test_input($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }
            ?>
                <form  class="text_box" method="post" action="onkunde_resultaat.php">  
                Wat zou je graag willen kunnen?: <input type="text" name="q1">
                <span class="error">* <?php echo $q1Err;?></span>
                <br><br>
                Met welke persoon je kun je goed opschieten?: <input type="text" name="q2">
                <span class="error">* <?php echo $q2Err;?></span>
                <br><br>
                Wat is je favoriete getal?: <input type="text" name="q3">
                <span class="error">* <?php echo $q3Err;?></span>
                <br><br>
                Wat heb je altijd bij je als je op vakantie gaat?: <input type="text" name="q4">
                <span class="error">* <?php echo $q4Err;?></span>
                <br><br>
                Wat is je beste persoonlijke eigenschap: <input type="text" name="q5">
                <span class="error">* <?php echo $q5Err;?></span>
                <br><br>
                Wat is je slechtste persoonlijke eigenschap: <input type="text" name="q6">
                <span class="error">* <?php echo $q6Err;?></span>
                <br><br>
                Wat is het ergste wat je kan overkomen?: <input type="text" name="q7">
                <span class="error">* <?php echo $q7Err;?></span>
                <br><br>    
                <input type="submit" name="submit" value="Submit">  
                </form>
    </body>
</head>