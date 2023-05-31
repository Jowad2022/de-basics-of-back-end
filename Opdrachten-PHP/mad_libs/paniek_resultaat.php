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
            <li><a class="active" href="Onkunde.php">Opnieuw?</a></li>
            </ul>
    </body>
    <p class=text_box>
    Er heerst paniek...<br><br>
    Er heerst paniek in het koninkrik <?php echo $_POST["q3"]; ?>. Koning <?php echo $_POST["q6"]; ?> 
    is ten einde raad en als koning <?php echo $_POST["q6"]; ?> 
    ten einde raad is, dan roept hij zin ten-einde-raadsheer <?php echo $_POST["q2"]; ?>.<br><br>
    "<?php echo $_POST["q2"]; ?> Het is een ramp| Het is een schandel"<br><br>
    "Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?"<br><br>
    "Mijn <?php echo $_POST["q1"]; ?> is verdwenen! Zo maar, zonder waarschuwing. 
    En ik had net <?php echo $_POST["q5"]; ?> voor hem gekocht!"<br><br>
    "Majesteit, uw <?php echo $_POST["q1"]; ?> komt vast vanzelf weer terug?"<br><br>
    "Ja, da's leuk en aardig, maar hoe moet ik in de tussentid <?php echo $_POST["q8"]; ?> leren?<br><br>
    "Maar Sire, daar kunt u toch uw <?php echo $_POST["q7"]; ?> voor gebruiken."<br><br>
    "<?php echo $_POST["q2"]; ?>, je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had." <br><br>
    Mij vervelen, Sire."
    </p>
</head>