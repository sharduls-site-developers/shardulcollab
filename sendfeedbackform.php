<?php
if (isset($_POST['submit']))    
{    
          // Instructions if $_POST['value'] exist    

    $name=$_POST["Name"];
    $Email=$_POST["Email"];
    $Subject=$_POST["Subject"];
    $Message=$_POST["Message"];
    
//    $to="sohampatel028@gmail.com";
    $subject="shardul form";
//    mail("sohampatel028@gmail.com",$subject,$Message,"From".$name);
    $check=mail($Email,"Request to get in touch with Shardul","Dear, ".$name.". We have received your request and will be in contact with your shortly. Your message: ".$Message);
   // header("Location: /web/index.html"); /* Redirect browser */
    //exit();
}
?>