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
        function lijst_optellen($numbers) {
            $sum = 0;
            
            foreach ($numbers as $number) {
                if( $number %2 == 0)
                    $sum += $number;
        
            }
                return $sum;
        
        }
        $getallenLijst = [1, 2, 3, 4];
        $result = lijst_optellen($getallenLijst);
        echo "Opdracht 1","<br>";
        echo $result,"<br>";
        ?>
    </body>
    <body>
        <?php 
        function dieren_noemen($longestWord) {
            $dierenLijst = ['kat', 'hond', 'olifant'];
            
            $longestWordLength = 0;
            
            foreach ($dierenLijst as $dier) {
                if (strlen($dier) > $longestWordLength) 
                    $longestWordLength = strlen($dier);
                }
                return $dier;
        
        }
        $result = dieren_noemen("dier");
        echo "Opdracht 2","<br>";
        echo $result,"<br>"; // Output: 10
        ?>
    </body>
    <body>
        <?php 
            function sortArray($echo){
                $lijst = array(5,1,3,2,4);
                for($i = 0; $i < count($lijst); $i++ ) {
                    for($j = 0; $j < count($lijst)-1; $j++) {
                    if($lijst[$j+1] < $lijst[$j]){ // Als je hem aftellend wilt maken moet de [<] [>] worden.
                    $term = $lijst[$j+1];
                    $lijst[$j+1] = $lijst[$j];
                    $lijst[$j] = $term;
                    
                }
                }
                }
                $echo = print_r($lijst);
            }
            echo "Opdracht 3","<br>";
            echo sortArray("lijst"),"<br>";           
        ?>
    </body>
</head>