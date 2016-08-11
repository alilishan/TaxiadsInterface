<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Taxi Ads</title>
        
        <link rel="apple-touch-icon" sizes="180x180" href="assets/apple-touch-icon.png">
        <link rel="icon" type="image/png" href="assets/favicons/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="assets/favicons/favicon-16x16.png" sizes="16x16">
        <link rel="manifest" href="assets/favicons/manifest.json">
        <link rel="mask-icon" href="assets/favicons/safari-pinned-tab.svg" color="#5bbad5">
        <link rel="shortcut icon" href="assets/favicons/favicon.ico">
        <meta name="msapplication-config" content="assets/favicons/browserconfig.xml">
        <meta name="theme-color" content="#ffffff">

        <link rel="stylesheet" href="assets/libs/bootstrap-3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/libs/font-awesome-4.6.3/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/plugins/js-amcharts/plugins/export/export.css">
        <link rel="stylesheet" href="assets/plugins/bs-select/bootstrap-select.min.css">
        <link rel="stylesheet" href="assets/css/app-main.min.css">

        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
    <body>

        <nav class="navbar navbar-inverse navbar-fixed-top main-navbar">
            <div class="container">
                <div class="logo"></div>
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- <a class="navbar-brand" href="#">Project name</a> -->
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.php?p=d">Dashboard</a></li>
                        <li><a href="index.php?p=c">Campaigns</a></li>
                        <li><a href="index.php?p=l">Users</a></li>
                        <li><a href="index.php?p=c">Billing</a></li>
                        <li><a href="index.php?p=d">Learn</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#" class="btn-highlight">UPGRADE NOW</a></li>
                        <li><a href="#"><i class="glyphicon glyphicon-bell"></i></a></li>
                        <li class="dropdown user-dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Ali Lishan <span class="caret"></span></a>
                            <div class="dropdown-menu">
                                <div class="content">
                                    <div class="av">
                                        <div class="m-avatar"><div class="initials">AL</div></div>
                                        <div class="uploader"></div>
                                    </div>
                                    <div class="text">
                                        <h1>Ali Lishan</h1>
                                        <p>alilishan@gmail.com</p>
                                        <a href="#" class="btn btn-primary">User Account</a>
                                    </div>
                                    <div class="nav-links">
                                        <div class="list-item"><a href="#">About</a></div>
                                        <div class="list-item"><a href="#">Manage Something</a></div>
                                        <div class="list-item"><a href="login.php">Log Out</a></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>

        <?php 
            if(!isset($_REQUEST['p'])) {
                header("Location: http://localhost/Interface_TaxiAds/index.php?p=d"); /* Redirect browser */
                exit();
            }
         ?>
        
        <div class="main-header">
            <div class="container">
                <div class="pull-right">
                    <a href="index.php?p=ca" class="btn btn-ta">Create Campaign</a>
                </div>
                <h2>Campaigns</h2>

                <?php if($_REQUEST['p'] == 'c'){ ?>
                <ul class="section-nav">
                    <li class="list-item active"><a href="index.php?p=d" class="link">Campaigns</a></li>
                    <li class="list-item"><a href="index.php?p=c" class="link">Users</a></li>
                    <li class="list-item"><a href="index.php?p=d" class="link">Billing</a></li>
                    <li class="list-item dropdown fancy-dropdown">
                        <a href="#" class="link dropdown-toggle" data-toggle="dropdown"><span class="icon-more"></span> </a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                    </li>
                </ul>
                <?php } ?>

            </div>
        </div>


        <div id="main-content">
        	<div class="container">


                <?php

                    $page = $_REQUEST['p'];

                    switch ($page) {
                        case "d":
                            include 'components/flot-charts.php';
                            echo '<hr />';
                            include 'components/table-listing.php';
                            break;

                        case "c":
                            include 'components/campaign-top.php';
                            echo '<hr />';
                            include 'components/table-listing.php';
                            break;

                        case "ca":
                            include 'components/campaign-wizard.php';
                            break;                            

                        case "l":
                            include 'components/alerts.php';
                            include 'components/table-listing.php';
                            break;

                        default:
                            include 'components/table-listing.php';
                    }
                ?>


        	</div> <!-- END .container -->	
        </div> <!-- END #main-content -->


        <div class="container-fluid">
            <footer class="text-center">
                <p>Copyright &copy; 2015-<?php echo date('Y'); ?> . Taxi Ads v 1.0.0</p>
            </footer>
        </div>


        <!-- Delete Modal -->
        <div id="modal-delete" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal-delete">
            <div class="vertical-alignment-helper">
                <div class="modal-dialog vertical-align-center" role="document">
                    <div class="modal-content">
                        <a href="#" class="dc-dismiss-x" data-dismiss="modal"></a>
                        <div class="dc-heading ng-binding">Delete Items</div>
                        <div class="dc-content">
                            <h3><strong class="ng-binding">Warning: this cannot be undone.</strong></h3>
                            <div class="checkedbox checked"> You have selected 1 item<span>s</span>.</div>
                            <div class="checkedbox checked"> All selected media item<span>s</span> will be <strong>permenantly deleted</strong>.</div>
                            <div class="checkedbox checked"> All content linked to the item<span>s</span> will be <strong>broken</strong>.</div>
                            <?php /* ?>
                            <div class="checkedbox checked"> All Sub-Folders linked to the Folder will be <strong>deleted</strong>.</div>
                            <div class="checkedbox checked"> All Media Files linked to the Folder will be <strong>deleted</strong>.</div>
                            <div class="checkedbox checked"> All content linked to the Media in the Folders will be <strong>broken</strong>.</div>
                            <?php */ ?>
                            <div class="btn-bar">
                                <a href="" class="btn btn-danger btn-delete">Yes, Delete media</a>
                                <a href="#" class="btn btn-link" data-dismiss="modal">Close</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Delete Modal -->

        <script src="assets/libs/jquery-2.2.4.min.js"></script>
        <script src="assets/libs/bootstrap-3.3.7/js/bootstrap.min.js"></script>

        <!-- Plugins -->
        <script src="assets/plugins/jq-checkall/jquery.checkall.js"></script>
        <script src="assets/plugins/js-jetssearch/jets.min.js"></script>
        <script src="assets/plugins/bs-select/bootstrap-select.min.js"></script>
        
        <!-- Charts -->
        <script src="assets/plugins/js-amcharts/amcharts.js"></script>
        <script src="assets/plugins/js-amcharts/serial.js"></script>
        <script src="assets/plugins/js-amcharts/plugins/export/export.min.js"></script>
        <script src="assets/plugins/js-amcharts/themes/light.js"></script>

        <!-- App -->
        <script src="assets/js/app-charts.js"></script>
        <script src="assets/js/app-main.js"></script>

    </body>
</html>