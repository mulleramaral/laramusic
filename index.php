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

    <div class="container">
        <header class="header">
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
        </header> <!-- End Header -->

        <div class="clear"></div>
        <hr class="hr">

        <section class="albuns">
            <h1 class="title">
                Últimos Albúns:
            </h1>

            <div class="list-albuns col-md-12">
                <article class="col-md-3 col-xs-6 albun">
                    <a href="">
                        <img src="./imgs/sitekit-music.png" alt="Nome do Album" class="img-albun">
                        <h1 class="title-albun">
                            Nome do Albún
                        </h1>
                    </a>
                </article>

                <article class="col-md-3 col-xs-6 albun">
                    <a href="">
                        <img src="./imgs/sitekit-music.png" alt="Nome do Album" class="img-albun">
                        <h1 class="title-albun">
                            Nome do Albún
                        </h1>
                    </a>
                </article>

                <article class="col-md-3 col-xs-6 albun">
                    <a href="">
                        <img src="./imgs/sitekit-music.png" alt="Nome do Album" class="img-albun">
                        <h1 class="title-albun">
                            Nome do Albún
                        </h1>
                    </a>
                </article>

                <article class="col-md-3 col-xs-6 albun">
                    <a href="">
                        <img src="./imgs/sitekit-music.png" alt="Nome do Album" class="img-albun">
                        <h1 class="title-albun">
                            Nome do Albún
                        </h1>
                    </a>
                </article>
            </div><!-- End List -->
        </section><!-- End Albuns -->
    </div> <!-- End Div Container -->

    <!-- jQuery -->
    <script src="js/jquery-3.2.0.js"></script>

    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>