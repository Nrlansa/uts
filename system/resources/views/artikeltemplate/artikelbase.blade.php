<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link  rel="stylesheet" type="text/css" href="{{ url('public') }}/plugins/fontawesome-free/css/all.min.css">
    <link href="{{ url('public') }}/dist/css/stylblog.css"rel="stylesheet" type="text/css" >


    <title></title>
  </head>
  <body>

  <!-- Navbar -->
  @include('artikeltemplate.section.header')
  <div class="">
  @yield('content')
  </div>
  @include('artikeltemplate.section.footer')

<!-- jQuery -->
<script src="{{url('public')}}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{url('public')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{url('public')}}/dist/js/adminlte.min.js"></script>
</body>
</html>
