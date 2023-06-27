<?php

if(isset($_POST['submit']))
{
   include_once('config.php');

$nomeUsuario = $_POST['nomeUsuario'];
$nomeCompleto = $_POST['nomeCompleto'];
$senha = $_POST['senha'];

$result = mysqli_query($conexao, "INSERT INTO usuarios(nomeUsuario,nomeCompleto,senha) 
VALUES ('$nomeUsuario', '$nomeCompleto', '$senha')");
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="assets/css/signup.css">

   <title>Cadastrar</title>
</head>

<body>
   <div class='container'>

      <div class='card'>

         <div id="logoi">
            <img src="../imagens/logoi.ico" alt="" width="80px">
         </div>
         <div id="titulo">
            <h1> Crie sua conta </h1>
         </div>
         <div id="clear"></div>

         <div id='msgError'></div>
         <div id='msgSuccess'></div>

         <form action="signup.php" method="POST">
            <div class="label-float">
               <input type="text" name='nomeUsuario' id="nomeUsuario" placeholder=" " required>
               <label id="labelNome" for="nome"></i><i class="fa-solid fa-user"> </i> Nome de Usuário</label>
            </div>

            <div class="label-float">
               <input type="text" name='nomeCompleto' id="nomeCompleto" placeholder=" " required>
               <label id="labelUsuario" for="usuario"></i><i class="fa-solid fa-user"> </i> Seu nome completo</label>
            </div>

            <div class="label-float">
               <input type="password" name='senha' id="senha" placeholder=" " required>
               <label id="labelSenha" for="senha"><i class="fa-solid fa-lock"></i> Digite uma senha</label>
               <i id="verSenha" class="fa fa-eye" aria-hidden="true"></i>
            </div>
            
         <div class='justify-center'>
            <input class="btnEnv" type="submit" name="submit" value="enviar cadastro">
         </div>
         </form>
         <a href="signin.php">Voltar à pagina de entrada</a>
      </div>
   </div>
   
</body>

</html>