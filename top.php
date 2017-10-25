<?php
error_reporting(0);
session_start();
?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
    <head>
        <title>E-Hospital-educatecode.com</title>
        <!-- for-mobile-apps -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Aplikasi rumah sakit free,rumah sakit" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
            function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!-- //for-mobile-apps -->
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link rel="stylesheet" href="css/jquery-ui.css" />
        <link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
        <!-- js -->
        <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/numscroller-1.0.js"></script>
        <script type="text/javascript" src="js/highcharts.js"></script>
	   <script type="text/javascript" src="js/exporting.js"></script>

		
        <!-- //js -->


        <!-- fonts -->
        <link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Viga' rel='stylesheet' type='text/css'>

        <!-- start-smoth-scrolling -->
        <script type="text/javascript" src="js/move-top.js"></script>
        <script type="text/javascript" src="js/easing.js"></script>
        <script type="text/javascript">
            jQuery(document).ready(function ($) {
                $(".scroll").click(function (event) {
                    event.preventDefault();
                    $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
                });
            });
        </script>
        <!-- start-smoth-scrolling -->

        <!--start-date-piker-->
        <script src="js/jquery-ui.js"></script>
        <script>
            $(function () {
                $("#datepicker,#datepicker1").datepicker();
            });
        </script>
        <!--/End-date-piker-->
        <script src="js/responsiveslides.min.js"></script>
        <!--animate-->
        <link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
        <script src="js/wow.min.js"></script>
        <script>
            new WOW().init();
        </script>
        <!--//end-animate-->
    </head>
    <body>
        <!-- header -->
        <div class="header wow zoomIn">
            <div class="container">
                <div class="header_left" data-wow-duration="2s" data-wow-delay="0.5s">
                    <ul>
                        <li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>+6287809176282</li>
                        <li><a href="mailto:info@example.com"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>fahmirizky29@gmail.com</a></li>
                    </ul>
                </div>
                <div class="header_right">
                    <div class="login">
                        <ul>
                            <?php 
                            if(isset($_SESSION['authorized'])) { ?>
                            <span class="glyphicon glyphicon-user" aria-hidden="true"></span><?php echo $_SESSION['username'];?> &nbsp;
                            <a href="logout.php"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>Logout</a>&nbsp;
                            <?php }else{?>
                                
                            
                            <li><a href="#" data-toggle="modal" data-target="#myModal4"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Login</a></li>
                            <li><a href="#" data-toggle="modal" data-target="#myModal5"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Signup</a></li>
                            <?php }?>
                                    <li>
                                <div class="search-bar">
                                    <div class="search">		
                                        <a class="play-icon popup-with-zoom-anim" href="#small-dialog"><i class="glyphicon glyphicon-search"> </i> </a>
                                    </div>
                                    <script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
                                    <div id="small-dialog" class="mfp-hide">
                                        <div class="search-top">
                                            <div class="login_pop">
                                                <form action="#" method="post">
                                                    <input type="submit" value="">
                                                    <input type="text" name="Type something..." value="Type something..." onfocus="this.value = '';" onblur="if (this.value == '') {
                                                                this.value = '';
                                                            }">
                                                </form>
                                            </div>				
                                        </div>
                                        <script>
                                            $(document).ready(function () {
                                                $('.popup-with-zoom-anim').magnificPopup({
                                                    type: 'inline',
                                                    fixedContentPos: false,
                                                    fixedBgPos: true,
                                                    overflowY: 'auto',
                                                    closeBtnInside: true,
                                                    preloader: false,
                                                    midClick: true,
                                                    removalDelay: 300,
                                                    mainClass: 'my-mfp-zoom-in'
                                                });

                                            });
                                        </script>				
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- //header -->
        <div class="header-bottom ">
            <div class="container">
                <nav class="navbar navbar-default">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="logo grid">
                            <div class="grid__item color-3">
                                <!--<h1><a class="link link--nukun" href="index.php"><i></i>E-Ho<span>SPI</span>tal</a></h1>-->
                            </div>
                        </div>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
                        <nav class="menu menu--horatio">
                            <ul class="nav navbar-nav menu__list">
                                <?php 
                                
                                if ($_SESSION['level']=='admin'){ ?>
                                <li class="menu__item menu__item--current"><a href="index.php" class="menu__link">Home</a></li>
                                <li class="menu__item"><a href="view_obat.php" class="menu__link">Data Obat</a></li> 
                                <li class="menu__item"><a href="view_pasien.php" class="menu__link">Data Pasien</a></li> 
                                <li class="menu__item"><a href="view_dokter.php" class="menu__link">Data Dokter</a></li> 
                                <li class="menu__item"><a href="view_spesialis.php" class="menu__link">Data Spesialis</a></li>
								<li class="menu__item"><a href="add_pembelian.php" class="menu__link">Data Pembelian</a></li> 
                                <li class="menu__item"><a href="add_transaksi.php" class="menu__link">Data Penjualan</a></li>
                                <li class="menu__item"><a href="setting_data.php" class="menu__link">Setting</a></li>
                                <?php }elseif($_SESSION['level']=='pimpinan'){ ?>
                                <li class="menu__item menu__item--current"><a href="index.php" class="menu__link">Home</a></li>
								<li class="menu__item menu__item--current"><a href="dashboard.php" class="menu__link">Dashboard</a></li>
								<li class="menu__item menu__item--current"><a href="view_transaksi.php" class="menu__link">Repot Transaksi</a></li>
                                <?php }else{ ?>
								      <li class="menu__item menu__item--current"><a href="index.php" class="menu__link">Home</a></li>
								<?php }?>
                            </ul>
                        </nav>
                    </div>
                </nav>
            </div>
        </div>