<?php
if(isset($_POST['enviar'])){
    if(!empty($_POST['nombre']) && !empty($_POST['asunto']) && !empty($_POST['emailcuerpo']) && !empty($_POST['emailDos'])){
        $nombre = $_POST['nombre'];
        $asunto = $_POST['asunto'];
        $emailcuerpo = $_POST['emailcuerpo'];
        $emailDos = $_POST['emailDos'];
        $header = "From: noreply@example.com" ."\r\n";
        $header.=  "Reply-to: noreply@example.com" ."\r\n";
        $header.=  "X-Mailer: PHP/". phpversion();
        $mail = mail($emailDos, $asunto, $emailcuerpo, $header);
        if ($mail){
            echo "<h3> Mail enviado exitosamente </h4>";
        }
    }
}
 ?>