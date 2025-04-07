
<?php
$ne = $pe = $ee = ""; // These will store error messages for username, password, and email

if ($_SERVER["REQUEST_METHOD"] == "POST") { // Ensure the form was submitted
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

<form method="post" action="">
    Name: <input type="text" name="user_name">
    <span style="color:red;"><?php echo $ne; ?></span>
    <br><br>

    Password: <input type="password" name="pwd">
    <span style="color:red;"><?php echo $pe; ?></span>
    <br><br>

    Email: <input type="email" name="email">
    <span style="color:red;"><?php echo $ee; ?></span>
    <br><br>

    <button type="submit">Submit</button>
</form>

</body>
</html>
