<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>

    <!-- Icone na guia -->
    <link rel="icon" type="image/png" href="img/iconeBranco.png">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-B/GM4XqrwHnWXNOWMbloTmrYXZg10cakYGmpfsR/bbzQ6JAJI4ihuyADKLnBgrCe" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    
</head>
<body>
   <!-- Barra de menu na parte superior da tela -->
    <nav class="navbar navbar-expand-md">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img src="img/logoBranco.png" alt="Logo do site Saldo Verde" width="150" height="" class="d-inline-block align-text-top">
            </a>

            <div class="d-flex" id="main-navigation">
                <ul class="nav nav-underline">
                    
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="login.php">Faça seu Login</a>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav>

            <!-- Modal de login -->
        <div class="bodylogin">
            <div class="estrelas"></div>

                <div class="formulario">
                    <h1>Cadastro</h1>
                    <form action="processoCadastro.php" method="POST">
                        <div class="mb-3">
                            <div class="caixa-formulario">
                                
                                <label for="user"></label>
                                <input type="text" placeholder="Digite seu nome de usuário" name="user" required >
                            </div>

                            <div class="caixa-formulario">
                                
                                <label for="email"></label>
                                <input type="text" placeholder="Digite seu email" required name="email">
                            </div>
                            

                        <div class="caixa-formulario">
                            <label for="pass"></label>
                            <input type="password" placeholder="Digite sua Senha" required name="pass">
                        </div>

                         <button type="submit" class="btn">Cadastrar</button>

                        <div class="link-registro">
                            <p>Ja possui uma conta? <a href="login.php">Faça seu login</a> </p>
                        </div>
                    </form>

                </div> 
        </div>
</body>
</html>