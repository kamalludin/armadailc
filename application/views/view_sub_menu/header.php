<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indah Logistic Cargo</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>assets/design/css/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>assets/design/css/bootstrap/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">    
    <!-- Custom Theme Style -->
    <link href="<?php echo base_url();?>assets/design/css/css/local.css" rel="stylesheet" type="text/css">
    <!-- Font Awesome -->
    <link href="<?php echo base_url();?>assets/design/css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Select2 -->    
    <link href="<?php echo base_url();?>assets/design/css/select/select2.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>assets/design/css/select/bootstrap-select.css" rel="stylesheet" type="text/css">
    
    <!-- Datatables -->    
    <link href="<?php echo base_url();?>assets/design/js/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>assets/design/js/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet" type="text/css">      
     
    <!-- DatePicker-->
    <link href="<?php echo base_url();?>assets/design/js/jqueryUI/jquery-ui.min.css" rel="stylesheet" type="text/css">

    <!-- sitemap -->
    <link href="<?php echo base_url();?>assets/design/css/sitemapstyler/sitemapstyler.css" rel="stylesheet" type="text/css" media="screen" />
    

</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url('controller_auth');?>"><img src="<?php echo base_url();?>assets/design/images/ilc.png" width="100px"></a>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav" >
                    <li><a href="<?php echo base_url('controller_auth');?>"> Home</a></li>
                    <li><a href="<?php echo base_url('Armada');?>"> View Armada</a></li>
                    <li><a href="<?php echo base_url('Controller_input_armada'); ?>"> Input Armada</a></li>
                    <li><a href="<?php echo base_url('Controller_pindah_armada'); ?>"> Pindah Armada</a></li>
                    <!--<li><a href="<?php echo base_url('Controller_bayar_cicilan'); ?>"> Bayar Cicilan Armada</a></li>
                     <li><a href="<?php echo base_url('controller_document_setting'); ?>"> Document Setting</a></li> -->
                </ul>
                <ul class="nav navbar-nav navbar-right navbar-user">
                    <li class="dropdown user-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="navbar-text"><i class="fa fa-user"></i> <?php echo $this->session->userdata("nama"); ?><b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <!-- <li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
                            <li><a href="#"><i class="fa fa-gear"></i> Settings</a></li>
                            <li class="divider"></li> -->
                            <li><a href="<?php echo base_url('login/logout'); ?>" style="color: black;"><i class="fa fa-power-off"></i> Log Out</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>