<!DOCTYPE html>
<html lang="en">
<head>
   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--=============== REMIXICONS ===============-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">

    <!--=============== Bootstrap CSS ===============-->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!--=============== Custom CSS ===============-->
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    
    <title>@yield('title', 'Default Title')</title>
</head>
<body>
    <!--=============== HEADER ===============-->
    @include('Registration.Header')

    <!--=============== MAIN CONTENT ===============-->
    <div class="main-content">
        @yield('content')
    </div>

    <!--=============== FOOTER ===============-->
    @include('Registration.footer')

    <!--=============== MAIN JS ===============-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/register.js') }}"></script>
</body>
</html>
