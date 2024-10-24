<?php

function getRandomYear() {
    return rand(1930, 1950);
}

$goodbyeCount = 0; 


while (true) {
 
    $input = readline(">");

 
    if (substr($input, -1) === '!') {
       
        if (trim($input) === 'ПОКА!') {
            $goodbyeCount++;
            if ($goodbyeCount >= 3) {
                echo "ДО СВИДАНИЯ, МИЛЫЙ!\n";
                break; 
            } else {
                echo "НЕТ, НИ РАЗУ С " . getRandomYear() . " ГОДА!\n";
            }
        } else {
            echo "НЕТ, НИ РАЗУ С " . getRandomYear() . " ГОДА!\n";
            $goodbyeCount = 0; 
        }
    } else {
        echo "АСЬ?! ГОВОРИ ГРОМЧЕ, ВНУЧЕК!\n";
        $goodbyeCount = 0; 
    }
}
?>