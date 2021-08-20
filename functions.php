<?php
require_once('functions/admin.php');

add_theme_support('post-thumbnails');

add_action('phpmailer_init', 'mailer_config');
function mailer_config($mail)
{
    $mail->isSMTP();
    //Set SMTP host name                          
    $mail->Host = "smtp.office365.com";
    //Set this to true if SMTP host requires authentication to send email
    $mail->SMTPAuth = true;
    //Provide username and password     
    $mail->Username = "info@tettehtech.com";
    $mail->Password = "Tettaltd201988";
    //If SMTP requires TLS encryption then set it
    $mail->SMTPSecure = "tls";
    //Set TCP port to connect to
    $mail->Port = 587;

    $mail->FromName = "Password";
    $mail->From = "info@tettehtech.com";
}
