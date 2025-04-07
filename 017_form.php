<?php
// Initialize error messages as empty strings
$ne = $pe = $ee = "";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate the form fields
    if (empty($_POST['user_name'])) {
        $ne = "Enter the username";
    }
    if (empty($_POST['pwd'])) {
        $pe = "Enter the user password";
    }
    if (empty($_POST['email'])) {
        $ee = "Enter the email";
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
        name: <input type="text" name="user_name">
        <?php echo $ne ? "<br>" . $ne : ""; ?>
        <br>
        
        pwd: <input type="password" name="pwd">
        <?php echo $pe ? "<br>" . $pe : ""; ?>
        <br>
        
        email: <input type="email" name="email">
        <?php echo $ee ? "<br>" . $ee : ""; ?>
        <br>
        
        <input type="submit" value="Submit">
    </form>
    
</body>
</html>
