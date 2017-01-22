<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Birmingham Certification Council</title>
        <base href="<?php echo base_url(); ?>">

        <!-- Global stylesheets -->
        <link rel="icon" href="assets/frontend/images/favicon (1).ico" />
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
        <link href="assets/admin/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
        <link href="assets/admin/css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="assets/admin/css/core.css" rel="stylesheet" type="text/css">
        <link href="assets/admin/css/components.css" rel="stylesheet" type="text/css">
        <link href="assets/admin/css/colors.css" rel="stylesheet" type="text/css">
        <link href="assets/admin/css/style.css" rel="stylesheet" type="text/css">
        <!-- /global stylesheets -->

        <!-- Core JS files -->
        <script type="text/javascript" src="assets/admin/js/plugins/loaders/pace.min.js"></script>
        <script type="text/javascript" src="assets/admin/js/core/libraries/jquery.min.js"></script>
        <script type="text/javascript" src="assets/admin/js/core/libraries/bootstrap.min.js"></script>
        <script type="text/javascript" src="assets/admin/js/plugins/loaders/blockui.min.js"></script>
        <!-- /core JS files -->

        <!-- Theme JS files -->
<!--        <script type="text/javascript" src="assets/admin/js/plugins/visualization/d3/d3.min.js"></script>
        <script type="text/javascript" src="assets/admin/js/plugins/visualization/d3/d3_tooltip.js"></script>-->
        <script type="text/javascript" src="assets/admin/js/plugins/forms/styling/switchery.min.js"></script>
        <script type="text/javascript" src="assets/admin/js/plugins/forms/styling/uniform.min.js"></script>
        <script type="text/javascript" src="assets/admin/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
        <script type="text/javascript" src="assets/admin/js/plugins/ui/moment/moment.min.js"></script>
        <script type="text/javascript" src="assets/admin/js/plugins/pickers/daterangepicker.js"></script>
        <script type="text/javascript" src="assets/admin/js/plugins/forms/validation/validate.min.js"></script>
        <script type="text/javascript" src="assets/admin/js/core/app.js"></script>
        <!--<script type="text/javascript" src="assets/admin/js/pages/dashboard.js"></script>-->
        <script type="text/javascript" src="assets/admin/js/plugins/notifications/bootbox.min.js"></script>
        <script type="text/javascript" src="assets/admin/js/plugins/forms/selects/select2.min.js"></script>

        <script type="text/javascript" src="assets/admin/js/pages/form_layouts.js"></script>
        <script type="text/javascript" src="assets/admin/js/pages/form_validation.js"></script>
        <!-- /theme JS files -->

    </head>

    <body>
        
        <!-- Main navbar -->
        <div class="navbar navbar-inverse">
            <div class="navbar-header">
                <a class="navbar-brand" href="admin">
                    <i class="icon-ticket position-left"></i>
                    Birmingham Certification Council
                </a>

                <ul class="nav navbar-nav visible-xs-block">
                    <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
                    <li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
                </ul>
            </div>

            <div class="navbar-collapse collapse" id="navbar-mobile">
                <ul class="nav navbar-nav">
                    <li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>

                </ul>               

                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown dropdown-user">
                        <a class="dropdown-toggle" data-toggle="dropdown">

                            <img class="img-circle img-sm" src="assets/admin/images/placeholder.jpg" alt="">
                            <span><?php
                                echo 'Admin';
//                                        pr($this->session->userdata('admin_logged_in'),1);
                                ?> </span>
                            <i class="caret"></i>
                        </a>

                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="admin/profile"><i class="icon-user-plus"></i> <span>My profile</span></a></li>
                            <li><a href="admin/logout"><i class="icon-switch2"></i> <span>Logout</span></a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /main navbar -->


        <!-- Page container -->
        <div class="page-container">

            <!-- Page content -->
            <div class="page-content">

                <!-- Main sidebar -->
                <div class="sidebar sidebar-main">
                    <div class="sidebar-content">

                        <!-- User menu -->
                        <div class="sidebar-user">
                            <div class="category-content">
                                <div class="media">
                                    <a href="admin" class="media-left"><img src="assets/admin/images/placeholder.jpg" class="img-circle img-sm" alt=""></a>
                                    <div class="media-body">
                                        <span class="media-heading text-semibold"><?php
                                            
                                            ?> </span>

                                            <div class="text-size-mini text-muted">
                                            <i class="icon-user-tie text-size-small"></i>
                                            <?php  echo 'Admin'; ?>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /user menu -->


                        <?php
                        $current_page = $this->uri->segment(3);
                        $page = $this->uri->segment(2);
                        
                        ?>
                        <!-- Main navigation -->
                        <div class="sidebar-category sidebar-category-visible">
                            <div class="category-content no-padding">
                                <ul class="navigation navigation-main navigation-accordion">

                                    <!-- Main -->
                                    <li class="navigation-header"><span>Main</span> <i class="icon-menu" title="Main pages"></i></li>
                                    <li class="<?php echo ($page == '') ? 'active' : ''; ?>"><a href="admin"><i class="icon-home4"></i> <span>Dashboard</span></a></li>
                                    <li class="<?php echo ($page == 'certificates') ? 'active' : ''; ?>"><a href="admin/certificates"><i class="icon-magazine"></i> <span>Certificates</span></a></li>

                                    <!-- /page kits -->

                                </ul>
                            </div>
                        </div>
                        <!-- /main navigation -->

                    </div>
                </div>
                <!-- /main sidebar -->


                <!-- Main content -->
                <div class="content-wrapper">                    

                    <!--                    <div class="alert alert-dismissible div_alert_error" role="alert" style="display: none;">
                                            <button type="button" class="close alert_close" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <div id="error_msg_div">
                                                <p class="alert_error_msg"></p>
                                            </div>
                                        </div>-->

                    <!-- Page header -->
                    <?php echo $body; ?>
                </div>
                <!-- /main content -->

            </div>
            <!-- /page content -->

        </div>
        <!-- /page container -->

    </body>
</html>




