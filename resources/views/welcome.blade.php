<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home page</title>
    <link rel="stylesheet" href="{{asset('bots4/css/bootstrap.min.css')}}">
</head>
<body>
    <ul class="nav justify-content-end bg-dark">
        <li class="nav-item">
            <a class="nav-link" href="{{url('login')}}">Login</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{url('registration')}}">Registration</a>
        </li>
       
    </ul>
  <script src="{{asset('bots4/js/bootstrap.min.js')}}"></script>
</body>
</html>