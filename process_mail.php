<?php

if (isset($_POST['enviar'])){

    if (!empty($_POST['txt_name']) && !empty($_POST['txt_phone']) && !empty($_POST['txt_mail']) && !empty( $_POST['txa_message']))
    {
        $name = $_POST['txt_name'];
        $phone = $_POST['txt_phone'];
        $mail = $_POST['txt_mail'];
        $message = $_POST['txt_message'];
        $mail = @mail($mail,$name,$phone,$message);
        $header = "From: noreply@example.com"."\r\n";
        $header.= "Reply-To: noreply@example.com"."\r\n";
        $header.= "X-Mailer: PHP/".phpversion();
        if ($mail)
        {
            echo "<h2>¡Consulta enviada exitosamente!</h2> <br> <a href='index.html'>Regresar a la portada</a> ";
        }
        else
        {
            echo "<h2>Hubo un problema. Intente en unos segundos más...</h2> <br> <a href='index.html'>Regresar a la portada</a> ";
        }
    }

}