<!-- Create the Registration Form (HTML + PHP)

Students will design an HTML form with fields like:
	•	Player Name (Text)
	•	Age (Number)
	•	Email (Email)
	•	Phone Number (Number)
	•	Team Name (Text)
	•	Preferred Playing Role (Dropdown: Batsman, Bowler, All-rounder, Wicket-keeper)
	•	Agree to Rules (Checkbox)

⸻

2. Implement Form Validation (PHP)
	•	Ensure all fields are filled.
	•	Validate age (e.g., must be between 16 and 40 years old).
	•	Validate email format.
	•	Ensure phone number contains only digits.
	•	Ensure checkbox for rules agreement is checked.

⸻

3. Define and Enforce Registration Rules (PHP)
	•	Team Limit: Each team should have a minimum of 7 and a maximum of 11 players.
	•	Unique Email & Phone: Prevent duplicate registrations with the same email or phone number.
	•	Age Restriction: Only players between 16 to 40 years can register.
	•	Deadline: Restrict registration after a specific date (e.g., March 31, 2025). -->











<?php
$pn = $a = $e = $p = $tn = $g = $ch = "";
$x = $b = $c = $d = $y = $f = $che = "";
if (isset($_POST['sub'])) {
    if (empty($_POST['pname']))
        $pn = "Enter the player name !!!";

    if (empty($_POST['age']))
        $a = "Enter the age !!!";

    if (empty($_POST['email']))
        $e = "Enter the player email !!!";

    if (empty($_POST['phone']))
        $p = "Enter the player phone !!!";

    if (empty($_POST['tname']))
        $tn = "Enter the team name !!!";

    if (empty($_POST['game']))
        $g = "Enter the game !!!";

    if (empty($_POST['check']))
        $ch = "Check the box!!!";

    if (!empty($_POST['pname']) && !empty($_POST['age']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['tname']) && !empty($_POST['game']) && !empty($_POST['check'])) {
        $x = $_POST['pname'];
        $b = $_POST['age'];
        $c = $_POST['email'];
        $d = $_POST['phone'];
        $y = $_POST['tname'];
        $f = $_POST['game'];
        $che = $_POST['check'];
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <label for="name">Enter the player Name</label>
        <input type="text" name="pname">
        <br><?php echo $pn ?>
        <br><br>


        <label for="age">Enter the player Age</label>
        <input type="number" name="age">
        <br><?php echo $a ?>
        <br><br>


        <label for="email">Enter the Email</label>
        <input type="email" name="email">
        <br><?php echo $e ?>
        <br><br>


        <label for="phone">Enter the phone No.
            <input type="number" name="phone">
            <br><?php echo $p ?>
            <br><br>


            <label for="tname">Enter the team name</label>
            <input type="text" name="tname">
            <br><?php echo $tn ?>
            <br><br>


            <label for="playing">Choose the game</label>
            <select name="game">
                <option value="choose">Choose</option>
                <option value="Batsman">Batsman</option>
                <option value="Bowler">Bowler</option>
                <option value="All-rounder">All-rounder</option>
                <option value="Wicket-Keeper">Wicket-Keeper</option>
            </select>
            <br><?php echo $g ?>
            <br><br>
            <label for="check">All conditions agree</label>
            <input type="checkbox" name="check">
            <br><?php echo $g ?>

            <br><br>
            <button value="Submit" name="sub">Submit</button>
        </label>
    </form>
</body>

</html>

<?php
echo $x . "<br>";
echo $y . "<br>";
echo $f . "<br>";

if (isset($_POST['sub'])) {
    if ($b >= 16 && $b <= 40)
        echo "you get enroll <br>";
    else
        echo "you are not enroll <br>";

    if (filter_var($c, FILTER_VALIDATE_EMAIL))
        echo $c . "<br>";
    else
        echo "Enter the vaild Email <br>";

    if (preg_match("/^[0-9]+$/", $d) && (strlen($d) == 10))
        echo $d . "<br>";
    else
        echo "Enter the vaild phone Number <br>";
}
?>