<?php

//print_r($_REQUEST);

if(isset($_POST['submit']) && !empty($_POST['nomeUsuario']) && !empty($_POST['senha'])){
    include_once('config.php');
    $nomeUsuario = $_POST['nomeUsuario'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuarios WHERE nomeUsuario = '$nomeUsuario' and senha = '$senha'";

    $result = $conexao->query($sql);
    if(mysqli_num_rows($result) < 1)
    {
        unset($_SESSION['nomeUsuario']);
        unset($_SESSION['senha']);
        header('Location: signin.php');
    }
    else
    {
        $_SESSION['nomeUsuario'] = $email;
        $_SESSION['senha'] = $senha;
        header('Location: index.html');
    }
}

else{
    header('location: signin.php');
}

?>