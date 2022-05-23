<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="cache-control" content="no-cache"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>NOMINAPP - Fundación Misión Árbol</title>
    <link rel="icon" type="image/x-icon" href="<?=base_url();?>/public/assets/img/favicon.ico"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
    <link href="<?=base_url();?>/public/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url();?>/public/assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url();?>/public/css/fontawesome.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url();?>/public/assets/css/structure.css" rel="stylesheet" type="text/css" class="structure" />
    <link href="<?=base_url();?>/public/assets/css/structure-minimal.css" rel="stylesheet" type="text/css" class="structure" />
    <!-- END GLOBAL MANDATORY STYLES -->
    
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>/public/plugins/table/datatable/datatables.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>/public/plugins/table/datatable/dt-global_style.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>/public/plugins/dropify/dropify.min.css">
    <script src="<?=base_url();?>/public/plugins/sweetalerts/promise-polyfill.js"></script>
    <link href="<?=base_url();?>/public/assets/css/users/account-setting.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url();?>/public/plugins/sweetalerts/sweetalert2.min.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url();?>/public/plugins/sweetalerts/sweetalert.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url();?>/public/assets/css/components/custom-sweetalert.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>/public/assets/css/forms/theme-checkbox-radio.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>/public/assets/css/forms/switches.css">

    <style>
        /*
            The below code is for DEMO purpose --- Use it if you are using this demo otherwise, Remove it
        */
        .navbar .navbar-item.navbar-dropdown {
            margin-left: auto;
        }
        .layout-px-spacing {
            min-height: calc(100vh - 145px)!important;
        }
        .sm-icon{
            font-size: 2rem;
            margin-right: 0.5rem;
        }
        .xs-icon{
            font-size: 1rem;
            margin-right: 0.5rem;
        }
        .bg-success-alt {
            background-color: #c8f2d2 !important;
        }

    </style>

    <?= $this->renderSection('pluginsTop'); ?>

    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <!-- color sidebar - primary: #77966D || secundary:  #626D58-->
    
</head>
<body class="sidebar-noneoverflow starterkit">
    
    <!--  BEGIN NAVBAR  -->
    <?= $this->include('template/navbar'); ?>
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN SIDEBAR  -->
        <?= $this->include('template/sidebar'); ?>
        <!--  END SIDEBAR  -->
        
        <!--  BEGIN CONTENT AREA  -->
        <?= $this->renderSection('content');?>
        <!--  END CONTENT AREA  -->

    </div>
    <!-- END MAIN CONTAINER -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="<?=base_url();?>/public/assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="<?=base_url();?>/public/bootstrap/js/popper.min.js"></script>
    <script src="<?=base_url();?>/public/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?=base_url();?>/public/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="<?=base_url();?>/public/assets/js/app.js"></script>
    <!-- <script src="css/all.js"></script> -->
    
    <script type="text/javascript">
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="<?=base_url();?>/public/assets/js/custom.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="<?=base_url();?>/public/plugins/dropify/dropify.min.js"></script>
    <script src="<?=base_url();?>/public/plugins/blockui/jquery.blockUI.min.js"></script>
    <script src="<?=base_url();?>/public/plugins/table/datatable/datatables.js"></script>
    <!-- <script src="plugins/tagInput/tags-input.js"></script> -->
    <script src="<?=base_url();?>/public/assets/js/users/account-settings.js"></script>

    <!-- BEGIN PAGE LEVEL CUSTOM SCRIPTS -->
    <script src="<?=base_url();?>/public/plugins/table/datatable/datatables.js"></script>
    <!-- NOTE TO Use Copy CSV Excel PDF Print Options You Must Include These Files  -->
    <script src="<?=base_url();?>/public/plugins/table/datatable/button-ext/dataTables.buttons.min.js"></script>
    <script src="<?=base_url();?>/public/plugins/table/datatable/button-ext/jszip.min.js"></script>    
    <script src="<?=base_url();?>/public/plugins/table/datatable/button-ext/buttons.html5.min.js"></script>
    <script src="<?=base_url();?>/public/plugins/table/datatable/button-ext/buttons.print.min.js"></script>
    <script src="<?=base_url();?>/public/plugins/sweetalerts/sweetalert2.min.js"></script>
    <script src="<?=base_url();?>/public/plugins/sweetalerts/custom-sweetalert.js"></script>
    <script src="<?=base_url();?>/public/assets/js/components/session-timeout/bootstrap-session-timeout.js"></script>
    <script src="<?=base_url();?>/public/assets/js/components/session-timeout/custom-bootstrap_session_timeout.js"></script>

    <?= $this->renderSection('pluginsBottom'); ?>

</body>
</html>