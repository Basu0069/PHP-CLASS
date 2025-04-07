<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
</head>
<body>

    <?php
    // Initialize variables
    $ne = $pe = $ee = "";  // Error messages
    $a = $b = $c = "";  // Stores user inputs

    if ($_SERVER["REQUEST_METHOD"] == "POST") {  // Check if the form is submitted
        // Validate Username
        if (empty($_POST['user_name'])) {
            $ne = "Enter the username";
        } else {
            $a = htmlspecialchars($_POST['user_name']);  // Prevent XSS
        }

        // Validate Password
        if (empty($_POST['pwd'])) {
            $pe = "Enter the password";
        } else {
            $b = htmlspecialchars($_POST['pwd']);
        }

        // Validate Email
        if (empty($_POST['email'])) {
            $ee = "Enter the email";
        } else {
            $c = htmlspecialchars($_POST['email']);
        }

        // If all fields are filled, display submitted data
        if (!empty($a) && !empty($b) && !empty($c)) {
            echo "<h3>Submitted Data:</h3>";
            echo "Name: " . $a . "<br>";
            echo "Password: " . $b . "<br>";
            echo "Email: " . $c . "<br>";
        }
    }
    ?>

    <form action="" method="POST">
        Name: <input type="text" name="user_name" >
        <span style="color:red;"><?php echo $ne; ?></span>
        <br>

        Password: <input type="password" name="pwd" >
        <span style="color:red;"><?php echo $pe; ?></span>
        <br>

        Email: <input type="email" name="email" >
        <span style="color:red;"><?php echo $ee; ?></span>
        <br>

        <input type="submit" name="submit" >
    </form>

</body>
</html>
