<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="pt-br">
<!--<![endif]-->

<!-- Mirrored from htmlcoder.me/preview/the_project/v.1.2/template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Apr 2016 19:50:44 GMT -->
<head>
    <meta charset="utf-8">
    <title>Plantas do Brasil | Início</title>
    <meta name="description" content="Projeto Plantas Brasil.">
    <meta name="author" content="Kelver Machado Vargas">

    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Web Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:700,400,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=PT+Serif' rel='stylesheet' type='text/css'>

    <!-- Bootstrap core CSS -->
    <link href="assets/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Font Awesome CSS -->
    <link href="assets/fonts/font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Fontello CSS -->
    <link href="assets/fonts/fontello/css/fontello.css" rel="stylesheet">

    <!-- Plugins -->
    <link href="assets/plugins/magnific-popup/magnific-popup.css" rel="stylesheet">
    <link href="assets/plugins/rs-plugin/css/settings.css" rel="stylesheet">
    <link href="assets/css/animations.css" rel="stylesheet">
    <link href="assets/plugins/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="assets/plugins/owl-carousel/owl.transitions.css" rel="stylesheet">
    <link href="assets/plugins/hover/hover-min.css" rel="stylesheet">

    <!-- The Project core CSS file -->
    <link href="assets/css/style.css" rel="stylesheet" >
    <!-- Style Switcher Styles (Remove these two lines) -->
    <link href="assets/css/skins/green.css" rel="stylesheet">

    <!-- Custom css -->
    <link href="assets/css/custom.css" rel="stylesheet">

    <!--  SDK Facebook  -->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.9&appId=1447886032120059";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
</head>

<body class="no-trans transparent-header">
<?php require_once "basics/headerTop.html";?>
<?php require_once "basics/menu.html";?>

<!-- main-container start -->
<!-- ================ -->
<section class="main-container">

    <div class="container">
        <div class="row">
            <?php require_once "basics/lateralL.html";?>
            <!-- main start -->
            <!-- ================ -->
            <div class="main col-md-6 col-lg-6">
                <!-- page-title start -->
                <!-- ================ -->

                <div class="row">
                    <!-- main start -->
                    <!-- ================ -->
                    <div class="main object-non-visible animated object-visible fadeInUpSmall" data-animation-effect="fadeInUpSmall" data-effect-delay="100">
                        <div class="center-block p-30 light-gray-bg border-clear">
                            <h2 class="title">Cadastro</h2>
                            <form class="form-horizontal" role="form">
                                <div class="form-group has-feedback">
                                    <div class="col-sm-12">
                                        <input class="form-control" id="nome" name="nome" placeholder="Nome Completo" required="" type="text">
                                        <i class="fa fa-pencil form-control-feedback"></i>
                                    </div>
                                </div>
                                <div class="form-group has-feedback">
                                    <div class="col-sm-12">
                                        <input class="form-control" id="usuario" name="usuario" placeholder="Nome de Usuário" required="" type="text">
                                        <i class="fa fa-user form-control-feedback"></i>
                                    </div>
                                </div>
                                <div class="form-group has-feedback">
                                    <div class="col-sm-12">
                                        <input class="form-control" id="email" name="email" placeholder="E-Mail" required="" type="email">
                                        <i class="fa fa-envelope form-control-feedback"></i>
                                    </div>
                                </div>
                                <div class="form-group has-feedback">
                                    <div class="col-sm-12">
                                        <input class="form-control" id="email2" name="email2" placeholder="Confirme seu E-Mail" required="" type="email">
                                        <i class="fa fa-envelope form-control-feedback"></i>
                                    </div>
                                </div>
                                <div class="form-group has-feedback">
                                    <div class="col-sm-12">
                                        <input class="form-control" id="senha" name="senha" placeholder="Senha" required="" type="password">
                                        <i class="fa fa-lock form-control-feedback"></i>
                                    </div>
                                </div>
                                <div class="form-group has-feedback">
                                    <div class="col-sm-12">
                                        <input class="form-control" id="senha2" name="senha2" placeholder="Confirme sua Senha" required="" type="password">
                                        <i class="fa fa-lock form-control-feedback"></i>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="checkbox">
                                            <label>
                                                <input required="" type="checkbox"> Aceito os <a href="#">termos de privacidade</a> e <a href="#">termos de uso</a>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-group btn-default btn-animated pull-right">Cadastro <i class="fa fa-check"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- main end -->
                </div>
            </div>
            <!-- main end -->
            <?php require_once "basics/lateralD.html";?>
        </div>
    </div>
</section>
<!-- main-container end -->

<?php require_once "basics/rodape.php";?>
</body>
</html>