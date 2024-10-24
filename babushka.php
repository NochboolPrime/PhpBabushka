<?php

function getRandomYear() {
    return rand(1930, 1950);
}


while (true) {
 
    $input = readline(">");


    if (trim($input) === 'пока!') {
        echo "ДО СВИДАНИЯ, МИЛЫЙ!\n";
        break; 
    } else {
       
        if (substr($input, -1) === '!') {
            echo "НЕТ, НИ РАЗУ С " . getRandomYear() . " ГОДА!\n";
        } else {
            echo "АСЬ?! ГОВОРИ ГРОМЧЕ, ВНУЧЕК!\n";
        }
    }
}
?>