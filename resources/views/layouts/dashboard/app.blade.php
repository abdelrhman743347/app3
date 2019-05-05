<html style="height: auto; min-height: 100%;" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>AdminLTE 2 | Dashboard</title>
{{--        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">--}}
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.7 -->
        <link rel="stylesheet" href="{{ asset('dashboard/bower_components/bootstrap/dist/css/bootstrap.min.css')  }}">


        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ asset('dashboard/bower_components/font-awesome/css/font-awesome.min.css')  }}">
            <!-- Ionicons -->
        <link rel="stylesheet" href="{{ asset('dashboard/bower_components/Ionicons/css/ionicons.min.css')  }}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ asset('dashboard/dist/css/AdminLTE.min.css')  }}">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="{{ asset('dashboard/dist/css/skins/_all-skins.min.css')  }}">
        <!-- Morris chart -->
        <link rel="stylesheet" href="{{ asset('dashboard/bower_components/morris.js/morris.css')  }}">
        <!-- jvectormap -->
        <link rel="stylesheet" href="{{ asset('dashboard/bower_components/jvectormap/jquery-jvectormap.css')  }}">
        <!-- Date Picker -->
        <link rel="stylesheet" href="{{ asset('dashboard/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')  }}">
        <!-- Daterange picker -->
        <link rel="stylesheet" href="{{ asset('dashboard/bower_components/bootstrap-daterangepicker/daterangepicker.css')  }}">
        <!-- bootstrap wysihtml5 - text editor -->
        <link rel="stylesheet" href="{{ asset('dashboard/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')  }}">

        <link rel="stylesheet" href="{{ asset('dashboard/plugins/noty/noty.css')}}"  type="text/css">


        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>

        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Google Font -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
        <style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;box-sizing: content-box;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}
        </style>
    </head>

  <body class="skin-blue sidebar-mini wysihtml5-supported" style="height: auto; min-height: 100%;">
      <div class="wrapper" style="height: auto; min-height: 100%;">

        <header class="main-header">
          <!-- Logo -->
          <a href="index2.html" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>A</b>LT</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Admin</b>LTE</span>
          </a>
          <!-- Header Navbar: style can be found in header.less -->
          @include('layouts.dashboard.navbar')
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        @include('layouts.dashboard.aside')
        <!-- Content Wrapper. Contains page content -->

{{--              @include('layouts.dashboard.session')--}}
              @yield('content')

          <footer class="main-footer">
              <strong>Copyright © 2019 <a href="https://adminlte.io">Abdelrhman</a>.</strong> All rights
              reserved.
          </footer>

          <div class="control-sidebar-bg"></div>
      </div>
      <!-- ./wrapper -->
        @include('layouts.dashboard.script')
  </body>
</html>
