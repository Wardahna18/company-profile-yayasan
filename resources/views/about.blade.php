@extends('layouts.dropdown')
@section('container')
<!-- about us -->

<section id="about" class="about scrollspy">
    <div class="container">
        <div class="row">
            <h3 class="center light">About Us</h3>
            <div class="col m6 light">
                <h5>Visi</h5>
                <p>1. Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                <p>2. Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                <p>3. Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
            </div>
            <div class="col m6 light">
                <h5>Misi</h5>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                    leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
                    with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                    publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
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
            <h3 class="light center grey-text text-darken-3">Melayani</h3>
            <div class="col m4 s12">
                <div class="card-panel center">
                    <i class="material-icons medium">filter_4</i>
                    <h5>Tahfidz</h5>
                    <p>Isi Pelayanan dari WEB ini</p>
                </div>
            </div>
            <div class="col m4 s12">
                <div class="card-panel center">
                    <i class="material-icons medium">filter_4</i>
                    <h5>Tahsin</h5>
                    <p>Isi Pelayanan dari WEB ini</p>
                </div>
            </div>
            <div class="col m4 s12">
                <div class="card-panel center">
                    <i class="material-icons medium">filter_4</i>
                    <h5>Kitab</h5>
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
                    <li class="collection-header">
                        <h4>Kantor Kami</h4>
                    </li>
                    {{-- alamat lengkap --}}
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
                            <textarea name="" id="" cols="30" rows="10"
                                class="materialize-textarea validate"></textarea>
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

@endsection
