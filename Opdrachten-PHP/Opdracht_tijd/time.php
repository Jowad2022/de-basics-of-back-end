<?php
        
        $Datum = new DateTime("now", new DateTimeZone('Europe/Amsterdam') ); 
        $t = $Datum->format('H');
        if ($t >=6 && $t <12) {
            $text = "Have a good morning!";
            $tijd = "morning";
            } elseif ($t >= 12 && $t <18) {
            $text = "Have a good afternoon!";
            $tijd = "afternoon";
            } elseif ($t >=18 && $t < 24) {
            $text = "Have a good evening!";
            $tijd = "evening";
            } else {
            $text = "Have a good night!";
            $tijd = "night";
            }
    ?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="vierport"content="width=device-width, initial-scale=1.0">
    <title>Live-Time</title>
    <link rel="stylesheet" type="text/css" href="Tijd-Fotos/time.css">
</head>

</head>
<body class ="<?php echo $tijd ?>" >
    <div id="center">
        <?php
        echo $text ;
        echo "<br>";
        echo $Datum->format('H:i');
        ?>
    </div>
</body>
</html>

