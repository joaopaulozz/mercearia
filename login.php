<?php
  // Codigo que faz a validação do login
  $usuario_correto = "admin";
  $senha_correta = "1234";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username == $usuario_correto && $password == $senha_correta) {
      // Sucesso ao Logar
      session_start();
      $_SESSION["logged_in"] = true;
      header("Location: home.php");
      exit;
    } else {
      // Falha ao realizar login
      //echo "Usuario ou senha incorreto";
        echo ("
        <html>
        <head>
        <meta charset='UTF-8'>
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@9'></script>	
        </head>
        <body>

        <script>
          Swal.fire({
            icon: 'error',
            title: 'Erro',
            text: 'Usuário e/ou senha inválidos !',
          }).then(()=>location.href=\"index.html\");
        </script>
        </body>
        <html>");
          }
    }
?>