<?php
/**
 * This <angket.000.app> project created by :
 * Name         : syafiq
 * Date / Time  : 04 May 2017, 6:22 PM.
 * Email        : syafiq.rezpector@gmail.com
 * Github       : syafiqq
 */

if (!isset($categories))
{
    $categories = [];
}

if (!isset($favourables))
{
    $favourables = [];
}

?>


<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Tambah Inventory</title>
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

<div class="container">
    <form id="add" action="<?php echo site_url('inventory/do_add') ?>" method="post" class="form-horizontal">
        <div class="form-group">
            <label for="question" class="col-sm-2 control-label">Pertanyaan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control option-text-disable" id="question" placeholder="Pertanyaan" name="question">
            </div>
        </div>
        <div class="form-group">
            <label for="category" class="col-sm-2 control-label">Kategori</label>
            <div class="col-sm-10">
                <select id="category" name="category" class="form-control">
                    <option class="option-select-disable"></option>
                    <?php
                    foreach ($categories as $category)
                    {
                        $category['description'] = ucfirst($category['description']);
                        echo "<option value=\"{$category['id']}\">{$category['description']}</option>";
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="favour" class="col-sm-2 control-label">Favourable</label>
            <div class="col-sm-10">
                <select id="favour" name="favour" class="form-control">
                    <option class="option-select-disable"></option>
                    <?php
                    foreach ($favourables as $favourable)
                    {
                        $favourable['description'] = ucfirst($favourable['description']);
                        echo "<option value=\"{$favourable['id']}\">{$favourable['description']}</option>";
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="active" class="col-sm-2 control-label">Aktif</label>
            <div class="col-sm-10">
                <select id="active" name="active" class="form-control">
                    <option class="option-select-disable"></option>
                    <option value="1">Aktif</option>
                    <option value="0">Tidak Aktif</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Simpan</button>
            </div>
        </div>
    </form>
</div>

<script src="<?php echo base_url('/assets/bower_components/jquery/dist/jquery.min.js') ?>"></script>
<script>window.jQuery || document.write('<script src="<?php echo base_url('/assets/bower_components/jquery/dist/jquery.min.js') ?>"><\/script>')</script>
<script src="<?php echo base_url('/assets/js/plugins.js') ?>"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo base_url('/assets/bower_components/bootstrap/dist/js/bootstrap.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/bower_components/tether/dist/js/tether.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/bower_components/remarkable-bootstrap-notify/dist/bootstrap-notify.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/bower_components/jquery-serialize-object/dist/jquery.serialize-object.min.js') ?>"></script>
<script src="<?php echo base_url('/assets/js/inventory/add/add-counselor.min.js') ?>"></script>
</body>
</html>
