<!DOCTYPE html>
<html>
<head>
    <title>Laravel Multi Step</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
</head>
<body style="background-color: #f4433647">
    <div class="container-fluid bg-1 text-center">
    <img src="https://realprogrammer.in/wp-content/uploads/2019/10/Screenshot-2019-10-19-at-12.50.58-AM.png" class="img-responsive img-circle margin" style="display:inline" alt="Bird" width="20%">
</div>  
<div class="container">
    <h2 style="text-align:center">Laravel Multi Step</h2>
    <br>
    @yield('content')
</div>
</body>
</html>