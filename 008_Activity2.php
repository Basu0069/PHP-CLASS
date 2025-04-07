<?php

function dice(){
    return random_int(1, 6); 
}

$p1 = 0;
$p2 = 0;






echo "Player 1 and Player 2 will roll the dice three times.<br>";

for ($i = 0; $i < 3; $i++) {
    $Player1 = dice(); 
    $Player2 = dice(); 

    echo "Round " . ($i + 1) . ": Player 1 rolled $Player1, Player 2 rolled $Player2 <br>";

    if ($Player1 > $Player2) {
        $p1++; 
    } elseif ($Player1 < $Player2) {
        $p2++; 
    }
}

echo "<br>Final Score:<br>";
echo "Player 1 Wins: $p1<br>";
echo "Player 2 Wins: $p2<br>";

?>
