<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <title>@yield('title')</title>
</head>
<body>
   @include('inc.header')
   @if (Request :: is('/'))
   @include('inc.hero') 
   @endif
   
   <div class="container mt-5">
       @include('inc.messages')

       <div class="row">
           <div class="col-sm-8">
              @yield('content')
           </div>
           <div class="col-sm-4">
            @include('inc.aside')
           </div>
       </div>
    </div>
   @include('inc.footer')
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>