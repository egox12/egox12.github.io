<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $sugerencia = $_POST["sugerencia"];
    
    // Correo de destino
    $to = "curicoturista@gmail.com";
    
    // Asunto del correo
    $subject = "Nueva Sugerencia de $nombre";

    // Mensaje del correo
    $message = "Nombre: $nombre\n";
    $message .= "Correo electrónico: $email\n\n";
    $message .= "Sugerencia:\n$sugerencia";

    // Cabeceras del correo
    $headers = "From: $email";

    // Enviar el correo
    if (mail($to, $subject, $message, $headers)) {
        echo "¡Sugerencia enviada con éxito!";
    } else {
        echo "Error al enviar la sugerencia. Por favor, intenta nuevamente.";
    }
}
?>
