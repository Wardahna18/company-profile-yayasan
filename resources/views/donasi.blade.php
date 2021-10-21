@extends('layouts.layouts')

@section('container')
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
<h4 class="donasih4">Tidak ada hal yang lebih menenangkan, selain berdonasi untuk para Santri </h4>
<h6 class="donasih6">Kategori Donasi</h6>
<div class="carousel">
    <a class="carousel-item" href="#one!"><img src="img/portfolio/1.png"></a>
    <a class="carousel-item" href="#one!"><img src="img/portfolio/1.png"></a>
    <a class="carousel-item" href="#one!"><img src="img/portfolio/1.png"></a>
    <a class="carousel-item" href="#one!"><img src="img/portfolio/1.png"></a>
    <a class="carousel-item" href="#one!"><img src="img/portfolio/1.png"></a>
</div>
<div class="row">
    <div class="col s12 m4">
        <div class="card">
            <div class="card-image">
                <img src="/img/portfolio/1.png">
                <span class="card-title">Card Title</span>
            </div>
            <div class="card-content">
                <p>I am a very simple card. I am good at containing small bits of information.
                    I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
                <a href="#">This is a link</a>
            </div>
        </div>
    </div>
    <div class="col s12 m4">
        <div class="card">
            <div class="card-image">
                <img src="/img/portfolio/1.png">
                <span class="card-title">Card Title</span>
            </div>
            <div class="card-content">
                <p>I am a very simple card. I am good at containing small bits of information.
                    I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
                <a href="#">This is a link</a>
            </div>
        </div>
    </div>
    <div class="col s12 m4">
        <div class="card">
            <div class="card-image">
                <img src="/img/portfolio/1.png">
                <span class="card-title">Card Title</span>
            </div>
            <div class="card-content">
                <p>I am a very simple card. I am good at containing small bits of information.
                    I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
                <a href="#">This is a link</a>
            </div>
        </div>
    </div>

</div>
@endsection
