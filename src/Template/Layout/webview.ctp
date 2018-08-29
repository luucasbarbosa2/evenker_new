<!DOCTYPE html>
<html lang="pt-br">
    <!--================================================================================
          Item Name: Materialize - Material Design Admin Template
          Version: 4.0
          Author: PIXINVENT
          Author URL: https://themeforest.net/user/pixinvent/portfolio
  ================================================================================ -->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="msapplication-tap-highlight" content="no">
        <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
        <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
        <title>Santa Comanda</title>
        <!-- Favicons-->
        <link rel="icon" href="images/favicon/favicon-32x32.png" sizes="32x32">
        <!-- Favicons-->
        <link rel="apple-touch-icon-precomposed" href="/images/favicon/apple-touch-icon-152x152.png">
        <!-- For iPhone -->
        <meta name="msapplication-TileColor" content="#00bcd4">
        <meta name="msapplication-TileImage" content="/images/favicon/mstile-144x144.png">
        <!-- For Windows Phone -->
        <!-- CORE CSS-->
        <link href="/css/themes/collapsible-menu/materialize.css" type="text/css" rel="stylesheet">
        <link href="/css/themes/collapsible-menu/style.css" type="text/css" rel="stylesheet">
        <!-- Custome CSS-->
        <link href="/css/custom/custom.css" type="text/css" rel="stylesheet">
        <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
        <link href="/vendors/prism/prism.css" type="text/css" rel="stylesheet">
        <link href="/vendors/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet">
        <link href="/vendors/flag-icon/css/flag-icon.min.css" type="text/css" rel="stylesheet">
    </head>
    <body class="layout-dark">
        <!-- Start Page Loading -->
        <div id="loader-wrapper">
            <div id="loader"></div>
            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>
        </div>
        <!-- End Page Loading -->
        <!-- //////////////////////////////////////////////////////////////////////////// -->
        <!-- START HEADER -->
        <header id="header" class="page-topbar">
            <!-- start header nav-->
            <div class="navbar-fixed">
                <nav class="navbar-color">
                    <div class="nav-wrapper">
                        <div class = "nav-menu">
                            <ul class="">
                                <li class="active title"><a href="#">Cardápio</a></li>
                                <li class=""><a href="#"> Pedido</a></li>
                                <li class=""><a href="#">Comanda</a></li>
                            </ul>
                        </div>
                        <ul class = "right">
                            <li><a class="waves-effect waves-light btn  gradient-45deg-light-blue-cyan white-text">CHAMAR GARÇOM</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <!-- END HEADER -->
        <!-- //////////////////////////////////////////////////////////////////////////// -->
        <!-- START MAIN -->
        <div id="main">
            <!-- START WRAPPER -->
            <div class="wrapper">
                <!-- START LEFT SIDEBAR NAV-->
                <aside id="left-sidebar-nav" >
                    <div class="brand-sidebar">
                        <h1 class="logo-wrapper">
                            <a href="index.html" class="brand-logo">
                                <span class="logo-text hide-on-med-and-down">Restaurante</span>
                            </a>
                        </h1>
                    </div>
                    <ul id="slide-out" class="side-nav fixed leftside-navigation">
                        <li class="bold">
                            <div class="row">
                                <div class="col col s12 m12 l12">
                                    <h1 class="center-align">000</h1>
                                </div>
                            </div>
                        </li>
                        <li class="no-padding">
                            <ul class="collapsible" data-collapsible="accordion">
                                <li class="">
                                    <a class="collapsible-header waves-effect waves-cyan">
                                        <i class="material-icons">🍔</i>
                                        <span class="nav-text uppercase">Lanches</span>
                                    </a>
                                    <div class="collapsible-body">
                                        <ul>
                                            <li>
                                                <a  class = "ajax-view-button" data-render-in = "#content" data-url = "/webview/index/main" data-value = "teste">
                                                    <i class="material-icons">arrow_forward</i>
                                                    <span>Hambúrgeres de Carne</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="material-icons">arrow_forward</i>
                                                    <span> Hambúrgueres de Frango</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="bold">
                                    <a class="collapsible-header waves-effect waves-cyan">
                                        <i class="material-icons">🍧</i>
                                        <span class="nav-text uppercase ">Sobremesas</span>
                                    </a>
                                    <div class="collapsible-body">
                                        <ul>
                                            <li>
                                                <a href="layout-light.html">
                                                    <i class="material-icons">keyboard_arrow_right</i>
                                                    <span>Light Layout</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="layout-dark.html">
                                                    <i class="material-icons">keyboard_arrow_right</i>
                                                    <span>Dark Layout</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="layout-semi-dark.html">
                                                    <i class="material-icons">keyboard_arrow_right</i>
                                                    <span>Semi Dark Layout</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="layout-fixed-footer.html">
                                                    <i class="material-icons">keyboard_arrow_right</i>
                                                    <span>Fixed Footer</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="layout-menu-native-scroll.html">
                                                    <i class="material-icons">keyboard_arrow_right</i>
                                                    <span>Menu Native Scroll</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="layout-menu-collapsed.html">
                                                    <i class="material-icons">keyboard_arrow_right</i>
                                                    <span>Menu Collapsed</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="bold">
                                    <a class="collapsible-header waves-effect waves-cyan">
                                        <i class="material-icons">🍃</i>
                                        <span class="nav-text uppercase ">Vegetarianos</span>
                                    </a>
                                    <div class="collapsible-body">
                                        <ul>
                                            <li>
                                                <a href="cards-basic.html">
                                                    <i class="material-icons">keyboard_arrow_right</i>
                                                    <span> Basic</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="cards-advance.html" class="waves-effect waves-cyan">
                                                    <i class="material-icons">keyboard_arrow_right</i>
                                                    <span class="nav-text">Advance</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="cards-extended.html">
                                                    <i class="material-icons">keyboard_arrow_right</i>
                                                    <span>Extended</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="bold">
                                    <a class="collapsible-header waves-effect waves-cyan">
                                        <i class="material-icons">🍺</i>
                                        <span class="nav-text uppercase ">Bebidas</span>
                                    </a>
                                    <div class="collapsible-body">
                                        <ul>
                                            <li>
                                                <a href="cards-basic.html">
                                                    <i class="material-icons">keyboard_arrow_right</i>
                                                    <span> Basic</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="cards-advance.html" class="waves-effect waves-cyan">
                                                    <i class="material-icons">keyboard_arrow_right</i>
                                                    <span class="nav-text">Advance</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="cards-extended.html">
                                                    <i class="material-icons">keyboard_arrow_right</i>
                                                    <span>Extended</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </aside>
                <!-- END LEFT SIDEBAR NAV-->
                <!-- //////////////////////////////////////////////////////////////////////////// -->
                <!-- START CONTENT -->
                <section id="content">


                    <?= $this->Flash->render() ?>

                    <?= $this->fetch('content') ?>
                    <!-- Floating Action Button -->
                    <div class="fixed-action-btn" style="bottom: 50px; right: 19px;">
                        <a class="btn-floating btn-large gradient-45deg-light-blue-cyan gradient-shadow">
                            <i class="material-icons">add</i>
                        </a>
                        <ul>
                            <li>
                                <a href="css-helpers.html" class="btn-floating blue">
                                    <i class="material-icons">help_outline</i>
                                </a>
                            </li>
                            <li>
                                <a href="cards-extended.html" class="btn-floating green">
                                    <i class="material-icons">widgets</i>
                                </a>
                            </li>
                            <li>
                                <a href="app-calendar.html" class="btn-floating amber">
                                    <i class="material-icons">today</i>
                                </a>
                            </li>
                            <li>
                                <a href="app-email.html" class="btn-floating red">
                                    <i class="material-icons">mail_outline</i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- Floating Action Button -->

                    <!--end container-->
                </section>
                <!-- END CONTENT -->
                <!-- //////////////////////////////////////////////////////////////////////////// -->
                <!-- START RIGHT SIDEBAR NAV-->

                <!-- END RIGHT SIDEBAR NAV-->
            </div>
            <!-- END WRAPPER -->
        </div>

        <script type="text/javascript" src="/vendors/jquery-3.2.1.min.js"></script>
        <!--materialize js-->
        <script type="text/javascript" src="/js/materialize.min.js"></script>
        <!--prism-->
        <script type="text/javascript" src="/vendors/prism/prism.js"></script>
        <!--scrollbar-->
        <script type="text/javascript" src="/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
        <!--plugins.js - Some Specific JS codes for Plugin Settings-->
        <script type="text/javascript" src="/js/plugins.js"></script>
        <!--custom-script.js - Add your own theme custom JS-->
        <script type="text/javascript" src="/js/custom-script.js"></script>
        <!--Slider jQuery Initialization-->

        <script src="/src/Dwoo/AjaxController.js" type="text/javascript"></script>
        <script src="/src/Triggers/TemplateTriggers.js" type="text/javascript"></script>
        <!-- Emoji Font -->
        <script src='http://twemoji.maxcdn.com/twemoji.min.js'></script>
        <script>
            twemoji.parse(document.body);
        </script>
    </body>
</html>
