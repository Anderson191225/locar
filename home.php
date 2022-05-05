<?php
    session_start();
    if((!isset($_SESSION['email'])==true) and (!isset($_SESSION['senha'])==true)){
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');

    }
    $logado = $_SESSION['email'];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Página inicial
        </title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="estilo.css">
    </head>
        <body>
            <main class="principal">
               
                <header>
                    
                        <nav>
                            <div>
                                <img src="imagens/logo6.png" alt="" class="logo">
                            
                            </div>
                            <button>&#9776;</button>
                            <ul>
                               
                                <li><a href="">Home</a></li>
                                <li><a href="">Carros</a></li>
                                <li><a href="">Cadastrar carro</a></li>
                                <li><a href="cadastro-usuario.php">Cadastrar usuario</a></li>
                                <li><a href="sair.php">Sair</a></li>

                            </ul>
                        </nav>

                </header>
                <h3><?php echo "$logado" ?></h3>

                <footer>
                    <p>Informações ao consumidor: Locar Rent a Car S/A - CNPJ nº 125.970.085/0001-99</p>

                        <p>Sede: Avenida Barão do Rio Branco, n° 600 - Guanambi - CEP: 46430-000 - Guanambi - BA</p>
                        
                        <p>Central de Reservas e Assistência a Clientes 24h: 0800 555 8080</p>
                        
                       <p> Central de Reservas 24 horas: 0 800 555 9000 | Assistência a Clientes 24 horas: 0 800 555 9000</p>
                       <p> E-mail: centraldereservas@locar.com</p>
                </footer>
            </main>
        </body>
</html>