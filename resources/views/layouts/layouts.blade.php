
<!DOCTYPE html>
<html>
    <head>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        <link rel="stylesheet" href="css/style.css">
        <title>Home</title>
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        
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
        <div class="navbar-fixed">
            <nav class="teal darken-3">
                <div class="container">
                    <div class="nav-wrapper">
                        <a href="" class="brand-logo"><img src="img/logo.jpeg" width="50px" height="50px"></a>
                        <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                        <ul class="right hide-on-med-and-down" id="mobile-demo">
                            <li><a href="">Beranda</a></li>
                            <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Tentang Kami<i class="material-icons right">arrow_drop_down</i></a></li>
                            <li><a href="">Donasi</a></li>
                            <li><a href="">Berita & Artikel</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        
        <!--side nav-->
        <ul class="sidenav" id="mobile-nav">
        <li><a href="">Beranda</a></li>
        <li><a class="dropdown-trigger" href="#!" data-target="dropdown2">Tentang Kami<i class="material-icons right">arrow_drop_down</i></a></li>
        <li><a href="">Donasi</a></li>
        <li><a href="">Berita & Artikel</a></li>
        </ul>
        <!-- dropdown responsive -->
        <ul id="dropdown2" class="dropdown-content">
    <li><a href="#about">Visi Misi</a></li>
    <li><a href="#clients">Clients</a></li>
    <li><a href="#services">Service</a></li>
    <li><a href="#portfolio">Portfolio</a></li>
    <li><a href="#contact">Hubungi Kami</a></li>
</ul>

        <!-- slider -->
    <div class="slider">
    <ul class="slides">
      <li>
        <img src="img/slider/1.png"> <!-- random image -->
        <div class="caption center-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="img/slider/2.png"> <!-- random image -->
        <div class="caption center-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="img/slider/3.png"> <!-- random image -->
        <div class="caption center-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
    </ul>
    </div>

    <!-- about us -->
    <section id="about" class="about scrollspy">
      <div class="container">
        <div class="row">
          <h3 class="center light">About Us</h3>
          <div class="col m6 light">
            <h5>We Are Profesional</h5>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
          </div>
          <div class="col m6 light">
            <p>WEB DEVELOPMENT</p>
            <div class="progress">
              <div class="determinate" style="width: 70%"></div>
          </div>
          <p>WEB DEVELOPMENT</p>
            <div class="progress">
              <div class="determinate" style="width: 70%"></div>
          </div>
          </div>
        </div>
      </div>
    </section>



    <!-- clients -->
    <div class="parallax-container scrollspy" id="clients">
      <div class="parallax"><img src="img/slider/4.png"></div>


      <div class="container">
        <h3 class="center light white-text"> Our Clients</h3>
      </div>
      <div class="row">
        <div class="col m4 s12 center">
          <img src="img/clients/gojek.png" alt="">
        </div>
        <div class="col m4 s12 center">
          <img src="img/clients/traveloka.png" alt="">
        </div>
        <div class="col m4 s12 center">
          <img src="img/clients/tokopedia.png" alt="">
        </div>
      </div>
    </div>

    <!-- services -->
    <section id="services" class="services grey text-lighten-3 scrollspy">
      <div class="container">
        <div class="row">
          <h3 class="light center grey-text text-darken-3">Our Services</h3>
          <div class="col m4 s12">
            <div class="card-panel center">
              <i class="material-icons medium">filter_4</i>
              <h5>Web DEVELOPMENT</h5>
              <p>Isi Pelayanan dari WEB ini</p>
            </div>
          </div>
          <div class="col m4 s12">
            <div class="card-panel center">
              <i class="material-icons medium">filter_4</i>
              <h5>Web DEVELOPMENT</h5>
              <p>Isi Pelayanan dari WEB ini</p>
            </div>
          </div>
          <div class="col m4 s12">
            <div class="card-panel center">
              <i class="material-icons medium">filter_4</i>
              <h5>Web DEVELOPMENT</h5>
              <p>Isi Pelayanan dari WEB ini</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- portfolio -->
    <section class="portfolio scrollspy" id="portfolio">
      <div class="container">
        <h3 class="light center grey-text text-darken-3">Portfolio</h3>
        <div class="row">
          <div class="col m3 s12">
            <img src="img/portfolio/1.png" alt="" class="responsive-img materialboxed">
          </div>
          <div class="col m3 s12">
            <img src="img/portfolio/2.png" alt="" class="responsive-img materialboxed">
          </div>
          <div class="col m3 s12">
            <img src="img/portfolio/3.png" alt="" class="responsive-img materialboxed">
          </div>
          <div class="col m3 s12">
            <img src="img/portfolio/4.png" alt="" class="responsive-img materialboxed">
          </div>

        </div>
      </div>
    </section>

    <!-- contact us -->
    <section class="contact scrollspy" id="contact">
      <div class="container">
        <h3 class="light grey-text text-darken-3 center">Contact Us</h3>
        <div class="row">
          <div class="col m5 s12">
              <div class="card-panel blue darken-2 center white-text">
                <i class="material-icons">email</i>
                <h5>Contact</h5>
                <p>isi ini contacnya</p>
              </div>

              <ul class="collection with-header">
                <li class="collection-header"><h4>our Office</h4></li>
                <li class="collection-item">Web Programming UNPAs</li>
                <li class="collection-item">Nama Jl. Isi</li>

              </ul>

          </div>
          <div class="col m7 s12">
            <form action="">
              <div class="card-panel">
                <h5>Please fill out this form</h5>
                <div class="input-field">
                  <input id="last_name" type="text" class="validate">
                  <label for="last_name">Name</label>
                </div>
                
                <div class="input-field">
                  <input id="last_name" type="email" class="validate">
                  <label for="last_name">Email</label>
                </div>
                <div class="input-field">
                  <input id="last_name" type="number" class="validate">
                  <label for="last_name">Phone Number</label>
                </div>
                <div class="input-field">
                  <textarea name="" id="" cols="30" rows="10" class="materialize-textarea validate"></textarea>
                  <label for="last_name">Message</label>
                </div>
                <div class="input-field">
                  <button class="btn blue darken-2">Send</button>
                </div>
                
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>


    <footer class="blue darken-2 white-text center">
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
            });

            const parallax = document.querySelectorAll('.parallax');
            M.Parallax.init(parallax);
            
            const materialbox = document.querySelectorAll('.materialboxed');
            M.Materialbox.init(materialbox);

            const scrollspy = document.querySelectorAll('.scrollspy');
            M.ScrollSpy.init(scrollspy, {
              scrollOffset: 50
            });
            const dropdown = document.querySelectorAll('.dropdown-trigger');
            M.Dropdown.init(dropdown);
        </script>
    </body>
</html>
        