<?php
$titulo = "Contacto";
include 'header.php';
?>

<section class="contenido">
    <h2>📞 ¿Necesitas ayuda personalizada?</h2>
    <form action="enviar.php" method="POST" class="form-contacto">
        <label>Nombre completo:</label>
        <input type="text" name="nombre" required>
        
        <label>Correo electrónico:</label>
        <input type="email" name="email" required>
        
        <label>WhatsApp (con código de Argelia +213):</label>
        <input type="tel" name="whatsapp" required>
        
        <label>Mensaje:</label>
        <textarea name="mensaje" rows="5" required></textarea>
        
        <button type="submit" class="btn">Enviar consulta</button>
    </form>
    <p>También puedes escribirnos a: <strong>info@estudiantes-argelinos-valencia.com</strong></p>
</section>

<?php include 'footer.php'; ?>
