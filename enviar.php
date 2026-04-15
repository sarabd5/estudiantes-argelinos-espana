<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST['nombre']);
    $email = htmlspecialchars($_POST['email']);
    $whatsapp = htmlspecialchars($_POST['whatsapp']);
    $mensaje = htmlspecialchars($_POST['mensaje']);
    
    // Aquí podrías enviar un email o guardar en BD
    // Por ahora mostramos un mensaje de éxito
    echo "<!DOCTYPE html><html><head><meta charset='UTF-8'><title>Mensaje enviado</title><link rel='stylesheet' href='style.css'></head><body>";
    echo "<div class='contenido'><h2>✅ Consulta enviada</h2>";
    echo "<p>Gracias $nombre, en breve te contactaremos por WhatsApp o email.</p>";
    echo "<a href='index.php' class='btn'>Volver al inicio</a></div></body></html>";
} else {
    header("Location: contacto.php");
}
?>
