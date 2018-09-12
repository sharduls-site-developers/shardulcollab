<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
if( isset($_POST['input-22']) && isset($_POST['input-23']) && isset($_POST['input-24']) && isset($_POST['m'])){
    $n = $_POST['input-22']; // HINT: use preg_replace() to filter the data
    $e = $_POST['input-23'];
    $s = $_POST['input-24'];
    $m = nl2br($_POST['m']);

    require('phpmailer/src/SMTP.php');
    require('phpmailer/src/PHPMailer.php');
    require('phpmailer/src/Exception.php');
    
    $mail = new PHPMailer();
    
    $mail->Host="smtp.gmail.com";
    $mail->IsSMTP();
    $mail->SMTPAuth=true;
    $mail->Username="use your own";
    $mail->Password="use your own";

    $mail->SMTPSecure="ssl";
    $mail->Port=465;

    $mail->SetFrom('name@yourdomain.com', 'Web App');
    $mail->Subject = $s;
    $mail->MsgHTML($m);
    $mail->AddAddress($e);

    if(!$mail->Send()) {
        echo "The server failed to send the message. Please try again later.";     }
    else {
        echo "success";
     }

}
?>