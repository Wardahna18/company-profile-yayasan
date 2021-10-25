<!DOCTYPE html>
<html>

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <link rel="stylesheet" href="css/style.css">
    <title>Home</title>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
    <!-- Dropdown Structure -->
    <ul id="dropdown1" class="dropdown-content">
        <li><a href="#about">Visi Misi</a></li>
        <li><a href="#clients">Clients</a></li>
        <li><a href="#services">Service</a></li>
        <li><a href="#portfolio">Portfolio</a></li>
        <li><a href="#contact">Hubungi Kami</a></li>
    </ul>
    <!-- navbar-->
    <div class="navbar-fixed" style="font-weight: bold;">
        <nav class="teal darken-3">
            <div class="container">
                <div class="nav-wrapper"><a href="" class="brand-logo"><img src="img/logo.jpeg" width="50px"
                            height="50px"></a><a href="#" data-target="mobile-nav" class="sidenav-trigger"><i
                            class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down" id="mobile-demo">
                        <li class="{{ Route::currentRouteNamed('index') ? 'active' : '' }}"><a href="/index">Beranda</a>
                        </li>
                        <li class="{{ Route::currentRouteNamed('about') ? 'active' : '' }}"><a class="dropdown-trigger"
                                href="#!" data-target="dropdown1">Tentang Kami<i
                                    class="material-icons right">arrow_drop_down</i></a></li>
                        <li class="{{ Route::currentRouteNamed('donasi') ? 'active' : '' }}"><a
                                href="/donasi">Donasi</a></li>
                        <li class="{{ Route::currentRouteNamed('') ? 'active' : '' }}"><a href="">Berita &
                                Artikel</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!--side nav-->
    <ul class="sidenav" id="mobile-nav">
        <li class="{{ Route::currentRouteNamed('index') ? 'active' : '' }}"><a href="/index">Beranda</a>
        </li>
        <li class="{{ Route::currentRouteNamed('about') ? 'active' : '' }}"><a class="dropdown-trigger" href="#!"
                data-target="dropdown2">Tentang Kami<i class="material-icons right">arrow_drop_down</i></a></li>
        <li class="{{ Route::currentRouteNamed('donasi') ? 'active' : '' }}"><a href="/donasi">Donasi</a>
        </li>
        <li class="{{ Route::currentRouteNamed('') ? 'active' : '' }}"><a href="">Berita & Artikel</a>
        </li>
    </ul>
    <!-- dropdown responsive -->
    <ul id="dropdown2" class="dropdown-content">
        <li><a href="#about">Visi Misi</a></li>
        <li><a href="#clients">Clients</a></li>
        <li><a href="#services">Service</a></li>
        <li><a href="#portfolio">Portfolio</a></li>
        <li><a href="#contact">Hubungi Kami</a></li>
    </ul>
    {{-- container --}}

    <!-- slider -->
    <div class="slider">
        <ul class="slides">
            <li><img src="img/slider/1.png">
                <!-- random image -->
                <div class="caption center-align">
                    <h3>This is our big Tagline !</h3>
                    <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                </div>
            </li>
            <li><img src="img/slider/2.png">
                <!-- random image -->
                <div class="caption center-align">
                    <h3>This is our big Tagline !</h3>
                    <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                </div>
            </li>
            <li><img src="img/slider/3.png">
                <!-- random image -->
                <div class="caption center-align">
                    <h3>This is our big Tagline !</h3>
                    <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                </div>
            </li>
        </ul>
    </div>@yield('container') <footer class="teal darken-3 white-text center">
        <p class="flow-text">Project Copyright 2021</p>
    </footer>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script>
        const sideNav = document.querySelectorAll('.sidenav');
        M.Sidenav.init(sideNav);
        const slider = document.querySelectorAll('.slider');

        M.Slider.init(slider, {
                indicators: true,
                height: 500,
                transition: 600,
                interval: 3000
            }

        );

        const parallax = document.querySelectorAll('.parallax');
        M.Parallax.init(parallax);

        const materialbox = document.querySelectorAll('.materialboxed');
        M.Materialbox.init(materialbox);

        const scrollspy = document.querySelectorAll('.scrollspy');

        M.ScrollSpy.init(scrollspy, {
                scrollOffset: 50
            }

        );
        const dropdown = document.querySelectorAll('.dropdown-trigger');
        M.Dropdown.init(dropdown);

    </script>
</body>

</html>
