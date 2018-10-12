<html>
<head><title></title>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="CSSLog_SP1.php">
  </head>
  <body>

    <div class="login-box">
      <h1>Login Here</h1>
      <form action="encriptado.php" method="POST" class="form-register" autocomplete="off">
        <label for="username">Usuario</label>
        <input type="text" name="txtNombre" placeholder="Usuario">
        <label for="password">Password</label>
        <input type="password" name="txtClave" placeholder="Password">
        <input type="submit" name="btnIngresar" value="Log In">
        <p class="message">¿No estás registrado? <a href="form.php">Crea una cuenta</a></p>
      </form>
    </div>
  </body>
</html>