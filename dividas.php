<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deveres Finaceiros</title>
    <link rel="icon" type="image/png" href="img/iconeBranco.png">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-B/GM4XqrwHnWXNOWMbloTmrYXZg10cakYGmpfsR/bbzQ6JAJI4ihuyADKLnBgrCe" crossorigin="anonymous">
</head>
<body>
    <!-- Menu -->
    <nav class="sidenav flex-colum  p-3 vh-100">
        <!-- <div class="sidebar-content"> -->
            <img src="img/logoverde.png" alt="Logo do site Saldo Verde" width="170" height=""  class="d-inline-block align-text-top" >

            <!--Opções-->
            <ul class="lists">
                 <!-- Opção Home -->
                <li class="list">
                    <a href="home.php" class="nav-link">
                        <span class="link">Dashboard</span>
                    </a>
                </li>

                <!-- Opção Movimentações-->    
                <li class="list">
                    <a href="movimentacoes.php" class="nav-link">
                        <span class="link">Movimentações</span>
                    </a>
                </li>

                 <!--Opção Conta Bancarias-->
                <li class="list">
                    <a href="metas.php" class="nav-link">
                        <span class="link">Contas & cartões </span>
                    </a>
                </li>

                <!--Opção Metas-->
                <li class="list">
                    <a href="metas.php" class="nav-link"> 
                        <span class="link">Minhas Metas</span>
                    </a>
                </li>

                <!--Opção Dívidas-->
                <li class="list">
                    <a href="dividas.php" class="nav-link-active">
                         <span class="link">Deveres Finceiros </span>
                    </a>
                </li>

                <!--Opção Configurações-->
                <li class="list">
                    <a href="configuracoes.php" class="nav-link"> 
                        <span class="link">Configurações</span>
                    </a>
                </li>

                <!--Opção Saída-->
                <li class="list">
                    <a href="index.php" class="nav-link">
                        <svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#ffffffff" viewBox="0 0 24 24" >
                        <!--Boxicons v3.0.8 https://boxicons.com | License  https://docs.boxicons.com/free-->
                        <path d="m20.2 4.02-10-2a.99.99 0 0 0-.83.21C9.14 2.42 9 2.7 9 3v1H4c-.55 0-1 .45-1 1v14c0 .55.45 1 1 1h5v1c0 .3.13.58.37.77.18.15.4.23.63.23.07 0 .13 0 .2-.02l10-2c.47-.09.8-.5.8-.98V5c0-.48-.34-.89-.8-.98M5 18V6h4v12zm14 .18-8 1.6V4.22l8 1.6z"></path><path d="M13 11a1 1 0 1 0 0 2 1 1 0 1 0 0-2"class="icon"></path>
                        </svg>
                        <span class="link">Sair</span>
                    </a>
                </li>
            </ul>

        <!--</div> -->
    </nav>





    <!--conteudoprincipal-->
    <div id="main">
        <div class="container-header">
            <div class="row">
                <div class="col-6">
                    <p class="nav" style="font-size: 45px; font-weight:bold;">Dashboard</p>
                </div>

                 <div class="col-6">
                    <div class="profile">
                        <span class="perfilName"><?php echo $_SESSION['userCadastrado'];?></span><i class="bi bi-three-dots-vertical dots aria-expanded="true"></i>
                        <img src="image.png" class="pro-img" style="width: 40px !important; height: 40px !important; border-radius: 50%;">
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>