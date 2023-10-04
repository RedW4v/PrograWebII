<?php
include ("header.php");

// Obtener los datos del formulario
$nombre = $_POST["txtnombre"];
$edad = $_POST["txtedad"];
$correo = $_POST["txtcorreo"];
$contrasena = $_POST["txtcontrasena"];

echo'
<div class="datos">
    <h2>Datos del formulario</h2>
    <ul>
        <li>Nombre: <strong>'.$nombre.'</strong></li>
        <li>Edad: <strong>'.$edad.'</strong></li>
        <li>Correo electrónico: <strong>'.$correo.'</strong></li>
        <li>Contraseña: <strong>'.$contrasena.'</strong></li>
    </ul>
</div>';


    echo '<a href="index.php">Regresa al formulario</a>';
    include ("footer.php");
?>



