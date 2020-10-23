<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="images/favicon.ico" type="image/ico" />


        <title>Sistema de Gestion Academica | Fe y Alegria</title>

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <script  type="text/javascript" src="{!! asset('assets/jquery/jquery-3.4.1.min.js') !!}"></script>
        <!-- Bootstrap -->
        <link href="{!! asset('assets/vendors/bootstrap/dist/css/bootstrap.min.css') !!}" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="{!! asset('assets/vendors/font-awesome/css/font-awesome.min.css') !!}" rel="stylesheet">
        <!-- NProgress -->
        <link href="{!! asset('assets/vendors/nprogress/nprogress.css') !!}" rel="stylesheet">
        <!-- iCheck -->
        <link href="{!! asset('assets/vendors/iCheck/skins/flat/green.css') !!}" rel="stylesheet">


        <!-- bootstrap-progressbar -->
        <link href="{!! asset('assets/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') !!}" rel="stylesheet">
        <!-- JQVMap -->
        <link href="{!! asset('assets/vendors/jqvmap/dist/jqvmap.min.css') !!}" rel="stylesheet"/>
        <!-- bootstrap-daterangepicker -->
        <link href="{!! asset('assets/vendors/bootstrap-daterangepicker/daterangepicker.css') !!}" rel="stylesheet">

        <!-- Custom Theme Style -->
        <link href="{!! asset('assets/build/css/custom.min.css') !!}" rel="stylesheet">
      </head>

  <body class="login">
      @yield('login')

      <!-- jQuery -->
      <script src="{!! asset('assets/vendors/jquery/dist/jquery.min.js') !!}"></script>

  </body>
</html>
