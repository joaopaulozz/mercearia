<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<title>Home - Mercearia do Joao</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="Icon" href="img/merceariabarra.png">
</head>

<body>

        <div class="container">
        <img src="img/carrinho.png">
            <div class="span10 offset1">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="home.php">Inicio</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="home.php">Calculadora</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="vips.php">Vips</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="sobre.html">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Sair</a>
                    </li>
                    </ul>
                </div>
                </nav>

                <form class="form-horizontal" action="" method="post">
					<div class="alert alert-success">Caso o cliente tenha cadastro informe seu CPF para ganhar desconto:</div>
					
					<div class="control-group">
                        <label class="control-label">CPF:</label>
                        <div class="controls">
                            <input maxlength="12" id="cpf" name="cpf" class="form-control" type="number">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Valor 1:</label>
                        <div class="controls">
                            <input id="num1" name="num1" class="form-control" type="number" required>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Valor 2:</label>
                        <div class="controls">
                            <input id="num2" name="num2" class="form-control" type="number" required>
                        </div>
                    </div>

                    <div class="control-group">
                            Operações: <br>
                        <label for="operacao">
                            <input type="radio" name="operacao" value="+" required>
                            Somar
                        </label>
                        <label for="operacao">
                            <input type="radio" name="operacao" value="-">
                            Subtrair
                        </label>
                        <label for="operacao">
                            <input type="radio" name="operacao" value="/">
                            Dividir
                        </label>
                        <label for="operacao">
                            <input type="radio" name="operacao" value="*">
                            Multiplicar
                        </label>
                        <br><br>
                    </div>

					<br>
                    <div class="form actions">
                        <button type="submit" class="btn btn-primary">Calcular</button>
                        <button type="reset" class="btn btn-light">Limpar</button>
                    </div>
                </form>
            </div>
        </div>

        <?php

            if( !empty($_POST['num1']) ) {
                $a = $_POST['num1'];
            }

            if( !empty($_POST['num2']) ) {
                $b = $_POST['num2'];
            }

            if( !empty($_POST['operacao']) ) {
                $op = $_POST['operacao'];
            }

            if( !empty($_POST['cpf']) ) {
                $cpf = $_POST['cpf'];
            }

            // clientes vips
            $cpf_vips = ["12345678912", "44493249862"];
            $i = 0;
            $cont = count($cpf_vips);
                
            if ( !empty($cpf)){

                if ($cpf == $cpf_vips[0] || $cpf == $cpf_vips[1] ){
                    if( !empty($op) ) {
                        if($op == '+')
                            $c = $a + $b;
                        else if($op == '-')
                            $c = $a - $b;
                        else if($op == '*')
                            $c = $a*$b;
                        else
                            $c = $a/$b;

                        echo "O cliente tem um desconto VIP!<br>";
                        echo "O resultado da que o cliente terá que pagar é: $c";
                        
                    }
                }
                else{
                    if( !empty($op) ) {
                        if($op == '+')
                            $c = $a + $b;
                        else if($op == '-')
                            $c = $a - $b;
                        else if($op == '*')
                            $c = $a*$b;
                        else
                            $c = $a/$b;

                        echo "O cliente NAO tem nenhum desconto VIP!<br>";
                        echo "O resultado da que o cliente terá que pagar é: $c";

                }

            }
        }
            else{

                if( !empty($op) ) {
                    if($op == '+')
                        $c = $a + $b;
                    else if($op == '-')
                        $c = $a - $b;
                    else if($op == '*')
                        $c = $a*$b;
                    else
                        $c = $a/$b;

                    echo "O resultado da que o cliente terá que pagar é: $c";
                    
                }
            }

        ?> 
		
        <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    </body>

</html>