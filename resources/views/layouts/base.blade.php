<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Premium Bootstrap 5 Landing Page Template" />
    <meta name="keywords" content="bootstrap 5, premium, marketing, multipurpose" />
    <meta name="author" content="Coderthemes" />

    <!-- Site Title -->
    <title>Appexy - Responsive Bootstrap 5 Landing Page Template</title>
    <!-- Site favicon -->
    <link rel="shortcut icon" href="images/favicon.ico" />

    @yield('css')

    @vite(['node_modules/bootstrap/scss/bootstrap.scss','resources/scss/style.scss'])
</head>


<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="60">

    @yield('content')


    @vite(['resources/js/app.js'])
    @yield('script')

</body>

</html>