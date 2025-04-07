
<form action="" method="post">
Enter Email: <input type="text" name="email" id="">
subject: <input type="text" name="subject" id="">
message: <input type="text" name="message" id="">
<button type="submit" name="button">Send</button>

</form>

<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';

if(isset($_POST['button'])) {  
    // Creating an instance inside the try block
    try {
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // Fix capitalization
        $mail->SMTPAuth = true;
        $mail->Username = 'basuslathia01@gmail.com';
        $mail->Password = 'fdcv glpc bpuc vhxj'; // App Password (Replace if needed)
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Sender and recipient
        $mail->setFrom('basuslathia01@gmail.com', 'B S');
        $mail->addAddress($_POST['email'], 'Recipient'); 
        $mail->addReplyTo('basuslathia01@gmail.com', 'CID');

        // Attachments (optional)
        if (file_exists('data.jpeg')) { // Check if file exists before attaching
            $mail->addAttachment('data.jpeg');
        }

        // Email Content
        $mail->isHTML(true);
        $mail->Subject = $_POST['subject'];
        $mail->Body = $_POST['message'];

        // Send email
        $mail->send();
        echo 'Message has been sent successfully!';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>











































<!-- 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';

if(isset($_POST['button'])){

}


// Creating an instance:
$mail= new PHPMailer(true);


try{
    $mail->isSMTP();
    $mail->Host ='Smtp.gmail.com';
    $mail->SMTPAuth= true;
    $mail->Username= 'basuslathia01@gmail.com';
    $mail->Password='fdcv glpc bpuc vhxj';
    $mail->SMTPSecure= PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;


    $mail->setFrom('basuslathia01@gmail.com','B S');
    $mail->addAddress($_POST['email'], 'Joe User');
    $mail->addReplyTo('basuslathia01@gmail.com', 'CID');

    //$mail->addCC('cc@example.com');
$mail-> addAttachment('data.jpeg');
//$Mail->addAttachment('/tmp/image.jpg);

//content

$mail->isHTML(true);
$mail->Subject=$_POST['subject'];
$mail->Body=$_POST['message'];
//$mail->Body = "This is the HTML message"
//$mail->AltBody= "This is the body"


$mail->send();
echo 'Message has been sent';
catch(Exception $e);
echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";


}

 -->
