

<?php
if(isset($_POST['submit'])){
    echo $_POST['text'];
	require('PHPMailer/PHPMailerAutoload.php');
	$largestNumber=4589;
	$pa="djh";

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function


// Load Composer's autoloader
//require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);


    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'iramghosh@gmail.com';                     // SMTP username
    $mail->Password   = 'Ramghosh3838@';                               // SMTP password
    $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('iramghosh@gmail.com', 'Mailer');
    $mail->addAddress($_POST['text'], 'Joe User'); 
    $mail->addAddress($_POST['text'], 'Joe User');     // Add a recipient
                 // Name is optional
    // $mail->addReplyTo(EMAIL, 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    // Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Login Credential';
        $mail->Body    = 'Welcome to Online Recruitment Portal <br>
        UserId:<b>'.$largestNumber.'</b> <br>
        Password:<b>'.$pa.'</b>';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
}

?>

<form action="" method="post">
<input type="text" name="text">
<input type="submit" name="submit" value="submit">
	</form>