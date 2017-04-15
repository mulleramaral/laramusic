<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>LaraMusic</title>

    <!-- Boostrap CSS -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/bootstrap-theme.min.css">

    <!-- Fonts Icons CSS -->
    <link rel="stylesheet" href="./css/font-awesome.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="./css/laramusic.css">
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="./imgs/favicon-laramusic.png">
</head>
<body>
    <h1 class="oculta">LaraMusic</h1>
    <header class="header">
        <div class="container">
            <div class="col-md-3 col-xs-12">
                <img src="imgs/laramusic.png" alt="LaraMusic" title="LaraMusic" class="img-logo">
            </div>

            <div class="col-md-7 col-xs-8">
                <form action="" class="form-search">
                    <input type="text" name="pesquisa" placeholder="Pesquisar Música">
                    <button class="btn-search"><i class="fa fa-search" aria-hidden="true"></i></button>
                </form>
            </div>

            <div class="col-md-2 col-xs-4">
                <a href="" class="login">Entrar</a>
            </div>
        </div> <!-- End Container -->
    </header> <!-- End Header -->

    <div class="clear"></div>
    <hr class="hr">

    <!-- Conteudo Dinâmico -->
    <?php
    if( isset($_GET['prm'])){
        if(file_exists("pags/{$_GET['prm']}.php"))
            include_once "pags/{$_GET['prm']}.php";
        else
            include_once 'pags/404.php';
    } else{
        include_once 'pags/home.php';
    }
    ?>

    <div class="clear"></div>

    <footer class="footer">
        <div class="container text-center">
            <p class="text-footer">CopyRight &copy; EspecializaTI - Todos os direitos reservados <?=date('Y')?> <br/>
            CNPJ: 23.882.706/0001-20 - contato@especializati.com.br</p>

            <div class="social">
                <a href="">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>

                <a href="">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
            </div>
        </div> <!-- End Container -->
    </footer> <!-- End Footer -->

    <!-- jQuery -->
    <script src="js/jquery-3.2.0.js"></script>

    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>