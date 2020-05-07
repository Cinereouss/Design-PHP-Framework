<!DOCTYPE html>
<html lang="en">


<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8"/>
    <title><?= $data['Title'] ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta content="" name="description"/>
    <meta content="" name="author"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="/backend/Public/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="/backend/Public/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
    <link href="/backend/Public/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="/backend/Public/assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
    <link href="/backend/Public/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN THEME STYLES -->
    <link href="/backend/Public/assets/global/css/components.css" id="style_components" rel="stylesheet" type="text/css"/>
    <link href="/backend/Public/assets/global/css/plugins.css" rel="stylesheet" type="text/css"/>
    <link href="/backend/Public/assets/admin/layout/css/layout.css" rel="stylesheet" type="text/css"/>
    <link id="style_color" href="/backend/Public/assets/admin/layout/css/themes/darkblue.css" rel="stylesheet" type="text/css"/>
    <link href="/backend/Public/assets/admin/layout/css/custom.css" rel="stylesheet" type="text/css"/>
    <!-- END THEME STYLES -->
    <link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->

<!-- BEGIN BODY -->
<?php require_once ('header.php')?>
<div class="clearfix"></div>

<!-- BEGIN CONTAINER -->
<div class="page-container">
    <?php require_once ('menu.php')?>
    <div class="page-content-wrapper">
        <div class="page-content">
            <?php require_once "./App/Views/".$data['Content']."/index.php" ?>
        </div>
        <!-- BEGIN CONTENT -->
    </div>

</div>
<!-- END CONTAINER -->
<?php require_once ('footer.php')?>
<script src="/backend/Public/assets/global/plugins/respond.min.js"></script>
<script src="/backend/Public/assets/global/plugins/excanvas.min.js"></script>
<![endif]-->
<script src="/backend/Public/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="/backend/Public/assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<!-- IMPORTANT jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="/backend/Public/assets/global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
<script src="/backend/Public/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/backend/Public/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="/backend/Public/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="/backend/Public/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="/backend/Public/assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="/backend/Public/assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="/backend/Public/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="/backend/Public/assets/global/plugins/bootstrap-contextmenu/bootstrap-contextmenu.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="/backend/Public/assets/admin/layout/scripts/quick-sidebar.js" type="text/javascript"></script>
<script src="/backend/Public/assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="/backend/Public/assets/admin/layout/scripts/layout.js" type="text/javascript"></script>
<script src="/backend/Public/assets/admin/pages/scripts/components-context-menu.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
    jQuery(document).ready(function() {
        // initiate layout and plugins
        Metronic.init(); // init metronic core components
        Layout.init(); // init current layout
        QuickSidebar.init(); // init quick sidebar
    });
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>