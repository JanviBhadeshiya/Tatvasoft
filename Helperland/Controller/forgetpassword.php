
<?php
$to_email = $email;
$subject = "Forget Password";
$body = "<h6 style='font-size:16px; color:green;'>Hi,.Click Here to Reset Your Password</h6>

   <h5 style='font-size:17px; color:red;'>Please Click This and Reset Your Password </h5>
   <br>


 </div>
    ";
$headers = "From: helperlandxyz@gmail.com ";

if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email...";
} else {
    echo "Email sending failed...";
}
?>