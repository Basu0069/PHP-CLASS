<?php
$n = $x = $p = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if form fields are set before accessing them
    $n = isset($_POST['uname']) ? $_POST['uname'] : '';
    $x = isset($_POST['pwd']) ? $_POST['pwd'] : '';
    $p = isset($_POST['ph']) ? $_POST['ph'] : '';

    // Name Validation (only alphanumeric characters allowed)
    if (!preg_match("/^[a-zA-Z0-9]+$/", $n)) {
        echo "Something is wrong in Name<br>";
    } else {
        echo "Valid Name: " . htmlspecialchars($n) . "<br>";
    }

    // Phone Number Validation (exactly 10 digits)
    if (strlen($p) == 10 && preg_match("/^[0-9]+$/", $p)) {
        echo "Valid Phone Number<br>";
    } else {
        echo "Invalid Phone Number<br>";
    }

    // Password Validation (should not be only numbers)
    if (!preg_match("/^[0-9]+$/", $x)) {
        echo "Valid Password<br>";
    } else {
        echo "Password should not contain only numbers<br>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
</head>
<body>
    <form action="" method="POST">
        Name: <input type="text" name="uname"><br>
        Phone: <input type="text" name="ph"><br>
        Password: <input type="password" name="pwd"><br>
        Email: <input type="text" name="email"><br>
        <button type="submit">Submit</button> 
    </form>
</body>
</html>
