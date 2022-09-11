<?php

//  For Each
echo "For Each Loop Example:<br/>";
$colors = array("red", "blue", "yellow", "green", "black");
foreach($colors as $color) {
    echo ("$color<br/>");
}
echo "<br/><br/>";

//  Do/while
echo "Do/While Loop Example:<br/>";
$die_1 = 1;
$die_2 = 2;
do {
    $die_1 = rand(1, 6);
    $die_2 = rand(1, 6);
    if ($die_1 != $die_2){
        echo "You rolled: $die_1 and $die_2. This is not a match! Try again.<br/>";
    }
    else {
        echo "You rolled: $die_1 and $die_2...It's a match!<br/>";
    }
}
while($die_1 != $die_2);
echo "<br/><br/>"


?>