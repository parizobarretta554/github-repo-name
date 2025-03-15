<?php

function getRandomNumber($min, $max) {
    return rand($min, $max);
}

$number = getRandomNumber(1, 50);
echo "$number";
?>
