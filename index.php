<!DOCTYPE html>
<html lang="pt-br" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PaginaInicial</title>
    
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
                    
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Faça seu Login</a>
                    </li>

                    <!-- <li class="nav-item">
                        <a class="nav-link" href="cadastro.php">Cadastre-se</a>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav>


    <!--conteúdo da página-->
    <header class="page-header header container-fluid" style="height:100vh">
        <div class="description">

            <h1> Bem-vindo ao Sistema Saldo verde! </h1>

            <p>Sistema com o intuito de ajudar o usuário com o controle diário das suas finanças </p>

            <button onclick="window.location.href='cadastro.php'" type="button" class="btn">Cadastre-se!</button>
        
        </div>


    </header>





</body>
</html>