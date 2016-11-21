<?php
    $assert_path=assert_path;
    $logged_username=$this->session->userdata('ci_name');
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo $assert_path;?>asset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo $assert_path;?>asset/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="<?php echo $assert_path; ?>asset/css/bootstrap-datepicker3.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo $assert_path;?>asset/dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="<?php echo $assert_path;?>asset/dist/css/custom.css" rel="stylesheet" type="text/css">

    <!-- Custom Fonts -->
    <link href="<?php echo $assert_path;?>asset/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
    <!-- DataTables CSS -->
    <link href="<?php echo $assert_path;?>asset/vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">
    <!-- DataTables Responsive CSS -->
    <link href="<?php echo $assert_path;?>asset/vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- jQuery -->
    <script src="<?php echo $assert_path;?>asset/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo $assert_path;?>asset/vendor/bootstrap/js/bootstrap.min.js"></script>

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url(); ?>">Finegrabz</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">                
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li>
                            <a href="<?php echo base_url(); ?>settings/profile"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>settings/password"><i class="fa fa-gear fa-fw"></i> Change Password</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="<?php echo base_url(); ?>login/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li> 
                        <li>
                            <a href="<?php echo base_url(); ?>menu"><i class="fa fa-files-o fa-fw"></i> Menu</a>
                        </li> 
                        <li>
                            <a href="<?php echo base_url(); ?>weekly_menu"><i class="fa fa-files-o fa-fw"></i> Weekly Menu</a>
                        </li> 
                        <li>
                            <a href="<?php echo base_url(); ?>user"><i class="fa fa-files-o fa-fw"></i> User</a>
                        </li>                       
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    
                    <?php if(isset($header_title)) { ?>
                        <div class="col-lg-12">
                            <h1 class="page-header"><?php echo $header_title; ?></h1>
                        </div>

                        <div class="clearfix"></div>

                        <?php if($this->session->flashdata('success_msg')) {
                            echo '<div class="alert alert-success">'.$this->session->flashdata('success_msg').'</div>';
                        }
                        if($this->session->flashdata('fail_msg')) {
                            echo '<div class="alert alert-danger">'.$this->session->flashdata('fail_msg').'</div>';
                        } ?>
                    <?php } ?>
                