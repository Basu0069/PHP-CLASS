<?php
// Correct answers
$correct = array(
  "q1" => "c",
  "q2" => "b",
  "q3" => "a",
  "q4" => "a",
  "q5" => "a"
);

$score = 0;

// Loop through each question
foreach ($correct as $question => $answer) {
  if (isset($_POST[$question]) && $_POST[$question] == $answer) {
    $score++;
  }
}

echo "<h2>Your Score: $score / 5</h2>";

// Show correct and your answers
foreach ($correct as $question => $answer) {
  $yourAnswer = isset($_POST[$question]) ? $_POST[$question] : "No Answer";
  echo "Question $question: Your answer = $yourAnswer | Correct = $answer <br>";
}
?>
