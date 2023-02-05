<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
    <meta name="author" content="AdminKit">
    <meta name="keywords"
        content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">
    @yield('css')
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="img/icons/icon-48x48.png" />

    <title>@yield('tittle')</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

    
</head>

<body>

    <div class="wrapper">
    <x-dashsidebar></x-dashsidebar>
        <div class="main">
            <x-dashnav></x-dashnav>
            <main class="content">
                @yield('body')
            </main>
            @yield('pagintation')

        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://kit.fontawesome.com/93e5704d99.js" crossorigin="anonymous"></script>
    

    @yield('js')

</body>

</html>
