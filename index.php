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

    <!-- CSS -->
    <link rel="stylesheet" href="./css/resets.css">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="./imgs/favicon-laramusic.png">

    <!-- jQuery -->
    <script src="js/jquery-3.2.0.js"></script>

    <!-- Inicio do jPlayer -->
    <link href="dist/skin/blue.monday/css/jplayer.blue.monday.min.css" rel="stylesheet"/>
    <script src="dist/jplayer/jquery.jplayer.min.js"></script>
    <script src="dist/add-on/jplayer.playlist.min.js"></script>
    <script type="text/javascript">
        //<![CDATA[
        $(document).ready(function(){

            new jPlayerPlaylist({
                jPlayer: "#jquery_jplayer_1",
                cssSelectorAncestor: "#jp_container_1"
            }, [
                {
                    title:"Big Buck Bunny Trailer",
                    artist:"Blender Foundation",
                    free:true,
                    m4v:"http://www.jplayer.org/video/m4v/Big_Buck_Bunny_Trailer.m4v",
                    ogv:"http://www.jplayer.org/video/ogv/Big_Buck_Bunny_Trailer.ogv",
                    webmv: "http://www.jplayer.org/video/webm/Big_Buck_Bunny_Trailer.webm",
                    poster:"http://www.jplayer.org/video/poster/Big_Buck_Bunny_Trailer_480x270.png"
                },
                {
                    title:"Finding Nemo Teaser",
                    artist:"Pixar",
                    m4v: "http://www.jplayer.org/video/m4v/Finding_Nemo_Teaser.m4v",
                    ogv: "http://www.jplayer.org/video/ogv/Finding_Nemo_Teaser.ogv",
                    webmv: "http://www.jplayer.org/video/webm/Finding_Nemo_Teaser.webm",
                    poster: "http://www.jplayer.org/video/poster/Finding_Nemo_Teaser_640x352.png"
                },
                {
                    title:"Incredibles Teaser",
                    artist:"Pixar",
                    m4v: "http://www.jplayer.org/video/m4v/Incredibles_Teaser.m4v",
                    ogv: "http://www.jplayer.org/video/ogv/Incredibles_Teaser.ogv",
                    webmv: "http://www.jplayer.org/video/webm/Incredibles_Teaser.webm",
                    poster: "http://www.jplayer.org/video/poster/Incredibles_Teaser_640x272.png"
                }
            ], {
                swfPath: "./dist/jplayer",
                supplied: "webmv, ogv, m4v",
                useStateClassSkin: true,
                autoBlur: false,
                smoothPlayBar: true,
                keyEnabled: true
            });

            new jPlayerPlaylist({
                jPlayer: "#jquery_jplayer_2",
                cssSelectorAncestor: "#jp_container_2"
            }, [
                {
                    title:"Cro Magnon Man",
                    mp3:"http://www.jplayer.org/audio/mp3/TSP-01-Cro_magnon_man.mp3",
                    oga:"http://www.jplayer.org/audio/ogg/TSP-01-Cro_magnon_man.ogg"
                },
                {
                    title:"Your Face",
                    mp3:"http://www.jplayer.org/audio/mp3/TSP-05-Your_face.mp3",
                    oga:"http://www.jplayer.org/audio/ogg/TSP-05-Your_face.ogg"
                },
                {
                    title:"Cyber Sonnet",
                    mp3:"http://www.jplayer.org/audio/mp3/TSP-07-Cybersonnet.mp3",
                    oga:"http://www.jplayer.org/audio/ogg/TSP-07-Cybersonnet.ogg"
                },
                {
                    title:"Tempered Song",
                    mp3:"http://www.jplayer.org/audio/mp3/Miaow-01-Tempered-song.mp3",
                    oga:"http://www.jplayer.org/audio/ogg/Miaow-01-Tempered-song.ogg"
                },
                {
                    title:"Hidden",
                    mp3:"http://www.jplayer.org/audio/mp3/Miaow-02-Hidden.mp3",
                    oga:"http://www.jplayer.org/audio/ogg/Miaow-02-Hidden.ogg"
                },
                {
                    title:"Lentement",
                    free:true,
                    mp3:"http://www.jplayer.org/audio/mp3/Miaow-03-Lentement.mp3",
                    oga:"http://www.jplayer.org/audio/ogg/Miaow-03-Lentement.ogg"
                },
                {
                    title:"Lismore",
                    mp3:"http://www.jplayer.org/audio/mp3/Miaow-04-Lismore.mp3",
                    oga:"http://www.jplayer.org/audio/ogg/Miaow-04-Lismore.ogg"
                },
                {
                    title:"The Separation",
                    mp3:"http://www.jplayer.org/audio/mp3/Miaow-05-The-separation.mp3",
                    oga:"http://www.jplayer.org/audio/ogg/Miaow-05-The-separation.ogg"
                },
                {
                    title:"Beside Me",
                    mp3:"http://www.jplayer.org/audio/mp3/Miaow-06-Beside-me.mp3",
                    oga:"http://www.jplayer.org/audio/ogg/Miaow-06-Beside-me.ogg"
                },
                {
                    title:"Bubble",
                    free:true,
                    mp3:"http://www.jplayer.org/audio/mp3/Miaow-07-Bubble.mp3",
                    oga:"http://www.jplayer.org/audio/ogg/Miaow-07-Bubble.ogg"
                },
                {
                    title:"Stirring of a Fool",
                    mp3:"http://www.jplayer.org/audio/mp3/Miaow-08-Stirring-of-a-fool.mp3",
                    oga:"http://www.jplayer.org/audio/ogg/Miaow-08-Stirring-of-a-fool.ogg"
                },
                {
                    title:"Partir",
                    free: true,
                    mp3:"http://www.jplayer.org/audio/mp3/Miaow-09-Partir.mp3",
                    oga:"http://www.jplayer.org/audio/ogg/Miaow-09-Partir.ogg"
                },
                {
                    title:"Thin Ice",
                    mp3:"http://www.jplayer.org/audio/mp3/Miaow-10-Thin-ice.mp3",
                    oga:"http://www.jplayer.org/audio/ogg/Miaow-10-Thin-ice.ogg"
                }
            ], {
                swfPath: "./dist/jplayer",
                supplied: "oga, mp3",
                wmode: "window",
                useStateClassSkin: true,
                autoBlur: false,
                smoothPlayBar: true,
                keyEnabled: true
            });
        });
        //]]>
    </script>
    <!-- Final do jPlayer -->
</head>
<body>
    <h1 class="oculta">LaraMusic</h1>
    <header class="header">
        <div class="container">
            <div class="col-md-3 col-xs-12">
                <a href="home">
                    <img src="imgs/laramusic.png" alt="LaraMusic" title="LaraMusic" class="img-logo">
                </a>
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

    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>