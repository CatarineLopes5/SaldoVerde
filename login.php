
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="css/main.css">

        <title>login</title>
    </head>


    <body>

    <!-- Barra de menu na parte superior da tela -->
        <nav class="navbar navbar-expand-md" >
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">
                    <img src="img/logoBranco.png" alt="Logo do site Saldo Verde" width="170" height=""  class="d-inline-block align-text-top" style="margin-top:10px;">
                </a>

                <div class="d-flex" id="main-navigation">
                    <ul class="nav nav-underline">
                        
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="login.php">Faça seu Login</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="cadastro.php">Cadastre-se</a>
                        </li> -->
                    </ul>
                </div>
            </div>
        </nav>


        <!-- Modal de login -->
        <div class="bodylogin">
            <div class="estrelas"></div>

                <div class="formulario">
                    <h1>Login</h1>
                    <form action="#">
                        <div class="mb-3">
                            <div class="caixa-formulario">
                                
                                <input type="text" placeholder="Digite seu nome de usuário" required>
                                <i class='bx bxs-user'></i>
                            </div>
                            

                        <div class="caixa-formulario">
                            <input type="password" placeholder="Senha" required>
                            <i class='bx bxs-lock-alt'></i>
                        </div>

                            
                        <div class="caixa-lembrar-esqueci">
                            <label><input type="checkbox"> Lembrar</label>
                            <a href="#">Esqueci minha senha</a>
                        </div>

                         <button onclick="window.location.href='home.php'" type="button" class="btn">Entrar</button>

                        <div class="Link-registro">
                            <p>Não tem conta? <a href="#">Registrar</a> </p>
                        </div>
                    </form>

                </div> 
        </div>
    </body>
</html>
