<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>

    <link rel="shortcut icon" href="{{('frontend/favicon.ico')}}" type="image/x-icon">
    <link rel="icon" href="{{('/favicon.ico')}}" type="image/x-icon">

    <link rel="stylesheet" href="{{('frontend/css/bootstrap.min.css')}}">

    <link rel="stylesheet" href="{{('frontend/css/custom.css')}}">

</head>
<body>
<div class="login-page-main login-bg">
    @yield('content')
</div>
@yield('scripts')
   
</body>
</html>