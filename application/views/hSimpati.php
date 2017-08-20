<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cardio: Free One Page Template by Luka Cvetinovic</title>
    <meta name="description" content="Cardio is a free one page template made exclusively for Codrops by Luka Cvetinovic" />
    <meta name="keywords" content="html template, css, free, one page, gym, fitness, web design" />
    <meta name="author" content="Luka Cvetinovic for Codrops" />
    <!-- Favicons (created with http://realfavicongenerator.net/)-->
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url()?>assets/img/favicons/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo base_url()?>assets/img/favicons/apple-touch-icon-60x60.png">
    <link rel="icon" type="image/png" href="<?php echo base_url()?>assets/img/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="<?php echo base_url()?>assets/img/favicons/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="<?php echo base_url()?>assets/img/favicons/manifest.json">
    <link rel="shortcut icon" href="<?php echo base_url()?>assets/img/favicons/favicon.ico">
    <meta name="msapplication-TileColor" content="#00a8ff">
    <meta name="msapplication-config" content="<?php echo base_url()?>assets/img/favicons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <!-- Normalize -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/normalize.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/bootstrap.css">
    <!-- Owl -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/owl.css">
    <!-- Animate.css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/animate.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/fonts/font-awesome-4.1.0/css/font-awesome.min.css">
    <!-- Elegant Icons -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/fonts/eleganticons/et-icons.css">
    <!-- Main style -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/cardio.css">
    <style>
        a {
            font-family: "Source Code Pro", "Consolas", "Monaco", "Bitstream Vera Sans Mono", "Courier New", Courier, monospace;
        }

        h4,h5{
            font-family: "Source Code Pro", "Consolas", "Monaco", "Bitstream Vera Sans Mono", "Courier New", Courier, monospace;

        }

        h1{
            font-family: "Source Code Pro", "Consolas", "Monaco", "Bitstream Vera Sans Mono", "Courier New", Courier, monospace;

        }

        h3{
            font-family: "Source Code Pro", "Consolas", "Monaco", "Bitstream Vera Sans Mono", "Courier New", Courier, monospace;

        }
    </style>
</head>

<body>
<div class="preloader">

</div>
<nav class="navbar">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right main-nav">
                <li><a href="<?php echo base_url()?>Kuota/hDepan" ><font style="font-family: ">HOME</font></a></li>
                <li><a href="<?php echo base_url()?>Kuota1/kuotaTsel">SIMPATI</a></li>
                <li><a href="<?php echo base_url()?>Kuota2/kuotaXl">XL</a></li>
                <li><a href="<?php echo base_url()?>Kuota/kuotaIm3">IM3</a></li>
                <li><a href="<?php echo base_url()?>Kuota3/kuotadata3">3</a></li>
                <li><a href="<?php echo base_url()?>Kuota4/kuotaxis">AXIS</a></li>
                <li><a href="<?php echo base_url()?>Kuota6/kuotasmartfren">SMARTFREN</a></li>
                <li><a href="<?php echo base_url()?>Kuota5/tokenPLN">TOKEN PLN</a></li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
<header id="intro">
    <div class="container">
        <div class="table">
            <div class="header-text">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h3 class="light white"><font style="color: #ffddaa">SIMPATI</font></h3>
                        <h1 class="white typed"><font style="color: #ffddaa">PULSA DAN KUOTA</font></h1>
                        <span class="typed-cursor">|</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="box" >
    <div class="box-header" >

    </div>
    <!-- /.box-header -->
    <div class="row">
    <div class="box">
        <div class="col-md-13">
            <!-- Horizontal Form -->
            <div class="box box-info">
                <form class="form-horizontal">
                    <div class="box-body">
                        <table id="example1" class="table table-striped" style= "border: 4px outset #001a35"; border-radius: 15px"">
                            <thead>
                            <tr style="background-color: darkslateblue">
                                <th><center><strong><font style="color: #ffffff">KOMPOSISI</font></strong></center></th>
                                <th><center><strong><font style="color: #ffffff">WAKTU</font></strong></center></th>
                                <th><center><strong><font style="color: #ffffff">HARGA</font></strong></center></th>
                                <th><center><strong><font style="color: #ffffff">STATUS</font></strong></center></th>

                            </tr>
                            </thead>
                            <?php
                            $id = 1;
                            foreach ($tampilTsl->result() as $value) {
                                ?>
                                <tr  style="background-color: darkslateblue">
                                    <td><center><strong><font style="color: #ffffff"><?php echo $value->isi; ?></font></strong></center></td>
                                    <td><center><strong><font style="color: #ffffff"><?php echo $value->waktu; ?></font></strong></center></td>
                                    <td><center><strong><font style="color: #ffffff"><?php echo $value->harga; ?></font></strong></center></td>
                                    <td><center><strong><font style="color: #ffffff"><?php if($value->status == 'close') { ?>
                                                    <span class="label label-danger" >close</span>
                                                <?php }elseif ($value->status == 'open'){ ?>
                                            <span class="label label-success" >open</span>
                                        <?php }else{ ?>
                                            <span class="label label-warning" >gangguan</span>
                                            <?php } ?>
                                            </strong></font></center></td>
                                </tr>
                                <?php $id++;  } ?>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.box-body -->

                    <!-- /.box-footer -->
                </form>
            </div>

            <!-- /.box -->
            <!-- general form elements disabled -->
            <!-- /.box -->
        </div>
        <!--/.col (right) -->
    </div>
        </div>
    <!-- /.box-body -->
</div>

<!-- Holder for mobile navigation -->

<!-- Scripts -->
<script src="<?php echo base_url()?>assets/js/jquery-1.11.1.min.js"></script>
<script src="<?php echo base_url()?>assets/js/owl.carousel.min.js"></script>
<script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url()?>assets/js/wow.min.js"></script>
<script src="<?php echo base_url()?>assets/js/typewriter.js"></script>
<script src="<?php echo base_url()?>assets/js/jquery.onepagenav.js"></script>
<script src="<?php echo base_url()?>assets/js/main.js"></script>
</body>
</html>
