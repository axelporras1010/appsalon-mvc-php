<h1 class="nombre-pagina">Olvide mi password</h1>
<p class="descripcion-pagina">Restablece tu password escribiendo tu email a continuacion</p>

<?php 
    include_once __DIR__ . "/../templates/alertas.php";
?>

<form class="formulario" method="POST" action="/olvide">
    <div class="campo">
        <label for="email">Email</label>
        <input 
            type="email"
            id="email"
            name="email"
            placeholder="Tu email"
        />
    </div>
    <div class="login-boton">
        <input type="submit" class="boton" value="Enviar instrucciones">
    </div>
</form>

<div class="acciones">
    <a href="/">Ya tienes cuenta? Inicia sesion</a>
    <a href="/crear-cuenta">Aun no tienes una cuenta? Crea una</a>
</div>