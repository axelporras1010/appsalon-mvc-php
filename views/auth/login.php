<h1 class="nombre-pagina">Login</h1>
<p class="descripcion-pagina">Inicio sesion con tus datos</p>

<?php 
    include_once __DIR__ . "/../templates/alertas.php";
?>

<form class="formulario" method="POST" action="/">
    <div class="campo">
        <label for="email">Email</label>
        <input 
            type="email"
            id="email"
            placeholder="Tu email"
            name="email"
            value="<?php echo s($auth->email) ?>"   
        />
    </div>
    <div class="campo">
        <label for="email">Password</label>
        <input 
            type="password"
            id="password"
            placeholder="Tu Password"
            name="password"   
        />
    </div>
    <div class="login-boton">
        <input type="submit" class="boton" value="Iniciar Sesion">
    </div>
</form>
<div class="acciones">
    <a href="/crear-cuenta">Aun no tienes una cuenta? Crea una</a>
    <a href="/olvide">Olvidase tu password?</a>
</div>