<?php

// Associative array with questions and their correct answers
$quiz = [
    "Capital of India?" => "New Delhi",
    "Best player of all time?" => "Shikhar Dhawan",
    "Best food to eat?" => "Burger"
];

// Initialize score
$score = 0;

// Loop through the quiz array
foreach ($quiz as $question => $correctAnswer) {
    echo $question . "\n";
    echo "Answer: $correctAnswer\n\n";
    
  
    $score++;
}


echo "Your final score is: $score out of " . count($quiz) . "\n";

?>
