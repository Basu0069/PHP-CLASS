<!-- use of isset here  -->
<!DOCTYPE html>
<html lang="en">
<?php



$name=$ph="";
if(isset($_POST['submit']))
{
    $name=$_POST['username'];
    if(!preg_match("/^[a-zA-Z]+$/",$name))
    echo "Enter correctly";
else
echo $name;

$ph=$_POST['ph'];
$l=strlen($ph);
if(preg_match("/^[0-9]+$/",$ph) && ($l==10))
echo $ph;
else
echo "enter correctly";
}



?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="POST">
    Name: <input type="text" name="username" required><br><br>
    Phone: <input type="text" name="ph" required><br><br>
    <button type="submit" name="submit">Submit</button>
</form>
</body>
</html>



<!-- start of file xor(STRING)
endo of file $(STRING) -->

