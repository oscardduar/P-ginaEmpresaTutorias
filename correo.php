<?php

if (isset($_POST['enviar'])){
    if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['msg'])){
        $name= $_POST['name'];
        $asunto = $_POST['phone'];
        $msg = $_POST['msg'];
        $email = $_POST['email'];
        $header = "From: noreply@example.com" . "\r\n";
        $header.= "Reply-To: noreply@example.com" ."\r\n";
        $header.= "X-Mailer: PHP/". phpversion();
        $mail = @mail($email,$asunto,$msg,$header);
        if ($mail){
            echo "Su mensaje ha sido enviado";
        }
    }

}
