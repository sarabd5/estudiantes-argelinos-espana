<?php
// Página principal - Estudiantes Argelinos en España
$titulo = "Inicio - Estudiantes Argelinos en España";
include 'header.php';
?>

<section class="hero">
    <div class="hero-content">
        <h1>Bienvenido, estudiante argelino 🇩🇿</h1>
        <p>Tu guía completa para estudiar en <span class="destacado">Valencia, España</span></p>
        <a href="tramites.php" class="btn">Comenzar ahora</a>
    </div>
</section>

<section class="features">
    <div class="card">
        <h3>📘 Entender los pasos</h3>
        <p>Desde la homologación hasta la matrícula.</p>
    </div>
    <div class="card">
        <h3>🎓 Encontrar estudios</h3>
        <p>Grados, másteres y formación profesional.</p>
    </div>
    <div class="card">
        <h3>📋 Trámites administrativos</h3>
        <p>Visa, NIE, empadronamiento y más.</p>
    </div>
    <div class="card">
        <h3>📞 Contacto fácil</h3>
        <p>Asesoría personalizada.</p>
    </div>
</section>

<div class="card" style="margin: 40px;">
    <h2>Información desde la API</h2>

    <?php
        include 'api/paises.php';
    ?>
</div>

<?php include 'footer.php'; ?>
