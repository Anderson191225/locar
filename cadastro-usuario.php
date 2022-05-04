<?php
    if(isset($_POST['submit']))
    {    
 

    include_once('config.php');

    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $funcionario = $_POST['opicao'];
    $data_nasc = $_POST['data_nascimento'];
    $cidade = $_POST['cidade'];
    $bairro = $_POST['bairro'];
    $rua = $_POST['rua'];
    $numero = $_POST['numero'];
    $senha = $_POST['senha'];
    
    $result = mysqli_query($conexao, "INSERT INTO usuario (nome, email, telefone, funcionario, cidade, rua, numero, bairro, cpf, senha, data_nascimento)VALUES ('$nome','$email','$telefone','$funcionario','$cidade','$rua','$numero','$bairro','$cpf','$senha','$data_nasc')");

    }
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>
          Cadastre-se
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
                                <li><a href="login.php">Login</a></li>
                                <li><a href="">Cadastre-se</a></li>
                            </ul>
                        </nav>
                    
                </header>
                <div class="box">
                
                    <form action="cadastro-usuario.php" method="POST">
                        <fieldset>
                            <legend><b>Cadastre-se</b></legend><br>
                            <div class="inputBox">
                                <input type="text" name="nome" id="nome" class="inputUser" required>
                                <label for="nome" class="labelInput">Nome completo</label>
                            </div>
                            <br><br>
                            <div class="inputBox">
                                <input type="text" name="cpf" id="cpf" class="inputUser" required>
                                <label for="cpf" class="labelInput">CPF</label>
                            </div>
                            <br><br>
                            <div class="inputBox">
                                <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                                <label for="telefone" class="labelInput">Telefone</label>
                            </div>
                            <p>Funcionário:</p>
                            <input type="radio" id="sim" name="opicao" value="sim" required>
                            <label for="sim">Sim</label>
                            <br>
                            <input type="radio" id="nao" name="opicao" value="nao" required>
                            <label for="nao">Não</label>
                            <br><br>
                            <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                            <input type="date" name="data_nascimento" id="data_nascimento" required>
                            <br><br><br>
                            <div class="inputBox">
                                <input type="text" name="cidade" id="cidade" class="inputUser" required>
                                <label for="cidade" class="labelInput">Cidade</label>
                            </div>
                            <br><br>
                            <div class="inputBox">
                                <input type="text" name="bairro" id="bairro" class="inputUser" required>
                                <label for="bairro" class="labelInput">Bairro</label>
                            </div>
                            <br><br>
                            <div class="inputBox">
                                <input type="text" name="rua" id="Rua" class="inputUser" required>
                                <label for="rua" class="labelInput">Rua</label>
                            </div>
                            <br><br>
                            <div class="inputBox">
                                <input type="number" name="numero" id="numero" class="inputUser" required>
                                <label for="numero" class="labelInput">Número</label>
                            </div>
                            <br><br>
                            <div class="inputBox">
                                <input type="text" name="email" id="email" class="inputUser" required>
                                <label for="email" class="labelInput">Email</label>
                            </div>
                            <br><br>
                            <div class="inputBox">
                                
                                 <input id="senha" type="password" name="senha" class="inputUser" required>   
                                 <label for="senha" class="labelInput">Senha</label>
                            </div>
                            <br><br>
                            <input type="submit" name="submit" id="submit">

                        </fieldset>
                    </form>
                
                  </div>
                    

                <footer class="bg3">
                    <p>Informações ao consumidor: Locar Rent a Car S/A - CNPJ nº 125.970.085/0001-99</p>

                        <p>Sede: Avenida Barão do Rio Branco, n° 600 - Guanambi - CEP: 46430-000 - Guanambi - BA</p>
                        
                        <p>Central de Reservas e Assistência a Clientes 24h: 0800 555 8080</p>
                        
                       <p> Central de Reservas 24 horas: 0 800 555 9000 | Assistência a Clientes 24 horas: 0 800 555 9000</p>
                       <p> E-mail: centraldereservas@locar.com</p>
                </footer>
            
        </body>
</html>
