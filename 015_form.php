<!-- PROPER USE -->

<?php
$ne ="";



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST['user_name'])) {
        $ne = "ENTER USERNAME PLEASE";
    } else {
        $user_name = htmlspecialchars($_POST['user_name']); // Prevent XSS
        $ne = "Welcome, " . $user_name . "!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission</title>
</head>
<body>

    <form action="" method="post">  
        Name: <input type="text" name="user_name">
        <input type="submit" value="Submit">
    </form>

    <p><?php echo $ne; ?></p>  4

</body>
</html>
