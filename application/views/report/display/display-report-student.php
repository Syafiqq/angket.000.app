<?php
/**
 * This <angket.000.app> project created by :
 * Name         : syafiq
 * Date / Time  : 07 May 2017, 8:48 AM.
 * Email        : syafiq.rezpector@gmail.com
 * Github       : syafiqq
 */
?>

<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Print</title>
    <meta name="a temlplate" content="">

    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url('/apple-touch-icon.png') ?>">
    <!-- Place favicon.ico in the root directory -->

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/normalize.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/main.css') ?>">

    <link href="<?php echo base_url('/assets/bower_components/bootstrap/dist/css/bootstrap.min.css') ?>" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="<?php echo base_url('/assets/js/html5shiv.min.js') ?>"></script>
    <script src="<?php echo base_url('/assets/js/respond.min.js') ?>"></script>
    <![endif]-->
    <script src="<?php echo base_url('/assets/js/vendor/modernizr-2.8.3.min.js') ?>"></script>
    <style type="text/css">
        .no-padding-side {
            padding-left: 0;
            padding-right: 0;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo site_url('dashboard') ?>">Site</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <a href="<?php echo site_url('inventory') ?>">Inventory</a>
                </li>
                <li>
                    <a href="<?php echo site_url('student') ?>">Siswa</a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a id="logout" href="<?php echo site_url('auth/do_logout') ?>">Logout</a>
                </li>
                <li>
                    <a href="<?php echo site_url('profile') ?>">Profile</a>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<div class="container" id="print_container">
    <div class="row vertical-align">
        <div class="col-sm-12 text-center">
            <p id="content_title" style="font-weight: bolder; font-size: 20px; margin: 4px">{THIS IS TITLE}</p>
            <p id="content_subtitle" style="font-size: 16px">{THIS IS SUBTITLE}</p>
        </div>
    </div>
    <div class="row vertical-align">
        <div class="col-sm-3 text-right">
            <p>Nama :</p>
        </div>
        <div class="col-sm-3 no-padding-side">
            <p>{This is Name}</p>
        </div>
        <div class="col-sm-3 text-right">
            <p>TTL :</p>
        </div>
        <div class="col-sm-3 no-padding-side">
            <p>{This is TTL}</p>
        </div>
    </div>
    <div class="row vertical-align">
        <div class="col-sm-3 text-right">
            <p>Jenis Kelamin :</p>
        </div>
        <div class="col-sm-3 no-padding-side">
            <p>{This is Gender}</p>
        </div>
        <div class="col-sm-3 text-right">
            <p>Kelas :</p>
        </div>
        <div class="col-sm-3 no-padding-side">
            <p>{This is Class}</p>
        </div>
    </div>
    <div class="row vertical-align">
        <div class="col-sm-3 text-right">
            <p>Sekolah :</p>
        </div>
        <div class="col-sm-3 no-padding-side">
            <p>{This is School}</p>
        </div>
        <div class="col-sm-3 text-right">
            <p>Tanggal Pengisian :</p>
        </div>
        <div class="col-sm-3 no-padding-side">
            <p>{This is Date}</p>
        </div>
    </div>
    <div class="row vertical-align" style="margin-top: 1cm">
        <div class="col-sm-1">
        </div>
        <div class="col-sm-2 text-right">
            <p>Variabel :</p>
        </div>
        <div class="col-sm-8  no-padding-side">
            <p>{This IS Variable}</p>
        </div>
        <div class="col-sm-1">
        </div>
    </div>
    <div class="row vertical-align">
        <div class="col-sm-1">
        </div>
        <div class="col-sm-2 text-right">
            <p>Prosentase :</p>
        </div>
        <div class="col-sm-8  no-padding-side">
            <p>{This IS Prosentasi}</p>
        </div>
        <div class="col-sm-1">
        </div>
    </div>
    <div class="row">
        <div class="col-sm-1 ">
        </div>
        <div class="col-sm-2 text-right">
            <p>Interpretasi :</p>
        </div>
        <div class="col-sm-8 no-padding-side text-justified">
            <p>{It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.}</p>
        </div>
        <div class="col-sm-1">
        </div>
    </div>

    <div class="row vertical-align" style="margin-top: .35cm">
        <div class="col-sm-1">
        </div>
        <div class="col-sm-2 text-right">
            <p>Variabel :</p>
        </div>
        <div class="col-sm-8  no-padding-side">
            <p>{This IS Variable}</p>
        </div>
        <div class="col-sm-1">
        </div>
    </div>
    <div class="row vertical-align">
        <div class="col-sm-1">
        </div>
        <div class="col-sm-2 text-right">
            <p>Prosentase :</p>
        </div>
        <div class="col-sm-8  no-padding-side">
            <p>{This IS Prosentasi}</p>
        </div>
        <div class="col-sm-1">
        </div>
    </div>
    <div class="row">
        <div class="col-sm-1 ">
        </div>
        <div class="col-sm-2 text-right">
            <p>Interpretasi :</p>
        </div>
        <div class="col-sm-8 no-padding-side text-justified">
            <p>{It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.}</p>
        </div>
        <div class="col-sm-1">
        </div>
    </div>

    <div class="row vertical-align" style="margin-top: .35cm">
        <div class="col-sm-1">
        </div>
        <div class="col-sm-2 text-right">
            <p>Variabel :</p>
        </div>
        <div class="col-sm-8  no-padding-side">
            <p>{This IS Variable}</p>
        </div>
        <div class="col-sm-1">
        </div>
    </div>
    <div class="row vertical-align">
        <div class="col-sm-1">
        </div>
        <div class="col-sm-2 text-right">
            <p>Prosentase :</p>
        </div>
        <div class="col-sm-8  no-padding-side">
            <p>{This IS Prosentasi}</p>
        </div>
        <div class="col-sm-1">
        </div>
    </div>
    <div class="row">
        <div class="col-sm-1 ">
        </div>
        <div class="col-sm-2 text-right">
            <p>Interpretasi :</p>
        </div>
        <div class="col-sm-8 no-padding-side text-justified">
            <p>{It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.}</p>
        </div>
        <div class="col-sm-1">
        </div>
    </div>
    <div class="row" style="margin-top: .35cm">
        <div class="col-sm-1 ">
        </div>
        <div class="col-sm-10 no-padding-side text-justified">
            <p>{Hasil diatas merupakan data diri (NAMA) dalam kecenderungannya terhadap LGBT. Apabila terdapat hasil yang pdirasa tidak sesuai atau memerlukan penjelasan lebih lanjut terkait kondisi diri anda, silahkan datang kepada konselor untuk mendiskusikan hal tersebt lebih lanjut.}</p>
        </div>
        <div class="col-sm-1">
        </div>
    </div>
    <div class="row" style="margin-top: .5cm">
        <div class="col-sm-8 ">
        </div>
        <div class="col-sm-4 no-padding-side">
            <p>{Malang, Date}</p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-8 ">
        </div>
        <div class="col-sm-4 no-padding-side">
            <p>{Konselor}</p>
        </div>
    </div>
    <div class="row" style="margin-top: 1.2cm">
        <div class="col-sm-8 ">
        </div>
        <div class="col-sm-4 no-padding-side">
            <p>{Name}</p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-8 ">
        </div>
        <div class="col-sm-4 no-padding-side">
            <p>{NIP}</p>
        </div>
    </div>
</div>

<script src="<?php echo base_url('/assets/bower_components/jquery/dist/jquery.min.js') ?>"></script>
<script>window.jQuery || document.write('<script src="<?php echo base_url('/assets/bower_components/jquery/dist/jquery.min.js') ?>"><\/script>')</script>
<script src="<?php echo base_url('/assets/js/plugins.js') ?>"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo base_url('/assets/bower_components/bootstrap/dist/js/bootstrap.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/bower_components/tether/dist/js/tether.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/bower_components/remarkable-bootstrap-notify/dist/bootstrap-notify.min.js') ?>"></script>
<script src="<?php echo base_url('/assets/js/report/display/display-student.min.js') ?>"></script>
</body>
</html>
