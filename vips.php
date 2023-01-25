<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<title>Home - Mercearia do Joao</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- responsividade-->
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
                    <li class="nav-item">
                        <a class="nav-link" href="home.php">Calculadora</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="vips.php">Vips</a>
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

            </div>
               
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">CPF</th>
                </tr>
            </thead>
            <tbody>
                <?php
                
                // clientes vips
                $cpf_vips = ["12345678912", "44493249862"];
                $i = 0;
                $cont = count($cpf_vips);
                
                while ($i < $cont)
                {
                    echo '<tr>';
                    echo '<td>'. $cpf_vips[$i] . '</td>';
                    echo '</td>';
                    echo '</tr>';

                    $i = $i + 1;
                }
                
                ?>
                
            </tbody>
        </table>

    </div>
		
        <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>

</html>