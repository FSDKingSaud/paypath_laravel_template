<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paypath</title>
    <!-- favicon  -->
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    <!-- faremwork of css -->
    <link rel="stylesheet" href="assets/css/bootstrap-lib/bootstrap.min.css">
    <!-- style sheet of css        -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Responsive sheet of css -->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- fonts awsome icon link            -->
    <link rel="stylesheet" href="assets/font-awesome-lib/icon/font-awesome.min.css">
    <!-- slick-slider link css -->
    <link rel="stylesheet" href="assets/css/slick.min.css">
    <!-- animation of css -->
    <link rel="stylesheet" href="assets/css/aos.css">
</head>
<body data-new-gr-c-s-check-loaded="14.1228.0" data-gr-ext-installed="" cz-shortcut-listen="true" data-aos-easing="ease"
    data-aos-duration="1500" data-aos-delay="0">
    <div class="site-wrapper">
        <div class="first_nav_hero_about">
            @include('components.layouts.frontend.header')
            @yield('hero-about-section')
        </div>
    </div>
    @yield('main-section')
    {{ $slot }}
    @include('components.layouts.frontend.footer')
    @include('components.layouts.frontend.scripts')
    @livewireScripts
</body>

</html>
