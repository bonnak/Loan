<!DOCTYPE html>
<html lang="en" class="body-full-height">
<head>
    <!-- META SECTION -->
    <title>Loan System</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <link rel="icon" href="favicon.ico" type="image/x-icon"/>
    <!-- END META SECTION -->

    <!-- CSS INCLUDE -->
    <link rel="stylesheet" type="text/css" id="theme" href="{{ url('joli/css/theme-default.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ url('css/app.css') }}"/>    
    <!-- EOF CSS INCLUDE -->
</head>
<body>
  
  <div id="app" class="body-full-height">
    <component :is="current_view"></component>
  </div>

  <!-- START SCRIPTS -->
  <!-- START PLUGINS -->
  <script type="text/javascript" src="/joli/js/plugins/jquery/jquery.min.js"></script>
  <script type="text/javascript" src="/joli/js/plugins/jquery/jquery-ui.min.js"></script>
  <script type="text/javascript" src="/joli/js/plugins/bootstrap/bootstrap.min.js"></script>        
  <!-- END PLUGINS -->

  <!-- START PAGE PLUGINS-->         
  <script type="text/javascript" src="/joli/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
  <script type="text/javascript" src="/joli/js/plugins/datatables/jquery.dataTables.min.js"></script>
  <!-- END PAGE PLUGINS --> 

  <script type="text/javascript" src="/js/app.js"></script>
  <!-- END SCRIPTS -->
</body>
</html>
