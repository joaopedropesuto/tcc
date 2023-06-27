<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>Entrar</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/signin.css">
</head>

<body>
  <div class='container'>
    <div class='card'>
      <h1> Entrar </h1>

      <div id='msgError'></div>

      <form action="testelogin.php" method="POST">
        <div class='label-float'>
          <input type='text' name='nomeUsuario' id='usuario' paceholder='' required>
          <label id='userLabel' for='usuario'><i class="fa-solid fa-user"></i> Digite seu nome de usuário </label>
        </div>

        <div class='label-float'>
          <input type='password' name='senha' id='senha' paceholder='' required>
          <label id='senhaLabel' for='senha'><i class="fa-solid fa-lock"></i> Digite sua senha</label>
          <i class="fa fa-eye" aria-hidden="true"></i>
        </div>

      <div class='justify-center'>
        <input class='btnEntrar' type="submit" name='submit' value="Entrar">
      </div>
      </form>

      <div class='justify-center'>
        <hr>
      </div>

      <p> Não tem uma conta?
        <a href='signup.php'> Criar conta </a>
      </p>

    </div>
  </div>
</body>

</html>