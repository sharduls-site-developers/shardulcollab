<?php <script type="text/javascript">alert("working");</script>
if (isset($_POST['submit'])")  {      
          // Instructions if $_POST['value'] exist    
    $name=$_POST["Name"];
    $Email=$_POST["Email"];
    $Subject=$_POST["Subject"];
    $Message=$_POST["Message"];

require 'PHPMailerAutoload.php';
$mail = new PHPMailer;
$mail->setFrom('sohampatelforapple@gmail.com', 'shardul');
$mail->addAddress($Email, 'My Friend');
$mail->Subject  = "Request to get in touch with Shardul";
$mail->Body     = "Dear, ".$name.". We have received your request and will be in contact with your shortly. Your message: ".$Message);
if(!$mail->send()) {
  echo 'Message was not sent.';
  echo 'Mailer error: ' . $mail->ErrorInfo;
} else {
  echo 'Message has been sent.';
}
}
?>


/*
if (isset($_POST['submit']))    
{    
          // Instructions if $_POST['value'] exist    

    $name=$_POST["Name"];
    $Email=$_POST["Email"];
    $Subject=$_POST["Subject"];
    $Message=$_POST["Message"];
    

    $subject="shardul form";

    $check=mail($Email,"Request to get in touch with Shardul","Dear, ".$name.". We have received your request and will be in contact with your shortly. Your message: ".$Message);
   // header("Location: /web/index.html"); /* Redirect browser */
    //exit();
}
*/
