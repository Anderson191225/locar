<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>
          Entrar
        </title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="login.css">
    </head>
        <body>
           
               
                <header class="bg1">
                  
                        <nav>
                            <div>
                                <img src="imagens/logo6.png" alt="" class="logo">
                            
                            </div>
                            <button>&#9776;</button>
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li><a href="">Carros</a></li>
                                <li><a href="">Login</a></li>
                                <li><a href="cadastro-usuario.php">Cadastre-se</a></li>
                            </ul>
                        </nav>
                    
                </header>
                    <main class="bg2">
                    <div class="login_body">
                    <div class="login_box">
                    <h2>Entrar</h2>
                    <form action="testeLogin.php" method = "POST">
                        <div class="input_box">
                            <input required type="text" name="e-mail" id="email" placeholder="Email">
                            <div class="underline"></div>

                        </div>
                        <div class="input_box">
                            <input required type="password" name="password" id="password" placeholder="Senha">
                            <div class="underline"></div>          

                        </div>
                        <div class="botao">
                        <input type="submit" name="submit" value="Entrar">
                        </div>
                    </form>
                    </div>
                    </div>
                    </main>

                <footer class="bg3">
                    <p>Informações ao consumidor: Locar Rent a Car S/A - CNPJ nº 125.970.085/0001-99</p>

                        <p>Sede: Avenida Barão do Rio Branco, n° 600 - Guanambi - CEP: 46430-000 - Guanambi - BA</p>
                        
                        <p>Central de Reservas e Assistência a Clientes 24h: 0800 555 8080</p>
                        
                       <p> Central de Reservas 24 horas: 0 800 555 9000 | Assistência a Clientes 24 horas: 0 800 555 9000</p>
                       <p> E-mail: centraldereservas@locar.com</p>
                </footer>
            
        </body>
</html>