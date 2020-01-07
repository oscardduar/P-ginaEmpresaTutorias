<?php

if (isset($_POST['enviar'])){
    if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['msg'])){

        $destino ="sthartutorias@gmail.com";
        $nombre = $_POST['name'];
        $correo = $_POST['email'];
        $telefono = $_POST['phone'];
        $mensaje = $_POST['msg'];
        $contenido = "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nTeléfono: " . $telefono . "\nMensaje: " . $mensaje;
        $mail = mail($destino, "Contacto", $contenido);

        if ($mail){
            echo "Su mensaje ha sido enviado";
        }
    }

}



    
