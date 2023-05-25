<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="vierport"content="width=device-width, initial-scale=1.0">
    <title>de-syntax</title>
    <link rel="stylesheet" type="text/css" href="">
</head>

<head>
    <body>
        <?php
        $count_1 = 18;
        $count_2 = 6;
            for($j=$count_2; $j >= 0; $j--){
                if($count_1 %$j == 0 && $count_2 %$j == 0){
                    echo "Opdracht 4","<br>";
                    echo "niks meer over","<br>";
                    echo $j,"<br>";
                    $j = 0;
            }
        }
        ?>
    </body>
</head>