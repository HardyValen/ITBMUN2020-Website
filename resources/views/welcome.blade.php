<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- END of Bootstrap CDN -->

    <!-- FontAwesome CDN -->
    <script src="https://kit.fontawesome.com/9ef1e16e2c.js"></script>
    <!-- END of FontAwesome CDN -->

    <!-- Local CSS -->
    <link rel="stylesheet" href="{{URL::asset('css/base.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/main.css')}}">
    <!-- END of Local CSS -->
</head>

<body>
    <nav class='navigation navigation-landing' id='navbar'>
        <ul>
            <li class='navigation-brand'>
                <img class="navigation-logo" src="{{URL::asset('assets/logo/itbmun2020-logo-white.png')}}">
            </li>
            <ul class='navigation-items'>
                <li class='navigation-item'><a id='active' href=#>Home</a></li>
                <li class='navigation-item'><a href=#>About</a></li>
                <li class='navigation-item'><a href=#>Councils</a></li>
                <li class='navigation-item'><a href=#>Articles</a></li>
                <li class='navigation-item'><a href=#>Documents</a></li>
                <li class='navigation-item'><a href=#>Press</a></li>
            </ul>
            <li class='navigation-burger'>
                <button class="hamburger" type="button">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </li>
        </ul>
    </nav>

    <section class='main-hero' id='hero'>
        <div class="main-hero-container row">
            <div class="col-12"></div>
            <div class="col-md-10 col-12 main-hero-content">
                <p class='interlude'>Ommiting the Void:</p>
                <h1 class='grand-theme'>
                    Bridging the<br>
                    multipolar universe<br>
                    through technology
                </h1>
            </div>
            <div class="col-md-2 col-12 scroll-down">
                <p>
                    <a href="#remark">Learn More&emsp;<i class="fas fa-arrow-down"></i></a>
                </p>
            </div>
        </div>
    </section>

    <section class='main-remark' id='remark'>
        <div class="row">
            <div class="col-md-8 col-12 offset-md-2">
                <h1>REMARKS<br>&mdash;</h1>

                <!-- # START Remark from Secgen ITBMUN 2020 -->
                <div class='remark-card remark-bg-itbmun2020'>
                    <div class='remark-card-summary'>
                        <p>
                            Nulla semper, libero a ultricies varius, ipsum turpis consequat nibh, bibendum maximus elit nisi blandit est... 
                        </p>
                    </div>
                    <div class='remark-card-footer'>
                        <p>
                            <big><b>Angelica Wiliana</b></big><br>
                            Secretary General ITBMUN 2020
                        </p>
                        <a class='button-white-transparent' href='#'>Read</a>
                    </div>
                </div>
                <!-- # END of Secgen ITBMUN 2020 -->

                <!-- # START Remark from Secgen ITBMUN 2019 -->
                <div class='remark-card remark-bg-itbmun2019'>
                    <div class='remark-card-summary'>
                        <p>
                            Vivamus fermentum turpis metus. Maecenas efficitur metus condimentum sapien fringilla tempus. Ut ut mollis est...
                        </p>
                    </div>
                    <div class='remark-card-footer'>
                        <p>
                            <big><b>Bjarne Stornstroup</b></big><br>
                            Secretary General ITBMUN 2019
                        </p>
                        <a class='button-white-transparent' href='#'>Read</a>
                    </div>
                </div>
                <!-- # END of Secgen ITBMUN 2019 -->

                <!-- # START Head of GMUNC ITB -->
                <div class='remark-card remark-bg-gmunc'>
                    <div class='remark-card-summary'>
                        <p>
                        Donec molestie turpis eu tempor pretium. Aliquam tortor quam, fermentum ac fermentum sed..
                        </p>
                    </div>
                    <div class='remark-card-footer'>
                        <p>
                            <big><b>Nelson Mandela</b></big><br>
                            Head of GMUNC ITB
                        </p>
                        <a class='button-white-transparent' href='#'>Read</a>
                    </div>
                </div>
                <!-- # END of Head of GMUNC ITB -->
            </div>
        </div>
    </section>

    <section class='main-venue'>
        
    </section>
</body>

<script src="{{URL::asset('js/nav-scroll.js')}}"></script>
<script src="{{URL::asset('js/smooth-scroll.js')}}"></script>

</html>