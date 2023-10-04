<?php
include ("header.php");
?>
<link rel="stylesheet" href="style.css">
<form action="respuesta.php" method="post">
    <h2>Formulario de registro</h2>

    <div class="campo">
        <label for="txtnombre">
            Nombre:
        </label>
        <input type="text" name="txtnombre" id="txtnombre">
    </div>

    <div class="campo">
        <label for="txtedad">
            Edad:
        </label>
        <input type="number" name="txtedad" id="txtedad">
    </div>

    <div class="campo">
        <label for="txtcorreo">
            Correo electrónico:
        </label>
        <input type="email" name="txtcorreo" id="txtcorreo">
    </div>

    <div class="campo">
        <label for="txtcontrasena">
            Contraseña:
        </label>
        <input type="password" name="txtcontrasena" id="txtcontrasena">
    </div>

    <button>Enviar</button>

</form>

<?php
include ("footer.php");
?>

