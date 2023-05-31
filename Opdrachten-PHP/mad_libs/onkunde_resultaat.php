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
    Er zijn veel mensen die niet kunnen <?php echo $_POST["q1"]; ?>.
    Mensen zoals <?php echo $_POST["q2"]; ?>.
    zelfs met de hulp van een <?php echo $_POST["q4"]; ?> of zelfs 
    <?php echo $_POST["q3"]; ?> kan <?php echo $_POST["q2"]; ?> niet <?php echo $_POST["q1"]; ?>.
    Dit heeft niet te maken met gebrek aan <?php echo $_POST["q5"]; ?>, maar met een te veel aan 
    <?php echo $_POST["q6"]; ?>. Te veel <?php echo $_POST["q6"]; ?> leidt tot <?php echo $_POST["q7"]; ?> en dat is niet goed als je wilt 
    <?php echo $_POST["q1"]; ?>. Helaas voor <?php echo $_POST["q2"]; ?>.
    
    
    <br>
    <br>
    <br>
    </p>
</head>