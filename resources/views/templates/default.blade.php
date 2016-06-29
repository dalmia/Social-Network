<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Chatty</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/css/select2.min.css" rel="stylesheet" />
</head>
<body>
@include('templates.partials.navigation')
<div class="container">
    @include('templates.partials.alerts')
    @yield('content')
</div>
<script src="//code.jquery.com/jquery.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
@yield('footer')

</body>
</html>